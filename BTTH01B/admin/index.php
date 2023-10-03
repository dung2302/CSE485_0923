<?php
    //Dich vu Bao ve
    session_start();

    //Kiem tra thong tin để bảo vệ kiểm soát ra vào
    if(!isset($_SESSION['isLogin'])){
        header("Location:../login.php");
    }
?>
<?php
try{
    //b1 ket noi dbServer
    $conn = new PDO('mysql:host=localhost:4306;dbname=btth01_cse485','root','');
    //b2 truy ban dem so luong nguoi dùng
    $stmtUser = $conn->prepare("SELECT COUNT(*) FROM users");
    $stmtUser->execute();
    $user_count = $stmtUser->fetchColumn();
    // truy avn đem so lương the loại
    $stmt_ca = $conn->prepare("SELECT COUNT(*) FROM theloai");
    $stmt_ca->execute();
    $ca_count = $stmt_ca->fetchColumn();

    // Truy vấn để đếm số lượng tác giả
    $stmt_tg = $conn->prepare("SELECT COUNT(*) FROM tacgia");
    $stmt_tg->execute();
    $tg_count = $stmt_tg->fetchColumn();

    // Truy vấn để đếm số lượng bài viết
    $stmt_bviet = $conn->prepare("SELECT COUNT(*) FROM baiviet");
    $stmt_bviet->execute();
    $bviet_count = $stmt_bviet->fetchColumn();

    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
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
        <div class="row ">
            <div class="col-sm-3">
            <center>
                <span class="text-primary">Người dùng</span>
                <h1 class="text-bg-blue"><?= $user_count ?></h1>
            </center>
            </div>
            <div class="col-sm-3">
            <center>
                <span class="text-primary">Thể loại</span>
                <h1 class="text-bg-blue"><?= $ca_count ?></h1>
            </center>
                
            </div>
            <div class="col-sm-3">
            <center>
                <span class="text-primary">tác giả</span>
                <h1 class="text-bg-blue"><?= $tg_count ?></h1>
            </center>               
            </div>
            <div class="col-sm-3">
            <center>
                <span class="text-primary">bài viết</span>
                <h1 class="text-bg-blue"><?= $bviet_count ?></h1>
            </center>                
            </div>
        
        </div>
    </div>
    <?php 
        include "layout_ad/footer.php";
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
