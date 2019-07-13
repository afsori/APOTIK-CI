<!-- <div class="row">
    <div class="col-xs-12">
        <div class="box box-primary ">
            <div class="box-header">
                <h3 class="box-title">Daftar Dosen</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama ...">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>

                <div class="form-group">
                    <label for="nrp">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik">
                    <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat ...">
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                </div>
                <button type="submit" name="tambah_dosen" class="btn btn-primary float-right">Tambah Data </button>
                <a href="<?= base_url(); ?>Data_dosen" class="btn btn-primary float-right">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div> -->

<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary ">
            <div class="box-header">
                <h3 class="box-title">Form Tambah Data Obat</h3>
            </div>

            <div class="box-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="KODE_PRODUK">Kode Produk</label>
                        <input type="text" class="form-control" id="KODE_PRODUK" name="KODE_PRODUK">
                        <small class="form-text text-danger"><?= form_error('KODE_PRODUK'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="NAMA_PRODUK">Nama Produk</label>
                        <input type="text" class="form-control" id="NAMA_PRODUK" name="NAMA_PRODUK">
                        <small class="form-text text-danger"><?= form_error('NAMA_PRODUK'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="KODE_SATUAN">Kode Satuan</label>
                        <select class="form-control" id="KODE_SATUAN" name="KODE_SATUAN" style="width: 100%;">
                            <option selected="selected">-- Satuan --</option>
                            <option>Box</option>
                            <option>mg</option>
                            <option>Strip</option>
                            <option>Botol</option>
                            <option>Paket</option>
                            <option>Sachet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="HARGA_DASAR">Harga Dasar</label>
                        <input type="text" class="form-control" id="HARGA_DASAR" name="HARGA_DASAR">
                        <small class="form-text text-danger"><?= form_error('HARGA_DASAR'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="HARGA_DASAR">Harga Jual Umum</label>
                        <input type="text" class="form-control" id="HARGA_JUAL_UMUM" name="HARGA_JUAL_UMUM">
                        <small class="form-text text-danger"><?= form_error('HARGA_JUAL_UMUM'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="HARGA_DASAR">Harga Jual BPJS</label>
                        <input type="text" class="form-control" id="HARGA_JUAL_BPJS" name="HARGA_JUAL_BPJS">
                        <small class="form-text text-danger"><?= form_error('HARGA_JUAL_BPJS'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="HARGA_DASAR">Harga Jual Medis</label>
                        <input type="text" class="form-control" id="HARGA_JUAL_MEDIS" name="HARGA_JUAL_MEDIS">
                        <small class="form-text text-danger"><?= form_error('HARGA_JUAL_MEDIS'); ?></small>
                    </div>

                    <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data </button>
                    <a href="<?= site_url(); ?>Data_obat" class="btn btn-primary float-right">Kembali</a>

                </form>
            </div>
        </div>
    </div>
</div>