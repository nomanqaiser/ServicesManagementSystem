<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstarp css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- fontawsome css -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="../css/custom.css">
    <title><?php echo TITLE ?></title>
</head>
<body>
    <!-- Navigation bar -->
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-15 shadow">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">
ONLINE MAINTENANCE MANAGEMENT SYSTEM</a></nav>
<!--Navigation end-->

<!-- start container -->

<div class="container-fluid" style="margin-top: 40px;">
	<div class="row"> <!-- start row -->
		<nav class="col-sm-2 bg-light sidebar py-5 d-print-none"> <!-- sidebar start first coulmn --> 
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link 
					<?php if(PAGE == 'dashboard'){ echo 'active';} ?>" 
					href="dashboard.php"><i class="fas fa-tachometer-alt"></i> DashBoard:</a></li>
					<li class="nav-item"><a class="nav-link 
					<?php if(PAGE == 'work'){ echo 'active';} ?>
					" href="work.php"><i class="fab fa-accessible-icon"></i> Work Order:</a></li>
					<li class="nav-item"><a class="nav-link 
					<?php if(PAGE == 'request'){ echo 'active';} ?>"
					 href="request.php"><i class="fas fa-align-center"></i> Requests:</a></li>
					<li class="nav-item"><a class="nav-link 
					<?php if(PAGE == 'assets'){ echo 'active';} ?>"
					 href="assets.php"><i class="fas fa-key"></i> Assests:</a></li>
					<li class="nav-item"><a class="nav-link
					 <?php if(PAGE == 'Technician'){ echo 'active';} ?>"
					 href="Technician.php"><i class="fas fa-sign-out-alt"></i> Technician:</a></li>
					<li class="nav-item"><a class="nav-link
					<?php if(PAGE == 'requesters'){ echo 'active';} ?>"
					 href="requester.php"><i class="fas fa-user"></i> Requester:</a></li>
					<li class="nav-item"><a class="nav-link
					<?php if(PAGE == 'sellreport'){ echo 'active';} ?>"
					 href="soldproductreport.php"><i class="fas fa-table"></i> Sell Report:</a></li>
					<li class="nav-item"><a class="nav-link
					<?php if(PAGE == 'workreport'){ echo 'active';} ?>"
					 href="workreport.php"><i class="fas fa-table"></i> Work Report:</a></li>
					 <li class="nav-item"><a class="nav-link 
					<?php if(PAGE == 'changepass'){ echo 'active';} ?>"
					 href="changepass.php"><i class="fas fa-key"></i> Change Password:</a></li>
					<li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i> Log Out:</a></li>


				</ul>
			</div>  
		</nav><!-- sidebar end 1st column -->