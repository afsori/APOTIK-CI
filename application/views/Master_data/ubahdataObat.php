<section class="content-header">
    <h1>
        Ubah Data Obat
    </h1>
</section>
<section class="content">

    <div class="row">
        <!-- <div class="col-md-3"> -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <!-- <div class="container">
    <div class="row mt-3">
        <div class="col-md-6"> -->
                <div class="card">
                    <div class="card-header">
                        <!-- Form Ubah Data Obat -->
                        <div class="card-body">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $data_obat['ID']; ?>">
                                <div class="form-group">
                                    <label for="nama">Kode Produk</label>
                                    <input type="text" class="form-control" id="KODE_PRODUK" name="KODE_PRODUK" value="<?= $data_obat['KODE_PRODUK']; ?>">
                                    <small class="form-text text-danger"><?= form_error('KODE_PRODUK'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="id">Nama Produk</label>
                                    <input type="text" class="form-control" id="NAMA_PRODUK" name="NAMA_PRODUK" value="<?= $data_obat['NAMA_PRODUK']; ?>">
                                    <small class=" form-text text-danger"><?= form_error('NAMA_PRODUK'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Kode Satuan</label>
                                    <select class="form-control" id="KODE_SATUAN" name="KODE_SATUAN">
                                        <?php foreach ($KODE_SATUAN as $ks) : ?>
                                            <?php if ($ks == $data_obat['KODE_SATUAN']) : ?>

                                                <option value="<?= $ks; ?>" selected><?= $ks; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $ks; ?>"><?= $ks; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Harga Produk Dasar</label>
                                    <input type="text" class="form-control" id="HARGA_DASAR" name="HARGA_DASAR" value="<?= $data_obat['HARGA_DASAR']; ?>">
                                    <small class=" form-text text-danger"><?= form_error('HARGA_DASAR'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="email">Harga Jual Umum</label>
                                    <input type="text" class="form-control" id="HARGA_JUAL_UMUM" name="HARGA_JUAL_UMUM" value="<?= $data_obat['HARGA_JUAL_UMUM']; ?>">
                                    <small class=" form-text text-danger"><?= form_error('HARGA_JUAL_UMUM'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="email">Harga Jual BPJS</label>
                                    <input type="text" class="form-control" id="HARGA_JUAL_BPJS" name="HARGA_JUAL_BPJS" value="<?= $data_obat['HARGA_JUAL_BPJS']; ?>">
                                    <small class=" form-text text-danger"><?= form_error('HARGA_JUAL_BPJS'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="email">Harga Jual Medis</label>
                                    <input type="text" class="form-control" id="HARGA_JUAL_MEDIS" name="HARGA_JUAL_MEDIS" value="<?= $data_obat['HARGA_JUAL_MEDIS']; ?>">
                                    <small class=" form-text text-danger"><?= form_error('HARGA_JUAL_MEDIS'); ?></small>
                                </div>
                                <button type=" submit" name="ubahdataObat" class="btn btn-primary float-right">Ubah Data</button>
                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>