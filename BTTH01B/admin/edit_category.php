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
    $ma_tloai= $_POST["ma_tloai"];
    $ten_tloai= $_POST["ten_tloai"];

try{
    //Buoc 1: Ket noi DBServer
    $conn = new PDO("mysql:host=localhost:4306;dbname=btth01_cse485", "root", "");
    //Buoc 2: Thuc hien truy van
    $sql_check = "SELECT * FROM theloai WHERE (ten_tloai='$ten_tloai') AND ma_tloai != '$ma_tloai'";
    $stmt = $conn->prepare($sql_check);
    $stmt->execute();
    //Buoc 3: Xử lý kết quả
    if($stmt->rowCount()>0){
        header("Location:edit_category.php?error=existed");
    }else{
        $sql_update = "UPDATE theloai set  ten_tloai='$ten_tloai'where ma_tloai != '$ma_tloai'";
        $stmt = $conn->prepare($sql_update);
        $stmt->execute();
        $ma_tloai = $_GET["uid"];
        if($stmt->rowCount() > 0){
            header("Location:category.php?success=updated");
        }
    }
    

}catch(PDOException $e){
    echo $e->getMessage();
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
    <?php
        if(isset($_GET['error'])){
        echo "<p style='background-color:orange'>{$_GET['error']}</p>";
        }
    ?>
       <center><h1>SỬA THÔNG TIN THỂ LOẠI</h1></center>
       <form action="edit_category.php" method="POST">
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">Mã thể loại</span>
                <input type="text" class="form-control" name = "ma_tloai"value = "<?=$ma_tloai?>" readonly>
            </div>
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">Tên thể loại</span>
                <input type="text" class="form-control" name="ten_tloai" value = "<?=$ma_tloai?>">
            </div>
            <div class="float-right">
                <button type="submit" name= "sbmSave" class="btn btn-success">Lưu</button> 
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
