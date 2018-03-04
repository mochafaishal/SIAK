<?php
require '../core/connect.php';

$nama = $_POST['nama'];
$kode = $_POST['kode'];
$pagu = $_POST['pagu'];

echo $nama.$kode.$pagu;

$sql = "INSERT INTO rekening_bank (nama,kode,kredit)
VALUES ('$nama', '$kode', '$pagu')";

mysqli_query($con, $sql) or die(mysqli_error($con));
