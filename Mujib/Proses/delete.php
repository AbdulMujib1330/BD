<?php
include('database.php');
$nis = $_GET['NIS'];

$query = $db->query("DELETE FROM tbDataSiswa WHERE NIS='$nis'");
header("location:../Tampilan/data.php");