<?php
define('TITLE','Requester Profile');
define('PAGE','RequesterProfile');
include ('includes/header.php');
include ('../dbConnection.php');
// ab hum check kr laate hain kae login hai kae nhi hai
if ($_SESSION['is_login']) 
{
	$rEmail = $_SESSION['rEmail'];	
}
else
{
	echo "<script>location.href= 'Requesterlogin.php'</script>";
}

	// to show wmail or name in our form
	$sql = "SELECT r_name, r_email FROM requesterlogin_tb WHERE r_email ='$rEmail'";
	$result = $conn->query($sql);

	if ($result->num_rows==1) 
	{
		$row = $result->fetch_assoc();
		$rName = $row['r_name'];	
	}
	// update krna hai name ko
	if (isset($_REQUEST['nameupdate'])) 
	{
		if ($_REQUEST['rName']== "") {
				// assign to varibale and pass out print
				$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields!!</div>';
			}	
			else
			{
				//ab jo new naam yae ga ucae capture krna hai
				$rName = $_REQUEST['rName'];
				$sql = "UPDATE requesterlogin_tb SET r_name='$rName' WHERE r_email='$rEmail'";
				if ($conn->query($sql)== TRUE) {
					$msg = '<div class="alert alert-info col-sm-6 ml-5 mt-2">Updated Successfully!!</div>';
				}
				else
				{
					$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to update!!</div>';	
				}
			}
	}

?>
		
		<div class="col-sm-6 mt-5"> <!-- Requester profile area start 2nd column -->
		
			<form action="" method="POST" class="mx-5">
				<div class="form-group ">
					<label for="rEmail">Email:</label>
					<input type="email" name="rEmail" class="form-control" id="rEmail" value="<?php   echo $rEmail; ?>" readonly>
				</div>
				<div class=	"form-group">
					<label for="rName">Name:</label>
					<input type="text" name="rName" id="rName" class="form-control" value="<?php  echo $rName; ?>">
				</div>
				<button type="submit" class="btn btn-danger" name="nameupdate">UPDATE</button>
				<?php if(isset($msg)) {echo $msg; } ?>
			</form>
			

		</div><!-- Requester profile area end 2nd column -->

		<?php
		include('includes/footer.php');
	    ?>