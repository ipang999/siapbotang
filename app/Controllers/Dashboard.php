<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Home',
            'subjudul' => 'Dashboard',
            'link' => 'link',
            'page' => 'dashboard/home'
        ];
        return view('template', $data);
    }
}