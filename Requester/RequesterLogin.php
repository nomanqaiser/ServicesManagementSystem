<?php 
include ('../dbConnection.php');
session_start();
if (!isset($_SESSION['is_login'])) {
    
// user jo login form mae input kr rha hai, pehlae ic ko capture krae.

if (isset($_REQUEST['rEmail'])) {
     
$rEmail = mysqli_real_escape_string($conn, trim($_REQUEST['rEmail']));
$rPassword = mysqli_real_escape_string($conn, trim($_REQUEST['rPassword']));
//ab user nae jo input kia or o db ame hai wo match krna chyie, ic kae lia sql query or select starement.
$sql = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email = '".$rEmail."' AND r_password = '".$rPassword."' limit 1 ";
$result = $conn->query($sql);
// ab result mae number of rows 1 hona chyie 1 tab ho ga b email or password match krae ga.
if ($result->num_rows == 1) {
    $_SESSION['is_login'] = true;
    $_SESSION['rEmail']= $rEmail;
    echo "<script>location.href = 'RequesterProfile.php';</script>";
    exit;    
}
else
{
    $msg = '<div class="alert alert-warning mt-2">Enter Valid Email and Password</div>';
}
}
}
else
{
    echo "<script>location.href = 'RequesterProfile.php';</script>";    
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstarp css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- fontawsome css -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/custom.css">

    <title>LOGIN</title>
    <style>
        body{
            background-color:#FF7F50;
        }
    </style>
</head>
<body>
    <div class="mt-5 text-center" style="font-size: 30px;">
        <i class="fas fa-stethoscope"></i>
        <span class="pl-2">ONLINE SERVICE MANAGEMENT SYSTEM</span>
    </div>
    <p class=" pt-3  text-center" style="font-size: 20px; color:#00FF7F;"><i class="fas fa-user-secret"></i> Requester Login (Demo)</p>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4">
                <form action="" class="shadow-lg p-4"  method="POST">
                    <div class="form-group">
                        <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2"> Email ID:</label>
                        <input type="email" name="rEmail" class="form-control" placeholder="Email" required>
                        <small class="form-text">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password: </label>
                        <input type="password" name="rPassword" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-outline-danger mt-5 font-weight-bold btn-block shadow-sm">Login</button>
                    <?php if(isset($msg)) {echo $msg; } ?>
                    <p class="text-center mt-3">Don't Have An Account? <a href="../index.php" class="ml-2">SignUp Here</a></p>
                </form>

                <div class="text-center"><a href="../index.php" class="btn btn-info mt-4 font-weight-bold shadow-sm">Back To Home</a>
                    
                </div>
            </div>
        </div>        
    </div>







    <!-- javascript start -->

<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>



</body>
</html>