<?php
namespace App\Models;

use CodeIgniter\Model;

class CutiModel extends Model
{
    protected $table = 'cuti';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'pegawai_id','tanggal_awal','tanggal_akhir','jenis','alasan','status','alasan_penolakan','created_at'
    ];

    public function getJoin()
    {
        return $this->select('cuti.*, pegawai.nama')
                    ->join('pegawai', 'pegawai.id = cuti.pegawai_id');
    }
}
