<?php 
    $nis = $_GET['NIS'];
    include('../Proses/database.php');
    $query = $db->query("SELECT * FROM tbDataSiswa where `NIS`='$nis'");
    $data = $query->fetch();
    ?>
  <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../  Css/edit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Update Data</title>
</head>
  <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<body>
  <div class="form-container py-auto d-flex justify-content-center algin-items-center h-100">
    <form action="../proses/edit.php" method="post">
        <input type="hidden" name="Nis" value="<?=$nis?>">
        <h3>Update Your Data</h3>
        <input type="text" value="<?=$data['NAME']?>" name="Nama" class="form-control" id="floatingInput" required placeholder= "Nama">
        <input type="text" value="<?=$data['CLASS']?>" name="Class" class="form-control" id="floatingInput" required placeholder= "Class">
        
        <input type="submit" value="Update Data" class="form-btn">
        <td>
        <a onclick="return confirm('Want To Go Back?')"  href="data.php" class="">Back</a>
        </td>
    </form>
  </div>
  <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
</body>
</html>