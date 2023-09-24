<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSIC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<style>
    a{
        text-decoration: none;
    }
</style>
<body>
    <?php 
        include "layout/header.php";
    ?>
    <div class="row">
        <img class="col-12" src="img/anh2.jpg" alt="">
    </div>
    <div>
        <center><p class="text-primary">TOP BÀI HÁT YÊU THÍCH</p></center>
    </div>
    <div class="container">
    <div class="row ">
      <div class="col-sm-3 border">
        <a href="detail.php">
          <img src="img/anh3.jpg" alt="anh3" class="img-fluid">Chuyện tình cây lá và gió
        </a>
      </div>
      <div class="col-sm-3 border">
        <a href="">
          <img src="img/anh4.jpg" alt="anh4" class="img-fluid">Ơi cuộc sống mến thương
        </a>
      </div>
      <div class="col-sm-3 border">
        <a href="">
          <img src="img/anh5.jpg" alt="anh5" class="img-fluid">Rồi ta sẽ ngắm pháo hoa cùng nhau
        </a>
      </div>
      <div class="col-sm-3 border">
        <a href="">
          <img src="img/anh6.jpg" alt="anh6" class="img-fluid">Em yêu anh
        </a>
      </div>
      <div class="row mt-4 ">
      <div class="col-sm-3 border">
        <a href="">
          <img src="img/anh7.jpg" alt="anh7" class="img-fluid">Có ai hẹn hò cùng em chưa
        </a>
      </div>
    </div>
  </div>
    <?php 
        include "layout/footer.php";
    ?>
</body>
</html>