
<?php
if(isset($_POST['sbmSave'])) {
    $tenSach= $_POST["tenSach"];
    $namXuatBan = $_POST["namXuatBan"];
    $idTacGia = $_POST["idTacGia"];
    try{
        $conn = new PDO("mysql:host=localhost:4306;dbname=quanlythuvien","root","");
        if(!empty($tenSach)){
            $sql = "INSERT INTO theloai(tenSach,namXuatBan, idTacGia) VALUES ('$tenSach', '$namXuatBan','$idTacGia')";
            $stmt = $conn -> prepare($sql);
            $stmt -> execute();

            if ($stmt->rowCount() > 0) {
                header("Location:index.php");
            } else {
                echo "Additional failures";
            }
        }
        else echo "Nhập tên sach";
    }
    catch(PDOException $e){
        $e ->getMessage();
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSIC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
       <center><h1>THÊM MỚI SACH</h1></center>
       <?php
                    if(isset($_GET['error'])){
                        echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                    }
                ?>
       <form action="add.php" method="POST">
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">Tên Sach</span>
                <input type="text" class="form-control" name ="tenSach">
            </div>
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">Nam xuat ban</span>
                <input type="text" class="form-control" name ="namXuatBan">
            </div>
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">id Tac Gia</span>
                <input type="text" class="form-control" name ="idTacGia">
            </div>
            <div class="float-right">
                <button type="submit" name="sbmSave" class="btn btn-success">Thêm</button> 
                <a href="index.php"><button type="button" class="btn btn-warning text-body">Quay lại</button></a>
            </div>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>