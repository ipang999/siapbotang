<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UrusanModel;
use App\Models\BidangModel;
use App\Models\UnitModel;
use App\Models\RekeningModel;
use App\Models\KegiatanModel;
use App\Models\PejabatModel;
use App\Models\MasterBarangModel;

class Referensi extends BaseController
{
    public function Urusan()
    {
        $urusanmodel= new UrusanModel();
        $urusan= $urusanmodel->findAll();
        $data = [
            'judul' => 'Referensi',
            'subjudul' => 'Urusan',
            'urusan' => $urusan,
            'link' => 'link',
            'page' => 'Referensi/tbl_urusan'
        ];
        // var_dump($urusan);
        // die;
        return view('template', $data);
    }

    public function SimpanUrusan()
    {
        $urusanmodel= new UrusanModel();   
        $namaurusan= $this->request->getPost('nama');
        $data= [
            'nama_urusan' => $namaurusan,
        ];
        $urusanmodel->insert($data);
        return redirect()->to('Referensi/Urusan');
    }    
    public function Bidang()
    {
        $bidangmodel= new BidangModel();
        $bidang= $bidangmodel->findAll();
        $data = [
            'judul' => 'Referensi',
            'subjudul' => 'Bidang',
            'bidang' => $bidang,
            'link' => 'link',
            'page' => 'Referensi/tbl_bidang'
        ];
        // var_dump($bidang);
        // die;
        return view('template', $data);
    }

    public function Unit()
    {
        $unitmodel= new UnitModel();
        $unit = $unitmodel->findAll();
        $data = [
            'judul' => 'Referensi',
            'subjudul' => 'unit',
            'uni$unit' => $unit,
            'link' => 'link',
            'page' => 'Referensi/tbl_unit'
        ];
        // var_dump($unit);
        // die;
        return view('template', $data);
    }    
    public function SimpanUnit()
    {
        $unitmodel= new UnitModel();   
        $namaunit= $this->request->getPost('nama');
        $data= [
            'nama_unit' => $namaunit,
        ];
        $unitmodel->insert($data);
        return redirect()->to('template');
    }    
    public function Rekening()
    {
        $rekeningmodel= new RekeningModel();
        $rekening= $rekeningmodel->findAll();
        $data = [
            'judul' => 'Referensi',
            'subjudul' => 'Rekening',
            'rekening' => $rekening,
            'link' => 'link',
            'page' => 'Referensi/tbl_rekening'
        ];
        // var_dump($urusan);
        // die;
        return view('template', $data);
    }
    public function SimpanRekening()
    {
        $rekeningmodel= new RekeningModel();   
        $namarekeninig= $this->request->getPost('nama');
        $data= [
            'nama_rekening' => $namarekening,
        ];
        $rekeningmodel->insert($data);
        return redirect()->to('template');
    }    
    public function Kegiatan()
    {
        $kegiatanmodel= new KegiatanModel();
        $kegiatan= $kegiatanmodel->findAll();
        $data = [
            'judul' => 'Referensi',
            'subjudul' => 'Kegeiatan',
            'kegiatan' => $kegiatan,
            'link' => 'link',
            'page' => 'Referensi/tbl_kegiatan'
        ];
        // var_dump($urusan);
        // die;
        return view('template', $data);
    }
    public function SimpanKegiatan()
    {
        $kegiatanmodel= new KegiatanModel();   
        $namakegiatan= $this->request->getPost('nama');
        $data= [
            'nama_kegiatan' => $namakegiatan,
        ];
        $kegiatanmodel->insert($data);
        return redirect()->to('template');
    }    
    public function Pejabat()
    {
        $pejabatmodel= new PejabatModel();
        $pejabat= $pejabatmodel->findAll();
        $data = [
            'judul' => 'Referensi',
            'subjudul' => 'Pejabat',
            'pejabat' => $pejabat,
            'link' => 'link',
            'page' => 'Referensi/tbl_pejabat'
        ];
        // var_dump($urusan);
        // die;
        return view('template', $data);
    }
    public function SimpanPejabat()
    {
        $pejabatmodel= new PejabatModel();   
        $namapejabat= $this->request->getPost('nama');
        $data= [
            'nama' => $namapejabat,
        ];
        $pejabatmodel->insert($data);
        return redirect()->to('template');
    }    
    public function MasterBarang()
    {
        $masterbarangmodel= new MasterBarangModel();
        $masterbarang= $masterbarangmodel->findAll();
        $data = [
            'judul' => 'Referensi',
            'subjudul' => 'Barang',
            'barang' => $namabarang,
            'link' => 'link',
            'page' => 'Referensi/tbl_master_barang'
        ];
        // var_dump($urusan);
        // die;
        return view('template', $data);
    }
    public function SimpanMasterBarang()
    {
        $masterbarangmodel= new MasterBarangModel();   
        $barang= $this->request->getPost('nama');
        $data= [
            'nama' => $barang,
        ];
        $masterbarangmodel->insert($data);
        return redirect()->to('template');
    }    

}
 