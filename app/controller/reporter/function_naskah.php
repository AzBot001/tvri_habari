<?php

function tampil_naskah_ghi($mysqli)
{
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM kategori JOIN naskah ON kategori.id_kategori = naskah.id_kategori");
    while ($data = $query->fetch_assoc()) {
?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['kameramen'] ?></td>
            <td><?= tgl_indo($data['tgl_berita']) ?></td>
            <td><?= $data['lokasi'] ?></td>
            <td><?= $data['nama_kategori'] ?></td>
            <td>
                <?php
                if ($data['sts_periksa'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diperiksa</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diperiksa</div>
                <?php
                }
                ?>

                <?php
                if ($data['sts_edit'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diedit</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diedit</div>
                <?php
                }
                ?>
            </td>
            <td>
                <button class="btn btn-success btn-xs"><i class="fas fa-print"></i></button>
                <button class="btn btn-warning text-white btn-xs"><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
<?php
    }
}

?>