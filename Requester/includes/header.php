
<!-- pehla requiremnt hai kae side bar dikhana chyie...  -->
<?php
include ('../dbConnection.php');
session_start();
// ab hum check kr laate hain kae login hai kae nhi hai

?>
<!-- user ka profile create krna hai, or yah wo feautrues kae name change kr skae. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstarp css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- fontawsome css -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="../css/custom.css">

    <title><?php  echo TITLE ?></title>
</head>
<body>
<!-- Navigation bar -->
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-15 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">ONLINE MAINTENANCE MANAGEMENT SYSTEM</a></nav>
<!--Navigation end-->

<!-- start container -->

<div class="container-fluid" style="margin-top: 40px;">
	<div class="row"> <!-- start row -->
		<nav class="col-sm-2 bg-light sidebar py-5 d-print-none"> <!-- sidebar start first coulmn --> 
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link 
					<?php if(PAGE == 'RequesterProfile'){ echo 'active';} ?>" 
					href="RequesterProfile.php"><i class="fas fa-user"></i> Profile:</a></li>
					<li class="nav-item"><a class="nav-link
					 <?php if(PAGE == 'SubmitRequest'){ echo 'active';} ?>
					" href="SubmitRequest.php"><i class="fab fa-accessible-icon"></i> Submit Request:</a></li>
					<li class="nav-item"><a class="nav-link 
					<?php if(PAGE == 'Status'){ echo 'active';} ?>"
					 href="CheckStatus.php"><i class="fas fa-align-center"></i> Service Status:</a></li>
					<li class="nav-item"><a class="nav-link
					 <?php if(PAGE == 'ChangePassword'){ echo 'active';} ?>"
					 href="Requesterchangepass.php"><i class="fas fa-key"></i> Change Password:</a></li>
					<li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout:</a></li>
				</ul>
			</div>  
		</nav><!-- sidebar end 1st column -->

