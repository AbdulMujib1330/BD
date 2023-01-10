<?php
    $nis = $_POST['Nis'];
    $name = $_POST['Nama'];
    $class = $_POST['Class'];
    include('database.php');

$query = $db->query("UPDATE tbDataSiswa SET `NIS`='$nis',`NAME`='$name',`CLASS`='$class' where NIS='$nis'");


if($query){
    header("location:../Tampilan/data.php");
}