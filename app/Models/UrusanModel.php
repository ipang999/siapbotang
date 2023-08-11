<?php

namespace App\Models;

use CodeIgniter\Model;

class UrusanModel extends Model
{
    protected $table = 'tbl_urusan';
    protected $primaryKey = 'id_urusan';
    protected $allowedFields = ['nama_urusan','id_urusan'];
}
