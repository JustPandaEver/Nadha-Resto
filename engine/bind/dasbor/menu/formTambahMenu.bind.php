<div id='divFormTambahMenu'>
    <form enctype="multipart/form-data" id='frmUpload'>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" class="form-control" id='txtNama'>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" id='txtKategori'>
                        <?php foreach($data['kategori'] as $kategori) : ?>
                        <option><?=$kategori['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Deks</label>
                    <textarea class="form-control" placeholder="Deksripsi menu" style="resize: none;"></textarea>
                </div>
                <div style='font-size:12px;'>
                    <ul>
                        <li><i>Username tidak boleh mengandung spasi</i></li>
                        <li><i>Email &amp; disarankan valid, agar service notifikasi berjalan ke pelanggan</i></li>
                        <li><i>Level user dapat diubah kembali setelah user dibuat</i></li>
                    </ul>
                </div>
                <!-- <label>{{username}}{{namaLengkap}}{{alamat}}{{nomorHandphone}}{{email}}{{levelUser}}</label> -->
                <a href='#!' id='btnSimpan' class="btn btn-lg btn-primary btn-icon icon-left" v-on:click='prosesAtc'><i
                        class='fas fa-save'></i> Simpan</a>
                &nbsp;&nbsp;
                <a href='#!' id='btnClear' class="btn btn-lg btn-warning btn-icon icon-left" v-on:click=''><i
                        class='fas fa-clipboard-check'></i> Clear form</a>
                &nbsp;&nbsp;
                <a href='#!' id='btnKembali' class="btn btn-lg btn-success btn-icon icon-left" v-on:click=''><i
                        class='fas fa-reply'></i> Kembali</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" id='txtHarga'>
                </div>
                <div class="form-group">
                    <label>Satuan</label>
                    <select class="form-control" id='txtSatuan'>
                        <option value='porsi'>porsi</option>
                        <option value='paket'>paket</option>
                        <option value='pcs'>pcs</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" id='txtFoto' name="txtFoto">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Tipe file gambar (jpg, png), ukuran maksimal 2 Mb, Dimensi (rasio) gambar yang disarankan
                        berbentuk persegi panjang (1.91 : 1)
                        <a href='#!' v-on:click='lihatContohFotoAtc'>lihat contoh</a>
                    </small>
                    <div id='divGambarContoh' style="padding-top:10px;text-align:center;">
                        <img src='<?=STYLEBASE; ?>/dasbor/img/menu/pic_contoh.jpg'
                            style="width: 200px;border:2px solid #2c3e50;">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">

        </div>
    </form>
</div>

<script src="<?=STYLEBASE; ?>/dasbor/formTambahMenu.js"></script>