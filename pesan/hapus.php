<?php
include("../koneksi.php");



$id = $_GET['xyz'];




$hapus ="DELETE FROM tabel_pemesanann WHERE id_pemesanan='$id_pemesanan'";


$proses = mysqli_query($koneksi,$hapus);



?>
<script>
    document.location="index.php";
</script>