<?php
namespace App\Controllers;

use App\Models\CutiModel;
use App\Models\EmployeeModel;

class Cuti extends BaseController
{
    protected $cutiModel;
    protected $employeeModel;

    public function __construct()
    {
        $this->cutiModel = new CutiModel();
        $this->employeeModel = new EmployeeModel();
    }

    public function index()
    {
        $data['cuti'] = $this->cutiModel->getJoin()->findAll();
        return view('cuti/index', $data);
    }

    public function create()
    {
        $data['pegawai'] = $this->employeeModel->findAll();
        return view('cuti/create', $data);
    }

    public function save()
    {
        $this->cutiModel->insert([
            'pegawai_id' => $this->request->getPost('pegawai_id'),
            'tanggal_awal' => $this->request->getPost('tanggal_awal'),
            'tanggal_akhir' => $this->request->getPost('tanggal_akhir'),
            'jenis' => $this->request->getPost('jenis'),
            'alasan' => $this->request->getPost('alasan'),
            'status' => 'Menunggu',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->to('/cuti');
    }

    public function edit($id)
    {
        $data['cuti'] = $this->cutiModel->find($id);
        return view('cuti/edit', $data);
    }

    public function update($id)
    {
        $this->cutiModel->update(
            $id,
            [
                'status' => $this->request->getPost('status'),
                'alasan_penolakan' => $this->request->getPost('alasan_penolakan'),
            ]
        );
        return redirect()->to('/cuti');
    }
}
