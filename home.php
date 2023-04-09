<?php

$database = new Database();
$data = $database->x("tb_penduduk");

?>

<div class="main">
    <table>
        <tr>
            <th>Nik</th>
            <th>Nama</th>
            <th>Agama</th>
            <th>Pekerjaan</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($data as $row) {
        ?>
            <tr>
                <td> <?= $row['nik']; ?></td>
                <td> <?= $row['nama']; ?></td>
                <td> <?= $row['agama']; ?></td>
                <td> <?= $row['pekerjaan']; ?></td>
                <td>
                    <a href="update?nik=<?= $row['nik']; ?>">Ubah</a>
                    <a href="delete?nik=<?= $row['nik']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a class="tambah" href="add">tambah</a>
</div>