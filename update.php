<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $npm=$_POST['npm'];
    $kelas=$_POST['kelas'];

    $sql="update siswa set id=$id, npm=$npm, nama='$nama', kelas='$kelas' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data Berhasil Dimasukan";
        header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Data Diri Mahasiswa</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
<div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" >
</div>
    <label>NPM</label>
    <input type="number" class="form-control" placeholder="Masukkan NPM" name="npm">
</div>
<div class="form-group">
    <label>Kelas</label>
    <input type="text" class="form-control" placeholder="Masukkan Kelas" name="kelas">
</div>
   
  <button type="submit" class="btn btn-primary my-5" name="submit">Update</button>
</form>
    </div>
  </body>
</html>