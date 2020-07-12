<div id='divBahanBaku'>
<div id='divListBahanBaku'>
    <div style='margin-bottom:15px;'>
        <a href='#!' class='btn btn-lg btn-primary  btn-icon icon-left' @click='tambahBahanBakuAtc'>
            <i class="fas fa-plus-circle"></i> Tambah Bahan Baku
        </a>
    </div>
    <div class="row" id='' style="padding-left:20px;margin-right:10px;">
        <table id='tblBahanBakuAtc' class='table table-hover table-bordered table-stripped'>
            <thead>
                <tr>
                    <th>Bahan Baku</th>
                    <th>Deks</th>
                    <th>Kategori / Satuan</th>
                    <th>Stok</th>
                    <th>Total Pembelian</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['bahanBaku'] as $bb) : ?>
                <tr>
                    <td><strong><?=$bb['nama']; ?></strong></td>
                    <td><?=$bb['deks']; ?></td>
                    <td><?=$bb['kategori']; ?></td>
                    <td><?=$bb['stok']; ?> <?=$bb['satuan']; ?></td>
                    <td></td>
                    <td><a href='#!' class="btn btn-primary btn-icon btn-sm icon-left" @click='editAtc("<?=$bb['kd_bahan']; ?>")'><i class='far fa-edit'></i> Edit</a></td>
                </tr>
                <?php 
                    endforeach; 
                ?>
            </tbody>
        </table>
    </div>
</div>
<div id='divTambahBahanBaku'>
    <div>
        <a href='#!' class="btn btn-primary btn-icon icon-left" @click='kembaliAtc'>
            <i class='fas fa-reply'></i>Kembali
        </a>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
            <div class="form-group">
                <label>Nama Bahan</label>
                <input type="text" class="form-control" id='txtNamaBahan' v-model='nama'>
            </div>
            <div class="form-group">
                <label>Deks</label>
                <textarea placeholder="Deksripsi bahan baku" id='txtDeks' class="form-control" style="resize:none;" v-model='deks'></textarea>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" v-model='kategori'>
                    <option value="Daging">Daging</option>
                    <option value="Seafood">Seafood</option>
                    <option value="Karbo">Karbo</option>
                    <option value="Sayur">Sayur</option>
                    <option value="Buah">Buah</option>
                    <option value="Mie Instan">Mie Instan</option>
                    <option value="Bumbu">Bumbu</option>
                    <option value="Fast Food">Fast food</option>
                    <option value="Tepung">Tepung</option>
                    <option value="lainlain">Lain lain</option>
                </select>
            </div>
            <div class="form-group">
                <label>Satuan</label>
                <select v-model='satuan' class="form-control" v-model='satuan'>
                    <option value="kg">Kg</option>
                    <option value="liter">Liter</option>
                    <option value="pcs">Pcs</option>
                    <option value="sachet">Sachet</option>
                    <option value="dus">Dus</option>
                </select>
            </div>
            <div class="form-group">
                <label>Stok Awal</label>
                <input type="number" class="form-control" id='txtStokAwal' v-model='stok'>
            </div>
            <div>
                <a href='#!' class="btn btn-primary btn-icon icon-left" @click='simpanAtc'><i class='fas fa-save'></i> Simpan</a>&nbsp;&nbsp;
                <a href='#!' class="btn btn-info btn-icon icon-left" @click='clearAtc'><i class='fas fa-i-cursor'></i> Clear</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Tentang bahan baku</h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="<?=STYLEBASE; ?>/dasbor/bahanBaku.js"></script>