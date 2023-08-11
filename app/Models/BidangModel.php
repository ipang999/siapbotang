<?php

namespace App\Models;

use CodeIgniter\Model;

class BidangModel extends Model
{
    protected $table = 'tbl_bidang';
    protected $primaryKey = 'id_bidang';
    protected $allowedFields = ['nama_bidang','id_bidang'];
}

