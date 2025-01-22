<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Kamar</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<?php include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">

<!-- col-8 untuk besar kecilin card -->

    <div class="col-8 m-auto">
    <div class="card">
    <div class="card-header">

    <h3 class="float-start">Pemesanan Kamar</h3>

<!-- JANGAN LUPA TAMBAH HREF BIAT MAU NYAMBUNG -->

    <span class="float-end"><a class="btn btn-primary" href="form.php"><i class="fa-solid fa-plus"></i>Pesan Kamar</a></span>

  </div>

  <div class="card-body">
  
  <table class="table">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Tanggal Check-In</th>
      <th scope="col">Tanggal Check-Out</th>
      <th scope="col">Bukti Pembayaran</th>
      <th scope="col">Aksi</th>
    </tr>

  </thead>

  <tbody>
    <?php
    
    include("../koneksi.php");


    $simpan ="SELECT * FROM tabel_pemesanann";

    $proses = mysqli_query($koneksi,$simpan);
    
    #looping data dari database


    $nomor = 1; 
    foreach($proses as $data){

    ?>

    <tr>
      <th scope="row"><?=$nomor++?></th>
      <td><?=$data['tanggal_checkin']?></td>
      <td><?=$data['tanggal_checkout']?></td>
      <td><?=$data['tamu_id']?></td>
      <td><?=$data['bukti_pembayaran']?></td>
      <td>

      <a class="btn btn-info btn-sm" href="edit.php?id=<?=$data['id_pemesanan']?>"><i class="fa fa-pen-to-square"></i></a>
        
        <button type="button" class="btn btn-danger btm-sm" data-bs-toggle="modal" data-bs-target="#hapus<?=$data['id_pemesanan']?>">
        <i class="fa-solid fa-trash"></i>
</button>


<!-- Modal -->
      <div class="modal fade" id="hapus<?=$data['id_pemesanan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Lu yakin?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        mau hapus  <b><?=$data ['id_pemesanan']?></b> ?
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Ya</button>
        <a href="hapus.php?xyz=<?=$data['id_pemesanan']?>" class="btn btn-danger">Tidak</a>
      </div>
      </div>
      </div>
      </div>

      </td>
    </tr>


    <?php
    }
    ?>
  </tbody>
</table>
  
</table>
   
  </div>

 <!-- jangan lupa bikin koneksi pake ../ -->
  
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/all.js"></script>

    
</body>
</html>