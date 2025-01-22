<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form

$id_pemesanan = $_POST['id_pemesanan'];
$tanggal_checkin = $_POST ['tanggal_checkin'];
$tanggal_checkout = $_POST ['tanggal_checkout'];
$bukti_pembayaran = $_POST ['bukti_pembayaran'];



#3. menulis query
$sunting = "UPDATE tabel_pemesanan SET id_pemesanan='$id_pemesanan', tanggal_checkin='$tanggal_checkin', 
tanggal_checkout='$tanggal_checkout', bukti_pembayaran'$bukti_pembayaran' WHERE id_pemesanan='$id_pemesanan'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>