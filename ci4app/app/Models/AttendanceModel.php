<?php
namespace App\Models;

use CodeIgniter\Model;

class AttendanceModel extends Model
{
    protected $table = 'presensi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'pegawai_id',
        'tanggal',
        'status',
        'photo',
        'location',
        'created_at',
    ];

    public function getJoin()
    {
        return $this->select('presensi.*, pegawai.nama')
                    ->join('pegawai', 'pegawai.id = presensi.pegawai_id');
    }
}
