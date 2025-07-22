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
        $search = $this->request->getGet('q');
        $builder = $this->employeeModel;
        if ($search) {
            $builder = $builder->groupStart()
                ->like('nama', $search)
                ->orLike('nik', $search)
                ->groupEnd();
        }
        $data['pegawai'] = $builder->findAll();
        $data['search'] = $search;
        return view('employees/index', $data);
    }

    public function create()
    {
        return view('employees/create');
    }

    public function save()
    {
        $document = $this->request->getFile('document');
        $docPath = null;
        if ($document && $document->isValid()) {
            $docPath = $document->store('uploads');
        }
        $this->employeeModel->insert([
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jabatan' => $this->request->getPost('jabatan'),
            'kontak' => $this->request->getPost('kontak'),
            'document' => $docPath,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        session()->setFlashdata('success', 'Data pegawai berhasil disimpan.');
        return redirect()->to('/employees');
    }

    public function edit($id)
    {
        $data['pegawai'] = $this->employeeModel->find($id);
        return view('employees/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jabatan' => $this->request->getPost('jabatan'),
            'kontak' => $this->request->getPost('kontak'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $document = $this->request->getFile('document');
        if ($document && $document->isValid()) {
            $data['document'] = $document->store('uploads');
        }
        $this->employeeModel->update($id, $data);
        session()->setFlashdata('success', 'Data pegawai berhasil diperbarui.');
        return redirect()->to('/employees');
    }
}
