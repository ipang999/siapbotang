<?php

namespace App\Models;

use CodeIgniter\Model;

class PejabatModel extends Model
{
    protected $table = 'tbl_pejabat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama','jabatan', 'nip'];
}
