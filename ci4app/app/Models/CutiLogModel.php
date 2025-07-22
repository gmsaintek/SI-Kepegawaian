<?php
namespace App\Models;

use CodeIgniter\Model;

class CutiLogModel extends Model
{
    protected $table = 'cuti_logs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['cuti_id','message','created_at'];
}
