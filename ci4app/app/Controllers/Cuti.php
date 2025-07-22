<?php
namespace App\Controllers;

use App\Models\CutiModel;
use App\Models\EmployeeModel;
use App\Models\CutiLogModel;

class Cuti extends BaseController
{
    protected $cutiModel;
    protected $employeeModel;
    protected $logModel;

    public function __construct()
    {
        $this->cutiModel = new CutiModel();
        $this->employeeModel = new EmployeeModel();
        $this->logModel = new CutiLogModel();
    }

    public function index()
    {
        $data['cuti'] = $this->cutiModel->getJoin()->findAll();
        $user = session('user');
        if ($user['role'] === 'hr') {
            $data['pegawai'] = $this->employeeModel->findAll();
        } else {
            $emp = $this->employeeModel->where('nama', $user['name'])->first();
            $data['selected'] = $emp['id'] ?? null;
        }
        return view('cuti/index', $data);
    }

    public function create()
    {
        $user = session('user');
        if ($user['role'] === 'hr') {
            $data['pegawai'] = $this->employeeModel->findAll();
        } else {
            $emp = $this->employeeModel->where('nama', $user['name'])->first();
            $data['selected'] = $emp['id'] ?? null;
        }
        return view('cuti/create', $data);
    }

    public function save()
    {
        $user = session('user');
        if ($user['role'] === 'hr') {
            $pegawaiId = $this->request->getPost('pegawai_id');
        } else {
            $emp = $this->employeeModel->where('nama', $user['name'])->first();
            $pegawaiId = $emp['id'] ?? null;
        }

        $data = [
            'pegawai_id' => $pegawaiId,
            'tanggal_awal' => $this->request->getPost('tanggal_awal'),
            'tanggal_akhir' => $this->request->getPost('tanggal_akhir'),
            'jenis' => $this->request->getPost('jenis'),
            'alasan' => $this->request->getPost('alasan'),
            'status' => 'Menunggu',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->cutiModel->insert($data);
        $cutiId = $this->cutiModel->getInsertID();
        $this->logModel->insert([
            'cuti_id' => $cutiId,
            'message' => 'Pengajuan dibuat oleh '.session('user')['name'],
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        // notify HR via email
        $email = service('email');
        $hrEmails = array_map('trim', explode(',', getenv('HR_EMAILS') ?: ''));
        foreach ($hrEmails as $hr) {
            $email->setTo($hr);
            $email->setSubject('Permohonan Cuti Baru');
            $email->setMessage('Pegawai ID '.$data['pegawai_id'].' mengajukan cuti.');
            $email->send();
        }
        session()->setFlashdata('success', 'Permohonan cuti dikirim.');
        return redirect()->to('/cuti');
    }

    public function edit($id)
    {
        $data['cuti'] = $this->cutiModel->find($id);
        $data['pegawai'] = $this->employeeModel->findAll();
        return view('cuti/edit', $data);
    }

    public function update($id)
    {
        $user = session('user');
        $cuti = $this->cutiModel->find($id);
        $oldStatus = $cuti['status'] ?? null;
        if (!$cuti) {
            return redirect()->to('/cuti');
        }

        if ($user['role'] === 'hr') {
            $data = [
                'pegawai_id' => $this->request->getPost('pegawai_id'),
                'tanggal_awal' => $this->request->getPost('tanggal_awal'),
                'tanggal_akhir' => $this->request->getPost('tanggal_akhir'),
                'jenis' => $this->request->getPost('jenis'),
                'alasan' => $this->request->getPost('alasan'),
                'status' => $this->request->getPost('status'),
                'alasan_penolakan' => $this->request->getPost('alasan_penolakan'),
            ];
        } else {
            if ($cuti['status'] !== 'Menunggu') {
                session()->setFlashdata('error', 'Tidak dapat mengubah permohonan setelah diproses.');
                return redirect()->to('/cuti');
            }
            $emp = $this->employeeModel->where('nama', $user['name'])->first();
            $pegawaiId = $emp['id'] ?? null;
            $data = [
                'pegawai_id' => $pegawaiId,
                'tanggal_awal' => $this->request->getPost('tanggal_awal'),
                'tanggal_akhir' => $this->request->getPost('tanggal_akhir'),
                'jenis' => $this->request->getPost('jenis'),
                'alasan' => $this->request->getPost('alasan'),
            ];
        }

        $this->cutiModel->update($id, $data);

        if ($user['role'] === 'hr') {
            $status = $this->request->getPost('status');
            if ($status === 'Disetujui') {
                $cuti = $this->cutiModel->find($id);
                $start = new \DateTime($cuti['tanggal_awal']);
                $end = new \DateTime($cuti['tanggal_akhir']);
                $days = $start->diff($end)->days + 1;
                $pegawai = $this->employeeModel->find($cuti['pegawai_id']);
                $this->employeeModel->update($pegawai['id'], [
                    'sisa_cuti' => max(0, $pegawai['sisa_cuti'] - $days),
                ]);
            }
            if ($status !== $oldStatus) {
                $reason = $this->request->getPost('alasan_penolakan');
                $msg = 'Status diubah menjadi '.$status;
                if ($reason) {
                    $msg .= ' dengan alasan: '.$reason;
                }
                $this->logModel->insert([
                    'cuti_id' => $id,
                    'message' => $msg,
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
            }
        }

        $this->logModel->insert([
            'cuti_id' => $id,
            'message' => 'Permohonan diperbarui oleh '.$user['name'],
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        session()->setFlashdata('success', 'Permohonan cuti diperbarui.');
        return redirect()->to('/cuti');
    }

    public function delete($id)
    {
        $cuti = $this->cutiModel->find($id);
        if ($cuti) {
            $user = session('user');
            if ($user['role'] !== 'hr' && $cuti['status'] !== 'Menunggu') {
                session()->setFlashdata('error', 'Tidak dapat menghapus permohonan setelah diproses.');
                return redirect()->to('/cuti');
            }
            $this->cutiModel->delete($id);
            $this->logModel->insert([
                'cuti_id' => $id,
                'message' => 'Permohonan dihapus oleh '.$user['name'],
                'created_at' => date('Y-m-d H:i:s'),
            ]);
            session()->setFlashdata('success', 'Permohonan cuti dihapus.');
        }
        return redirect()->to('/cuti');
    }

    public function timeline($id)
    {
        $cuti = $this->cutiModel->select('cuti.*, pegawai.nama')
            ->join('pegawai', 'pegawai.id=cuti.pegawai_id')
            ->find($id);
        if (!$cuti) {
            return redirect()->to('/cuti');
        }

        $logs = $this->logModel->where('cuti_id', $id)
            ->orderBy('created_at', 'asc')
            ->findAll();

        return view('cuti/timeline', [
            'logs' => $logs,
            'cuti' => $cuti,
        ]);
    }

    public function sanggah($id)
    {
        $user = session('user');
        if ($user['role'] === 'hr') {
            return redirect()->to('/cuti/timeline/'.$id);
        }
        $message = $this->request->getPost('sanggah');
        if ($message) {
            $this->logModel->insert([
                'cuti_id' => $id,
                'message' => 'Sanggahan oleh '.$user['name'].': '.$message,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
            session()->setFlashdata('success', 'Sanggahan dikirim.');
        }
        return redirect()->to('/cuti/timeline/'.$id);
    }
}
