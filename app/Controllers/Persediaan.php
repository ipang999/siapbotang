<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Persediaan extends BaseController
{
    public function index()
    {
        //
    }
    public function SaldoAwal()
    {
        $data = [
            'judul' => 'Saldo Awal',
            'page' => 'persediaan/saldo_awal'
        ];
        return view('template', $data);
    }

}