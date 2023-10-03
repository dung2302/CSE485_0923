<?php 
    try {
        $conn = new PDO("mysql:host=localhost:4306;dbname=btth01_cse485", "root","");

        $sql = "SELECT * FROM baiviet ORDER BY ma_bviet";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $data = $stmt->fetchAll();
    } catch(PDOException $e) {
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
<style>
    a{
        text-decoration: none;
    }
</style>
<body>
    <?php 
        include "layout/header.php";
    ?>
    <div class="container-fluit">
    <div class="card-body">
        <?php
        // Hiển thị thông tin của bài hát
        if ($baiHat) {?>
            <h5><?= $baiHat['tieude']?></h5>
            <p><b>Bài hát: </b><?= $baiHat['ten_bhat']?></p>
            <p><b>Thể loại: </b><?= $tenTheLoai['ten_tloai']?></p>
            <p><b>Tóm tắt: </b><?=$baiHat['tomtat']?></p>
            <p><b>Nội dung: </b><?=$baiHat['noidung']?></p>
            <p><b>Tác giả: </b><?=$tenTacGia['ten_tgia']?></p>
        <?php } else {
            echo "Không tìm thấy bài hát.";
        }
        ?>
        </div>
    </div>
    <?php 
        include "layout/footer.php";
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
