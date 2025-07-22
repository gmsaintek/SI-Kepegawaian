<?php
namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'nik',
        'tanggal_lahir',
        'jabatan',
        'kontak',
        'document',
        'sisa_cuti',
        'created_at',
        'updated_at',
    ];
}
