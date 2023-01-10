<?php
include('../Proses/database.php');
$query = $db->query("SELECT * FROM tbDataSiswa");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="Css/data.css">
        <title>Data</title>
    </head>
    <body>
        <!-- <div class="card-body"> -->
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">This Your Data</h1>
                    </div>
                <div class="card-body">
                    <div class="container mx-auto">
                        <table class="table table-bordered border-dark">
                            <thead>
                                <tr>
                                    <td class="text-dark">Nis</td>
                                    <td class="text-dark">Name</td>
                                    <td class="text-dark">Class</td>
                                    <td class="text-dark">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($data = $query->fetch()): ?>
                                <tr>
                                    <td class="text-dark"><?= $data['NIS'] ?></td>
                                    <td class="text-dark"><?= $data['NAME'] ?></td>
                                    <td class="text-dark"><?= $data['CLASS'] ?></td>
                                    <td class="text-dark">
                                        <a                                                        href="edit.php?NIS=<?= $data['NIS'] ?>"class="texta btn btn-outline-dark">Update</a>
                                        <a onclick="return confirm('Want To Delete This Data?')"  href="../Proses/delete.php?NIS=<?= $data['NIS'] ?>"class="texta btn btn-outline-dark">Delete</a>
                                    </td>
                                </tr>
                                <?php endwhile?>
                                </tbody>
                            </table>
                        <a href="tambah.php" class="texta btn btn-outline-dark">Add Data</a>
                    </div>
                </div>
            </div>
</body>
</html>