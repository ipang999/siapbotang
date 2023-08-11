<?php

namespace App\Models;

use CodeIgniter\Model;

class RekeningModel extends Model
{
    protected $table = 'tbl_rekening';
    protected $primaryKey = 'id_rekening';
    protected $allowedFields = ['kode_rekening','tipe', 'kelompok', 'jenis', 'objek', 'rincian', 'sub1', 'sub2', 'sub3'];
}

