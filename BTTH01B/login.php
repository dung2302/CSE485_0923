<?php 
if(isset($_POST['sbmLogin'])){
    $user = $_POST['username'];
    $pass = $_POST['pass'];
try{
    //b1 : ket noi dbServer
    $conn = new PDO("mysql:host=localhost:4306;dbname=btth01_cse485", "root","");
    //b2: thuc hien truy van
    $sql_check = "SELECT * FROM users WHERE username = '$user' OR email = '$user'";
    $stmt = $conn -> prepare($sql_check);
    $stmt ->execute();
    //b3 lay thong tin bao gom mat khau 
    if($stmt->rowCount() > 0){
        $users = $stmt->fetch();
        //Lay ra mat khau
        $pass_hash = $users[3];
        if(password_verify($pass, $pass_hash)){
            //CAP THE (authentication - Not: authorization)
            session_start();
            $_SESSION['isLogin'] = $users[1];
            header("Location:admin/index.php");
        }else{
            header("Location:login.php?error=not-matched-password");
        }
    }else{
        header("Location:login.php?error=not-existed");
    }

}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        include "layout/header.php";
    ?>
    <?php
            if(isset($_GET['error'])){
                echo "<center><p style = 'color:red; font-weight: bold;'>{$_GET['error']}</p></center>";
            }
        ?>
    <div class="container w-50 bg-secondary mt-5 ">
        <div class="position-relative">
                Sign In
        <div>
        <form action="login.php" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                <input type="text" name="username" class="form-control" placeholder="username"aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                <input type="password" name="pass" class="form-control" placeholder="password" aria-describedby="basic-addon1">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                <label class="form-check-label" for="flexCheckChecked">
                    Remember Me
                </label>
            </div>
            <div>
            <button class="btn btn-warning" name = "sbmLogin" type = "submit">Login</button>
            </div>
            </div>

            <div>
                <center>
                Don't have an account? <a href="#" class="text-warning">Sign up</a> 
                <br><a href="#" class="text-warning">Forgot your password</a></center>
            </div>
            </div>
        </form>
    </div>
        <?php 
        include "layout/footer.php";
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
