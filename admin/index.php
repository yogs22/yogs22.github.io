<?php
    require 'function.php';
    $pengalaman = query("SELECT * FROM pengalaman")
 ?>
 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Halaman CRUD</title>
         <style media="screen">
             body {
                 font-family: 'arial';
             }
         </style>
    </head>
    <body>
        <h1>Daftar Pengalaman <small>
            <a href="insert.php">Tambah Data</a>
        </small> </h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Perusahaan</th>
                <th>Jabatan</th>
                <th>Durasi</th>
                <th>Aksi</th>
            </tr>
            <?php $i =1; ?>
            <?php foreach( $pengalaman as $row) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["perusahaan"]; ?></td>
                <td><?php echo $row["jabatan"]; ?></td>
                <td><?php echo $row["durasi"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">Ubah</a> |
                    <a href="delete.php?id=<?= $row['id'] ?>">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </body>
</html>
