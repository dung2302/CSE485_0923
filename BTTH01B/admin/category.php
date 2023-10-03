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
//b1: ket noi
    $conn = new PDO('mysql:host=localhost:4306;dbname=btth01_cse485','root','');
    $sql = "SELECT * FROM theloai";
            $stmt = $conn -> prepare($sql);
            $stmt -> execute();
            $data = $stmt ->fetchAll();
    }
    catch(PDOException $e){
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
        <a href="add_category.php">
        <button type="submit"class="btn btn-success mt-5">Thêm mới</button></a>
        <table class= "table mt-4">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Tên thể loại</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            foreach($data as $value): ?>
                <tr>
                <th scope="row"><?= $value['ma_tloai']; ?></th>
                <td><?= $theloai['ten_tloai']; ?></td>
                <td><a href= "edit_category.php?id=<?= $value['ma_tloai'];?>"><i class="bi bi-pencil-square"></a></i></td>
                <td><a href= "delete_category.php?id=<?= $value['ma_tloai'];?>"><i class="bi bi-trash3-fill"></a></i></td>
                </tr>
                <?php endforeach;?>
        </tbody>
        </table>
    </div>
    <?php 
        include "layout_ad/footer.php";
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
