<?php
include "function.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $perusahaan = $_POST['perusahaan'];
    $jabatan = $_POST['jabatan'];
    $durasi = $_POST['durasi'];

    $sql = "INSERT INTO pengalaman VALUES (null, '$perusahaan', '$jabatan', '$durasi')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
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
       <form method="post" action="insert.php">
           <table cellpadding="10" cellspacing="0">
               <tr>
                   <td>Perusahaan</td>
                   <td>:</td>
                   <td>
                       <input type="text" name="perusahaan" required>
                   </td>
               </tr>
               <tr>
                   <td>Jabatan</td>
                   <td>:</td>
                   <td>
                       <input type="text" name="jabatan" required>
                   </td>
               </tr>
               <tr>
                   <td>Durasi</td>
                   <td>:</td>
                   <td>
                       <input type="text" name="durasi" required>
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
