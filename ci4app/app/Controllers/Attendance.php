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
        $data['presensi'] = $this->attendanceModel->getJoin()->findAll();
        return view('attendance/index', $data);
    }

    public function create()
    {
        $data['pegawai'] = $this->employeeModel->findAll();
        return view('attendance/create', $data);
    }

    public function save()
    {
        $this->attendanceModel->insert([
            'pegawai_id' => $this->request->getPost('pegawai_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'status' => $this->request->getPost('status'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->to('/attendance');
    }
}
