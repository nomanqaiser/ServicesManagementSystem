<?php
define('TITLE','ChangePassword');
include ('includes/header.php');
include('../dbConnection.php');
if($_SESSION['is_login']){
	$rEmail = $_SESSION['rEmail'];
}
	else{
		echo "<script> location.href = RequesterLogin.php";
	}

	// code tab chlae jb passwsor wale buton pae click ho..
	if(isset($_REQUEST['passupdate']))
	{
		$rEmail = $_SESSION['rEmail'];
		if($_REQUEST['rPassword']== ""){
			$passmsg = '<div class="alert alert-warning col-sm-9 ml-5 mt-2">Fill All Fields::</div>';
		}	
		else
		{
		$rPass = $_REQUEST['rPassword'];
		$sql = "UPDATE requesterlogin_tb SET r_password = '$rPass' WHERE r_email = '$rEmail'";
		if($conn->query($sql)== TRUE)
		{
			$passmsg = '<div class="alert alert-success col-sm-9 ml-5 mt-2">Updated Successfully:</div>';
		}
		else{
			$passmsg = '<div class="alert alert-danger col-sm-9 ml-5 mt-2">Not Updated Successfully:</div>';
		}
		}
		
		
	
	}


?>
<!-- main passowrd ko passwoerd sae up date kr dena hia -->

<div class="col-sm-4 col-md-6"> <!-- start user  cahnge password form for 2nd column-->
	<form action="" class="mt-5 mx-5"  method="POST">
		<div class="form-group">
			<label for="inputEmail">Email:</label>
			<input type="email" class="form-control" id="inputEmail" value="<?php  echo $rEmail; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="inputnewpassword">New Password:</label>
			<input type="password" class="form-control" id="inputnewpassword" name="rPassword"
			 placeholder="New Password"> 
		</div>
		<button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
		<button type="reset" class="btn btn-secondary mt-4">Reset</button>
		<?php  if(isset($passmsg)){ echo $passmsg;} ?>
	</form>
</div><!-- end user  cahnge password form for 2nd column-->









   <?php
		include('includes/footer.php');
	?>