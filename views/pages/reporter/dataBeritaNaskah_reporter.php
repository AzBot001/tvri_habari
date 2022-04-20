<?php 
include 'app/controller/reporter/post_naskah.php';
// include 'app/controller/reporter/post_naskahghi.php';
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <h3>Data Naskah</h3>
            </div>


        </div>
    </section>
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tabel-naskah-ghi-tab" data-toggle="pill" href="#tabel-naskah-ghi" role="tab" aria-controls="tabel-naskah-ghi" aria-selected="true">GHI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabel-naskah-gns-tab" data-toggle="pill" href="#tabel-naskah-gns" role="tab" aria-controls="tabel-naskah-gns" aria-selected="false">GNS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabel-naskah-sulampa-tab" data-toggle="pill" href="#tabel-naskah-sulampa" role="tab" aria-controls="tabel-naskah-sulampa" aria-selected="false">SULAMPA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabel-naskah-lipuu-tab" data-toggle="pill" href="#tabel-naskah-lipuu" role="tab" aria-controls="tabel-naskah-lipuu" aria-selected="false">LIPU'U</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabel-naskah-lc-tab" data-toggle="pill" href="#tabel-naskah-lc" role="tab" aria-controls="tabel-naskah-lc" aria-selected="false">LIVE CROSS</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade show active" id="tabel-naskah-ghi" role="tabpanel" aria-labelledby="tabel-naskah-ghi-tab">
                                    <table id="dataTable" class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Petugas</th>
                                                <th>Tanggal</th>
                                                <th>Lokasi</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php tampil_naskah_ghi($mysqli); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tabel-naskah-gns" role="tabpanel" aria-labelledby="tabel-naskah-gns-tab">
                                    <table id="dataTable2" class="table ">
                                    <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Petugas</th>
                                                <th>Tanggal</th>
                                                <th>Lokasi</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php tampil_naskah_gns($mysqli); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tabel-naskah-sulampa" role="tabpanel" aria-labelledby="tabel-naskah-sulampa-tab">
                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NO KK</th>
                                                <th>NIK</th>
                                                <th>Kepala Keluarga</th>
                                                <th>Tgl Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Penghasilan</th>
                                                <th>Dusun</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>7503061001170005</td>
                                                <td>1302100901880001</td>
                                                <td>ARIF FAREZA</td>
                                                <td>09 Januari 1988</td>
                                                <td>Laki Laki</td>
                                                <td>Rp. 500,000</td>
                                                <td>Bolongga</td>
                                                <td>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="nik" value="1302100901880001">
                                                        <button type="submit" name="update_bst" class="btn btn-primary btn-xs" onclick="return confirm('Yakin menambahkan data ini ke Bantuan Sosial Tunai (BST) ?')"><i class="fas fa-plus"></i> Tambah Bantuan</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>7503061406120004</td>
                                                <td>750306251187002</td>
                                                <td>ABD RAHMAN MOKO</td>
                                                <td>25 November 1987</td>
                                                <td>Laki Laki</td>
                                                <td>Rp. 500,000</td>
                                                <td>Pentadio</td>
                                                <td>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="nik" value="750306251187002">
                                                        <button type="submit" name="update_bst" class="btn btn-primary btn-xs" onclick="return confirm('Yakin menambahkan data ini ke Bantuan Sosial Tunai (BST) ?')"><i class="fas fa-plus"></i> Tambah Bantuan</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tabel-naskah-lipuu" role="tabpanel" aria-labelledby="tabel-naskah-lipuu-tab">
                                    <table id="example4" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NO KK</th>
                                                <th>NIK</th>
                                                <th>Kepala Keluarga</th>
                                                <th>Tgl Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Penghasilan</th>
                                                <th>Dusun</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>7503061001170005</td>
                                                <td>1302100901880001</td>
                                                <td>ARIF FAREZA</td>
                                                <td>09 Januari 1988</td>
                                                <td>Laki Laki</td>
                                                <td>Rp. 500,000</td>
                                                <td>Bolongga</td>
                                                <td>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="nik" value="1302100901880001">
                                                        <button type="submit" name="update_blt" class="btn btn-primary btn-xs" onclick="return confirm('Yakin menambahkan data ini ke BLT-Dana Desa ?')"><i class="fas fa-plus"></i> Tambah Bantuan</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>7503061406120004</td>
                                                <td>750306251187002</td>
                                                <td>ABD RAHMAN MOKO</td>
                                                <td>25 November 1987</td>
                                                <td>Laki Laki</td>
                                                <td>Rp. 500,000</td>
                                                <td>Pentadio</td>
                                                <td>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="nik" value="750306251187002">
                                                        <button type="submit" name="update_blt" class="btn btn-primary btn-xs" onclick="return confirm('Yakin menambahkan data ini ke BLT-Dana Desa ?')"><i class="fas fa-plus"></i> Tambah Bantuan</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tabel-naskah-lc" role="tabpanel" aria-labelledby="tabel-naskah-lc-tab">
                                    <table id="example4" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Petugas</th>
                                                <th>Tanggal</th>
                                                <th>Lokasi</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>7503061001170005</td>
                                                <td>1302100901880001</td>
                                                <td>ARIF FAREZA</td>
                                                <td>09 Januari 1988</td>
                                                <td>Laki Laki</td>
                                                <td>Rp. 500,000</td>
                                                <td>Bolongga</td>
                                                <td>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="nik" value="1302100901880001">
                                                        <button type="submit" name="update_blt" class="btn btn-primary btn-xs" onclick="return confirm('Yakin menambahkan data ini ke BLT-Dana Desa ?')"><i class="fas fa-plus"></i> Tambah Bantuan</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>7503061406120004</td>
                                                <td>750306251187002</td>
                                                <td>ABD RAHMAN MOKO</td>
                                                <td>25 November 1987</td>
                                                <td>Laki Laki</td>
                                                <td>Rp. 500,000</td>
                                                <td>Pentadio</td>
                                                <td>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="nik" value="750306251187002">
                                                        <button type="submit" name="update_blt" class="btn btn-primary btn-xs" onclick="return confirm('Yakin menambahkan data ini ke BLT-Dana Desa ?')"><i class="fas fa-plus"></i> Tambah Bantuan</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
</div>