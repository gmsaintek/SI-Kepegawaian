<?php
namespace App\Controllers;

use App\Models\AttendanceModel;
use App\Models\EmployeeModel;

class Attendance extends BaseController
{
    protected $attendanceModel;
    protected $employeeModel;

    public function __construct()
    {
        $this->attendanceModel = new AttendanceModel();
        $this->employeeModel = new EmployeeModel();
    }

    public function index()
    {
        $emp = $this->request->getGet('pegawai_id');
        $date = $this->request->getGet('tanggal');
        $status = $this->request->getGet('status');
        $builder = $this->attendanceModel->getJoin();
        if ($emp) {
            $builder->where('pegawai_id', $emp);
        }
        if ($date) {
            $builder->where('tanggal', $date);
        }
        if ($status) {
            $builder->where('status', $status);
        }
        $data['pegawai'] = $this->employeeModel->findAll();
        $data['presensi'] = $builder->findAll();
        $data['filter'] = ['pegawai_id' => $emp, 'tanggal' => $date, 'status' => $status];
        return view('attendance/index', $data);
    }

    public function create()
    {
        $data['pegawai'] = $this->employeeModel->findAll();
        return view('attendance/create', $data);
    }

    public function edit($id)
    {
        $data['pegawai'] = $this->employeeModel->findAll();
        $data['presensi'] = $this->attendanceModel->find($id);
        return view('attendance/edit', $data);
    }

    public function save()
    {
        $pegawaiId = $this->request->getPost('pegawai_id');
        $tanggal = $this->request->getPost('tanggal');
        $exists = $this->attendanceModel->where(['pegawai_id' => $pegawaiId, 'tanggal' => $tanggal])->first();
        if ($exists) {
            session()->setFlashdata('error', 'Presensi untuk tanggal tersebut sudah ada.');
            return redirect()->back()->withInput();
        }
        $this->attendanceModel->insert([
            'pegawai_id' => $pegawaiId,
            'tanggal' => $tanggal,
            'status' => $this->request->getPost('status'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        session()->setFlashdata('success', 'Presensi tersimpan.');
        return redirect()->to('/attendance');
    }

    public function update($id)
    {
        $this->attendanceModel->update($id, [
            'pegawai_id' => $this->request->getPost('pegawai_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'status' => $this->request->getPost('status'),
        ]);
        session()->setFlashdata('success', 'Presensi diperbarui.');
        return redirect()->to('/attendance');
    }
}
