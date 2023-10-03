<?php
    //Dich vu Bao ve
    session_start();

    //Kiem tra thong tin để bảo vệ kiểm soát ra vào
    if(!isset($_SESSION['isLogin'])){
        header("Location:../login.php");
    }
?>
<?php
if(isset($_POST['sbmSave'])) {
    $ten_tloai= $_POST["ten_tloai"];
    try{
        $conn = new PDO("mysql:host=localhost:4306;dbname=btth01_cse485","root","");
        if(!empty($ten_tloai)){
            $sql = "INSERT INTO theloai(ten_tloai) VALUES ('$ten_tloai')";
            $stmt = $conn -> prepare($sql);
            // $stmt->bindParam(':ten_tloai', $ten_tloai);
            $stmt -> execute();

            if ($stmt->rowCount() > 0) {
                header("Location:category.php");
            } else {
                echo "Additional failures";
            }
        }
        else echo "Nhập tên thể loại";
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
    <?php 
        include "layout_ad/header_ad.php";
    ?>
    <div class="container">
       <center><h1>THÊM MỚI THỂ LOẠI</h1></center>
       <form action="add_category.php" method="POST">
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">Tên thể loại</span>
                <input type="text" class="form-control" name ="ten_tloai">
            </div>
            <div class="float-right">
                <button type="submit" name="sbmSave" class="btn btn-success">Thêm</button> 
                <button type="button" class="btn btn-warning text-body">Quay lại</button>
            </div>
        </form>
    </div>
    <?php 
        include "layout_ad/footer.php";
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
