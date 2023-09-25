<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    
    <?php
        $title= 'Add User';
    ?>  
    <?php include ('giong/khung.php');?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-light rounded p-3 " style="height: fit-content; margin-top:75px;" >
                <?php include ('giong/menu.php');?>
            </div>
            <div class="col-md-9 pt-0" style="margin-top: 75px;" id="content">
                <div class="container">
                    
                <div class="rounded bg-light w-100 p-4 mt-5 ">
                    <div class=" d-flex justify-content-between align-items-center"style="border-bottom: 1px solid gray;">
                        <span class="text-danger h3" style="font-weight: bold;">
                            New User Form
                        </span>   
                    </div>
                    <form action="add_db.php" method="POST" class="text-secondary ">
                        <div class="row mt-4">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                            <div class="row">
                                    <div class="col-md-6">
                                        <label for="">First Name <span class="text-danger">*</span></label> <br>
                                        <input type="text" name="first_name" id="" class="form-control " placeholder="First Name">
        
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Last Name <span class="text-danger">*</span></label> <br>
                                        <input type="text" name="last_name" id="" class="form-control " placeholder="Last Name">
                                        
                                    </div>
                            </div> 
                                <label for="" class="mt-4">User Name <span class="text-danger">*</span></label> <br>
                                <input type="text" name="username" id="" class="form-control " placeholder="User Name" required>
                                
                                <label for=""class="mt-4">Email <span class="text-danger">*</span></label> <br>
                                <input type="email" name="email" id="" class="form-control " placeholder="Email" required>
                            
                                <label for=""class="mt-4">Phone Number <span class="text-danger">*</span></label> <br>
                                <input type="number" name="phone_number" id="" class="form-control " placeholder="Phone Number" required>
                                
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <label for="">Role <span class="text-danger">*</span></label> <br>
                                <select class="custom-select form-control " name="postion" required>
                                    <option selected>Select the Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Manager">Mangager</option>
                                    <option value="Customer">Customer</option>
                                </select>
                                
                            </div>
                            <div class="col-md-4">
                                <label for="">Gender <span class="text-danger">*</span></label> <br>
                                <select class="form-control " name="gender" required>
                                    <option selected>Choose gender</option>
                                    <option value="M">Male</option>
                                    <option value="L">Female</option>
                                </select>
                                
                            </div>
                            <div class="col-md-4">
                                <label for="">Date of Birth <span class="text-danger">*</span></label> <br>
                                <input type="datetime" name="date_of_birth" id="" class="form-control" required>
                                
                            </div>
</div>
                     
                            <button type="submit" name="sbmeditUser" class="btn btn-success mt-4 mb-5">Save</button>
                            <a href="index.php"><button type="button" class="btn btn-danger mt-4 mb-5">Cancel</button></a>
                    </form>
                </div>

</body>
</html>