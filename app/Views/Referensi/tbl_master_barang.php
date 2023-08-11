<div style="text-align:right">
    <a href="#tambahMasterBarang" data-toggle="modal" class="btn btn-primary btn-mini">Tambah</a>
</div>
<div class="widget-box">
    <div class="widget-title">
        <span class="icon"><i class="icon-th"></i></span>
        <h5>Daftar Unit</h5>
    </div>
    <div class="widget-content nopadding">

        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE</th>
                    <th>TIPE</th>
                    <th>KELOMPOK</th>
                    <th>JENIS</th>
                    <th>OBJEK</th>
                    <th>RINCIAN</th>
                    <th>SUB 1</th>
                    <th>SUB 2</th>
                    <th>SUB 3</th>
                    <th>NAMA BARANG</th>
                    <th>SATUAN</th>
                    <th>ACTION</th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($masterbrg as $value):?>
                <tr class="gradeX">
                    <td style="text-align:center; width:10px"><?= $no++ ?></td>
                    <td>
                    </td>
                    <td> <?=$value['kode']?></td>
                    <td> <?=$value['tipe']?> </td>
                    <td> <?=$value['kelompok']?></td>
                    <td> <?=$value['kd1']?></td>
                    <td> <?=$value['kd2']?></td>
                    <td> <?=$value['kd3']?></td>
                    <td> <?=$value['kd4']?></td>
                    <td> <?=$value['kd5']?></td>
                    <td> <?=$value['kd6']?></td>
                    <td> <?=$value['nama_barang']?></td>
                    <td> <?=$value['satuan']?></td>
        
        
                    <td style="width:40px; text-align:center">
                        <a href="#edit_1" data-toggle="modal"><i class="icon-pencil"></i></a>
                        <a href="?act=26&mode=del&id=1"
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i
                                class="icon-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
<div id="tambahMasterBarang" class="modal hide">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">×</button>
        <h3>Tambah Master Barang</h3>
    </div>
        <div class="modal-body">
    <?php echo form_open('Referensi/SimpanMasterBarang')?>
            <div class="control-group">
                <label class="control-label">Nama Unit</label>
                <div class="controls"><input type="text" name="nama" id="nama" class="span20" /></div>
            </div>

        </div>
        <div class="modal-footer"> <input type="submit" class="btn btn-primary" name="btnSimpan" id="btnSimpan"
                value="Simpan" onclick="cekvalid();"> <input type="reset" class="btn" value="Reset"></div>
     <?php echo form_close()?>
</div>