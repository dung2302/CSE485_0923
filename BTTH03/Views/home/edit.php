
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

    <?php
        if(isset($_GET['error'])){
        echo "<p style='background-color:orange'>{$_GET['error']}</p>";
        }
    ?>
       <center><h1>SỬA THÔNG TIN SACH</h1></center>
       <form action="edit_category.php" method="POST">
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">Id</span>
                <input type="text" class="form-control" name = "id"value = "<?=$id?>" readonly>
            </div>
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">Tên Sach</span>
                <input type="text" class="form-control" name="tenSach" value = "<?=$tenSach?>">
            </div>
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">Nam xuat ban</span>
                <input type="text" class="form-control" name="namXuatBan" value = "<?=$namXuatBan?>">
            </div>
            <div class="input-group mb-3 mt-4">
                <span class="input-group-text" id="">ID tac gia</span>
                <input type="text" class="form-control" name="ten_tloai" value = "<?=$idTacGia?>">
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
