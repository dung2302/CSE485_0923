<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSIC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <?php 
        include "layout_ad/header_ad.php";
    ?>
    <div class="container">
       <center><h1>THÊM MỚI THỂ LOẠI</h1></center>
       <div class="input-group mb-3 mt-4">
            <span class="input-group-text" id="">Tên thể loại</span>
            <input type="text" class="form-control">
        </div>
        <div class="float-right">
            <button type="button" class="btn btn-success">Thêm</button> 
            <button type="button" class="btn btn-warning text-body">Quay lại</button>
        </div>
    </div>
    <?php 
        include "layout_ad/footer.php";
    ?>
</body>
</html>