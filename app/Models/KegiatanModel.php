<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'tbl_kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $allowedFields = ['nama_kegiatan','id_kegiatan'];
}
