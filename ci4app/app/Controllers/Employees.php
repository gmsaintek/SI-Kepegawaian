<?php
namespace App\Controllers;

use App\Models\EmployeeModel;

class Employees extends BaseController
{
    protected $employeeModel;

    public function __construct()
    {
        $this->employeeModel = new EmployeeModel();
    }

    public function index()
    {
        $data['pegawai'] = $this->employeeModel->findAll();
        return view('employees/index', $data);
    }

    public function create()
    {
        return view('employees/create');
    }

    public function save()
    {
        $this->employeeModel->insert([
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jabatan' => $this->request->getPost('jabatan'),
            'kontak' => $this->request->getPost('kontak'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->to('/employees');
    }

    public function edit($id)
    {
        $data['pegawai'] = $this->employeeModel->find($id);
        return view('employees/edit', $data);
    }

    public function update($id)
    {
        $this->employeeModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jabatan' => $this->request->getPost('jabatan'),
            'kontak' => $this->request->getPost('kontak'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->to('/employees');
    }
}
