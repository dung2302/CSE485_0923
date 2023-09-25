<?php
    session_start();
    require 'ketnoi1.php';

    if(isset ($_POST['addUser'])){
        $first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $phone_number= mysqli_real_escape_string($conn,$_POST['phone_number']);
        $postion = mysqli_real_escape_string($conn,$_POST['postion']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $date_of_birth = mysqli_real_escape_string($conn,$_POST['date_of_birth']);
        $password= mysqli_real_escape_string($conn,$_POST['password']);

        $query = "Insert into users (first_name, last_name, username, email, phone_number, role, gender, date_of_birth, password) values
            ('$first_name','$last_name','$username','$email','$phone_number','$postion','$gender','$date_of_birth','$password')";
        
        $query_run = mysqli_query($conn, $query);
        if ($query_run){
            $_SESSION['message']= "Thêm thành công";
            header("Location: addUser.php");
            exit(0);
        }
        else{
            $_SESSION['message']= "Thêm không thành công";
            header("Location: addUser.php");
            exit(0); 
        }
    }



    if(isset($_POST['editUser'])){

        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $f_name = mysqli_real_escape_string($conn,$_POST['first_name']);
        $l_name = mysqli_real_escape_string($conn,$_POST['last_name']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $phone_number= mysqli_real_escape_string($conn,$_POST['phone_number']);
        $postion = mysqli_real_escape_string($conn,$_POST['postion']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $date_of_birth = mysqli_real_escape_string($conn,$_POST['date_of_birth']);
        $password= mysqli_real_escape_string($conn,$_POST['password']);
        $query = "Update set users first_name = '$first_name',last_name = '$last_name',user_name = '$user_name',email = '$email',phone_number = '$phone_number',rule = '$postion',gender = '$gender',
        date_of_time = '$date_of_time',password = '$password' where id= '$user_id' ";
    }
?>
