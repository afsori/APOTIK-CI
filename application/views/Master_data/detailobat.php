<section class="content-header">
    <h1>
        Detail Data Obat
    </h1>
</section>

<section class="content">

    <div class="row">
        <!-- <div class="col-md-3"> -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/afs.jpg" alt="User profile picture">

        <h3 class="profile-username text-center">Ganteng</h3>

        <p class="text-muted text-center">Pelajar</p> -->

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <td><b>Kode Produk</b></td>
                        <td class="pull-center"> : <?= $data_obat['KODE_PRODUK']; ?></td>
                        <!-- <b>NIS :</b> <a class="pull-center">1,322</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>Nama Produk</b></td>
                        <td> : <?= $data_obat['NAMA_PRODUK']; ?></td>
                        <!-- <b>Nama :</b> <a class="pull-right">543</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>Kode Satuan</b></td>
                        <td> : <?= $data_obat['KODE_SATUAN']; ?></td>
                        <!-- <b>Jenjang :</b> <a class="pull-right">13,287</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>Harga Dasar</b></td>
                        <td> : <?= $data_obat['HARGA_DASAR']; ?></td>
                        <!-- <b>Jenjang :</b> <a class="pull-right">13,287</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>Harga Jual Umum</b></td>
                        <td> : <?= $data_obat['HARGA_JUAL_UMUM']; ?></td>
                        <!-- <b>Jenjang :</b> <a class="pull-right">13,287</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>Harga Jual BPJS</b></td>
                        <td> : <?= $data_obat['HARGA_JUAL_BPJS']; ?></td>
                        <!-- <b>Jenjang :</b> <a class="pull-right">13,287</a> -->
                    </li>
                    <li class="list-group-item">
                        <td><b>Harga Jual Medis</b></td>
                        <td> : <?= $data_obat['HARGA_JUAL_MEDIS']; ?></td>
                        <!-- <b>Jenjang :</b> <a class="pull-right">13,287</a> -->
                    </li>
                </ul>
                <div type="button" name="tambah">
                    <a href="<?= site_url(); ?>Data_obat" class="btn btn-primary">Kembali</a>
                </div>
                <!-- <a href="<?= base_url(); ?>Data_mahasiswa/mahasiswa" class=" col-md-3 btn btn-primary btn-block"><b>Kembali</b></a> -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- </div> -->
    </div>
</section>