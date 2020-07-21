<?php
define('TITLE','Change Password');
define('PAGE','changepass');
include ('includes/header.php');
include ('../dbConnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
	$aEmail = $_SESSION['aEmail'];
}
	else{
		echo "<script> location.href='login.php';</script>";
	}

    // code tab chlae jb passwsor wale buton pae click ho..
	if(isset($_REQUEST['passupdate']))
	{
		$aEmail = $_SESSION['aEmail'];
		if($_REQUEST['aPassword']== ""){
			$passmsg = '<div class="alert alert-warning col-sm-9 ml-5 mt-2">Fill All Fields::</div>';
		}	
		else
		{
		$aPass = $_REQUEST['aPassword'];
		$sql = "UPDATE adminlogin_tb SET a_password = '$aPass' WHERE a_email = '$aEmail'";
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

<div class="col-sm-9 col-md-10"> <!-- start admin change password form for 2nd column-->
	<form action="" class="mt-5 mx-5"  method="POST">
		<div class="form-group">
			<label for="inputEmail">Email:</label>
			<input type="email" class="form-control" id="inputEmail" value="<?php  echo $aEmail; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="inputnewpassword">New Password:</label>
			<input type="password" class="form-control" id="inputnewpassword" name="aPassword"
			 placeholder="New Password"> 
		</div>
		<button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
		<button type="reset" class="btn btn-secondary mt-4">Reset</button>
		<?php  if(isset($passmsg)){ echo $passmsg;} ?>
	</form>
</div><!-- end admin cahnge password form for 2nd column-->




<?php  include('includes/footer.php') ?>