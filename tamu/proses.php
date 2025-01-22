<?php
#
include("../koneksi.php");




$nama_tamu = $_POST ['nama_tamu'];
$nomor_identitas = $_POST['nomor_identitas'];




$simpan ="INSERT INTO tabel_tamu (nama_tamu,nomor_identitas,) VALUES ('$nama_tamu','$nomor_identitas')";


$proses = mysqli_query($koneksi, $simpan);



?>
<script>
    document.location="index.php";
</script>