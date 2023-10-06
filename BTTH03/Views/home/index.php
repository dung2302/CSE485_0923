<?php 
    try {
      $conn = new PDO("mysql:host=localhost:4306;dbname=quanlythuvien", "root","");

        $sql = "SELECT * FROM Sach ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $sachs = $stmt->fetchAll();
    } catch(PDOException $e) {
      echo "Error: ".$e->getMessage();
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ThuVien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
    <?php
        $title= 'Quan Ly Thu Vien';
    ?>  
            <div class="col-md-9 pt-0" style="margin-top: 75px;" id="content">
                <div class="container">
                
                    <div class="rounded bg-light w-100 p-4 mt-5 ">
                        <div class=" d-flex justify-content-between align-items-center"style="border-bottom: 1px solid gray;">
                            <span class="text-danger h3" style="font-weight: bold;">
                                Quan Ly Thu Vien
                            </span>   
                        </div>
                        
                        <div class="mt-5">
                        <a href="add.php">
                            <button class="btn btn-primary">Add</button>
                        </a>
                        
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ten Sach</th>
                                <th scope="col">Nam Xuat Ban</th>
                                <th scope="col">Id Tac gia</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($sachs as $sach){
                                ?>
                                <tr>
                                    <th scope="row">
                                        <?= $sach[0]; ?>
                                    </th>
                                    <td>
                                        <?= $sach[1]; ?>
                                    </td>
                                    <td>
                                        <?= $sach[2]; ?>
                                    </td>
                                    <td>
                                        <?= $sach[3]; ?>
                                    </td>
                                    <td>
                                        <a href="detail.php?id=1">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?= $sach[0]; ?>">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#<?= $sach[0]; ?>">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="<?= $sach[0]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure detele the have id: <?= $sach[0]; ?>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <a href="delete.php?id=<?= $sach[0]; ?>" class="btn btn-success">OK</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>