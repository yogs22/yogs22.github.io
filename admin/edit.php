<?php
include "function.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $perusahaan = $_POST['perusahaan'];
    $jabatan = $_POST['jabatan'];
    $durasi = $_POST['durasi'];

    $sql = "UPDATE pengalaman SET perusahaan = '".$perusahaan."', jabatan = '".$jabatan."', durasi = '".$durasi."' WHERE id = '". $_GET['id'] ."'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}

$pengalaman = query("SELECT * FROM pengalaman");
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
            input {
                padding: 8px;
                border-radius: 5px;
                border: 1px solid #000;
            }
            button {
                padding: 12px 14px;
                background: yellow;
                border-radius: 5px;
                border: none;
                color: black;
            }
        </style>
   </head>
   <body>
       <h1>Daftar Pengalaman</h1 >
       <form method="post" action="edit.php?id=<?= $pengalaman[0]['id'] ?>">
           <table cellpadding="10" cellspacing="0">
               <tr>
                   <td>Perusahaan</td>
                   <td>:</td>
                   <td>
                       <input type="text" name="perusahaan" value="<?= $pengalaman[0]['perusahaan'] ?>" required>
                   </td>
               </tr>
               <tr>
                   <td>Jabatan</td>
                   <td>:</td>
                   <td>
                       <input type="text" name="jabatan" value="<?= $pengalaman[0]['jabatan'] ?>" required>
                   </td>
               </tr>
               <tr>
                   <td>Durasi</td>
                   <td>:</td>
                   <td>
                       <input type="text" name="durasi" value="<?= $pengalaman[0]['durasi'] ?>" required>
                   </td>
               </tr>
               <tr>
                   <td colspan="2"></td>
                   <td>
                       <button type="submit" name="button">Submit</button>
                   </td>
               </tr>
           </table>
       </form>
   </body>
</html>
