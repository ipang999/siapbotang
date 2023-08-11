<div style="text-align:right">
    <a href="#tambahBidang" data-toggle="modal" class="btn btn-primary btn-mini">Tambah</a>
</div>
<div class="widget-box">
    <div class="widget-title">
        <span class="icon"><i class="icon-th"></i></span>
        <h5>Daftar Kegiatan</h5>
    </div>
    <div class="widget-content nopadding">

        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA PROGRAM</th>
                    <th>KODE KEGIATAN</th>
                    <th>NAMA KEGIATAN</th>
                    <th>Edit</th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($kegiatan as $value):?>
                <tr class="gradeX">
                    <td style="text-align:center; width:10px"><?= $no++ ?></td>
                    <td>
                    </td>
                    <td> <?=$value['id_parent']?></td>
                    <td> <?=$value['kode_kegiatan']?> </td>
                    <td> <?=$value['nama_kegiatan']?></td>


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
<div id="tambahKegiatan" class="modal hide">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">×</button>
        <h3>Tambah Kegiatan</h3>
    </div>
        <div class="modal-body">
    <?php echo form_open('Referensi/UnitKegiatan')?>
            <div class="control-group">
                <label class="control-label">Nama Kegiatan</label>
                <div class="controls"><input type="text" name="nama" id="nama" class="span20" /></div>
            </div>

        </div>
        <div class="modal-footer"> <input type="submit" class="btn btn-primary" name="btnSimpan" id="btnSimpan"
                value="Simpan" onclick="cekvalid();"> <input type="reset" class="btn" value="Reset"></div>
     <?php echo form_close()?>
</div>