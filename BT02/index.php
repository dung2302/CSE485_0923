<?php 
    require 'add_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMSX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <?php
        $title= 'DASHBOARD';
    ?>  
    <?php include "giong/khung.php"?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-light rounded p-3 " style="height: fit-content; margin-top:75px;" >
                <?php include "giong/menu.php";?>
            </div>
            <div class="col-md-9 pt-0" style="margin-top: 75px;" id="content">
                <div class="container">
                    
                <div class="rounded bg-light w-100 p-4 mt-5 ">
                    <div class=" d-flex justify-content-between align-items-center"style="border-bottom: 1px solid gray;">
                        <span class="text-danger h3" style="font-weight: bold;">
                            User
                        </span>   
                    </div>
                    <?php include ('message.php');?>
                    <div class="mt-5">
                    <a href="addUser.php">
                        <button class="btn btn-primary">Add user</button>
                    </a>
                </div>
                <table class="table mt-3 ">
                    <thread>
                            <th scope="col"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Action</th>
                    </thread>
                    <tbody>
                    <table class="table mt-3 ">
                    <thread>
                            <th scope="col"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Action</th>
                    </thread>
                    <tbody>
                        <?php 
                            $query = "Select id,first_name, last_name, username, gender from users";
                            $query_run = mysqli_query($conn, $query);
                            if(mysqli_num_rows($query_run)>0){
                            foreach($query_run as $users){
                        ?>
                        <tr>
                            <th scope="row"><input class="form-check-input" type="checkbox"></th>
                            <th><?php echo $users["id"];?></th>
                            <th><?php echo $users["first_name"];?></th>
                            <th><?php echo $users["last_name"];?></th>
                            <th><?php echo $users["username"];?></th>
                            <th><?php echo $users["gender"];?></th>
                            <th>
                                <a href=""><i class="bi bi-pencil"></i></a>
                                <a href=""><i class="bi bi-trash"></i></a>
                            </th>
                        </tr>
                        <?php
                                    }
                                }
                                else {
                                    echo "<h5> No record Found </h5>";
                                }
                            ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

</body>
</html>