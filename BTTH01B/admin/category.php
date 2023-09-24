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
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td><a href="edit_category.php"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href=""><i class="bi bi-trash-fill"></i></a></td>
                </tr>
        </tbody>
        </table>
    </div>
    <?php 
        include "layout_ad/footer.php";
    ?>
</body>
</html>