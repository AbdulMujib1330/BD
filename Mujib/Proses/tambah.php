<?php
include('database.php');
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
    $query = $db->query("INSERT INTO `tbdatasiswa` values('$nis','$nama','$kelas')");
    header("Location:../Tampilan/data.php");