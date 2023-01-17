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
<div class="px-auto mx-auto my-auto top-50 start-50 translate-middle py-auto card text-center w-50 position-absolute ">
  <div class="card-header text-center p-3">
  <h3>Update Your Data</h3>
  </div>
  <div class="card-body p-3">
    <blockquote class="blockquote mb-0">
    <form action="../proses/edit.php" method="post">
        <input type="hidden" name="Nis" value="<?=$nis?>">
        <div class="position-flex  align-items-end">
          <input type="text" value="<?=$data['NAME']?>"   name="Nama"   class="form-control my-1 mb-2 w-100" id="floatingInput" required placeholder= "Nama">
          <input type="text" value="<?=$data['CLASS']?>"  name="Class"  class="form-control my-1 mb-2 w-100" id="floatingInput" required placeholder= "Class">
        </div>
      <footer>
      <td>
        <div class="ml-5 pt-2">
          <input type="submit" value="Update Data" class="form-btn">
          <a onclick="return confirm('Want To Go Back?')"  href="data.php" class="">Back</a>
        </div>
      </td>
      </footer>
    </blockquote>
    </form>
  </div>
</div>
  <div class="form-container py-auto d-flex justify-content-center algin-items-center h-100">
    
  </div>
  <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
</body>
</html>