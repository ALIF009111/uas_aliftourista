<?php
include("../koneksi.php");



$id_pemesanan = $_POST['id_pemesanan'];
$tanggal_checkin = $_POST ['tanggal_checkin'];
$tanggal_checkout = $_POST ['tanggal_checkout'];
$bukti_pembayaran = $_POST ['bukti_pembayaran'];

$simpan ="INSERT INTO tabel_pemesanann (id_pemesanan,tanggal_checkin,tanggal_checkout,bukti_pembayaran) VALUES ('$id_pemesanan','$tanggal_checkin',
'$tanggal_checkout','$bukti_pembayaran')";


$proses = mysqli_query($koneksi,$simpan);



?>
<script>
    document.location="index.php";
</script>