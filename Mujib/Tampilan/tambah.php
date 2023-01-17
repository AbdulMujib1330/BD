<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/tambah.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Input</title>
</head>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<body>
    <div class="form-container py-auto d-flex justify-content-center algin-items-center h-100">
        <form action="../Proses/tambah.php" method="post">
            <h3>Create Your Data</h3>
            <!-- <input type="text" name="nis" required placeholder= "Nis"> -->
            <input type="text" name="nama" required placeholder= "Name">
            <input type="text" name="kelas" required placeholder= "Class">
            
            <input type="submit" name="submit" value="Create Data" class="form-btn">
            <td>
            <a onclick="return confirm('Want To Go Back?')"  href="data.php" class="">Back</a>
            </td>
    </form>
    </div>
</body>
</html>