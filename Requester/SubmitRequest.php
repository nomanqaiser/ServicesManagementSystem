<?php
define('TITLE','Submit Profile');
define('PAGE','SubmitRequest');
include ('includes/header.php');
include('../dbConnection.php');
// ab hum check kr laate hain kae login hai kae nhi hai
if ($_SESSION['is_login']) 
{
	$rEmail = $_SESSION['rEmail'];	
}
else
{
	echo "<script>location.href= 'Requesterlogin.php'</script>";
}

if (isset($_REQUEST['submitrequest'])) {
	// checking our all empty fields
	if (($_REQUEST['requestinfo'] == "")||
	 ($_REQUEST['requestdesc'] == "")||
	  ($_REQUEST['requestername'] == "")|| 
	  ($_REQUEST['requesteradd1']=="")|| ($_REQUEST['requesteradd2']=="")|| 
	  ($_REQUEST['requestercity']=="")|| ($_REQUEST['requesterstate']=="")|| 
	  ($_REQUEST['requesterzip']=="")|| ($_REQUEST['requesteremail']== "")|| 
	  ($_REQUEST['requestermobile']=="") || ($_REQUEST['requestdate']=="")) {
		$msg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2'>Fill All Fields</div>";
	}
	else
	{
		$rinfo = $_REQUEST['requestinfo'];
		$rdesc = $_REQUEST['requestdesc'];
		$rname = $_REQUEST['requestername'];
		$radd1 = $_REQUEST['requesteradd1'];
		$radd2 = $_REQUEST['requesteradd2'];
		$rcity = $_REQUEST['requestercity'];
		$rstate = $_REQUEST['requesterstate'];
		$rzip = $_REQUEST['requesterzip'];
		$remail = $_REQUEST['requesteremail'];
		$rmobile = $_REQUEST['requestermobile'];
		$rdate = $_REQUEST['requestdate'];

		$sql = "INSERT INTO submitrequest_tb(request_info, request_desc, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_zip, requester_email, requester_mobile,requester_date) VALUES('$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity','$rstate','$rzip','$remail','$rmobile','$rdate')";

		if ($conn->query($sql) == TRUE) {
			$genid = mysqli_insert_id($conn);

			$msg = "<div class='alert alert-success col-sm-6 ml-5 mt-2'>Request submitted successfully</div>";
			$_SESSION['myid'] = $genid; 
			echo "<script>location.href= 'submitrequestsuccess.php'</script>";
 		}
		else
		{
			$msg = "<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Unable to submit your request</div>";
		}


	}
}




?>
<!--  start 2nd columen service requerst form --> 
<div class="col-sm-9 col-md-10 mt-5"> 
	<form  class="mx-5" action="" method="POST">
	 <!-- kis chz kae lia request krna chahtae ho  -->
	 	<div class="form-group">
	 		<label for="inputRequestInfo">Request Info</label>
	 		<input type="text" name="requestinfo" class="form-control" id="inputRequestInfo" placeholder="Request Info">
	 	</div>
	 	<div class="form-group">
	 		<label for="inputRequestDescription">Description</label>
	 		<input type="text" name="requestdesc" class="form-control" id="inputRequestDescription" placeholder="Write Description">
	 	</div>
	 	<div class="form-group">
	 		<label for="inputName">Name</label>
	 		<input type="text" name="requestername" class="form-control" id="inputName" placeholder="Prince">
	 	</div>
	 		<div class="form-row">
	 			<div class="form-group col-md-6">
	 				<label for="inputAddress">Address line 1</label>
	 				<input type="text" name="requesteradd1" class="form-control" id="inputAddress" placeholder="House No.123">
	 			</div>
	 			<div class="form-group col-md-6">
	 				<label for="inputAddress2">Address line 2</label>
	 				<input type="text" name="requesteradd2" class="form-control" id="inputAddress2" placeholder="Railway Colony">
	 			</div>
	 		</div>
	 		<div class="form-row">
	 			<div class="form-group col-md-6">
	 				<label for="inputCity">City</label>
	 				<input type="text" name="requestercity" class="form-control" id="inputCity">
	 			</div>
	 			<div class="form-group col-md-4">
	 				<label for="inputState">State</label>
	 				<input type="text" name="requesterstate" class="form-control" id="inputState">
	 			</div>
	 			<div class="form-group col-md-2">
	 				<label for="inputZip">Zip</label>
	 				<input type="text" name="requesterzip" class="form-control" id="inputZip" onkeypress="isInputNumber(event)">
	 			</div>
	 		</div>
	 		<div class="form-row">
	 			<div class="form-group col-md-6">
	 				<label for="inputEmail">Email</label>
	 				<input type="email" name="requesteremail" class="form-control" id="inputEmail" placeholder="Enter Email">
	 			</div>
	 			<div class="form-group col-md-2">
	 				<label for="inputMobile">Mobile</label>
	 				<input type="text" name="requestermobile" class="form-control" id="inputMobile" onkeypress="isInputNumber(event)">
	 			</div>
	 			<div class="form-group col-md-2">
	 				<label for="inputDate">Date</label>
	 				<input type="date" name="requesterdate" class="form-control" id="inputDate">
	 			</div>
	 		</div>
	 		<button type="submit" class="btn btn-danger" name="submitrequest">Submit</button>
	 		<button type="reset" class="btn btn-secondary">Reset</button>
	</form>
	<?php  if (isset($msg)) {
		echo $msg;
	} ?>
</div>
<!--  start 2nd columen service requerst form --> 

<!-- only number function input field start -->

<script>
	function isInputNumber(evt){
		var ch = String.formCharCode(evt.which);
		// yahn per regualar expression likh rhae hain
		if (!(/[0-9]/.test(ch))) {
			evt.preventDefault();
		}
	}
</script>


<!-- only number function input field end -->




	<?php
		include('includes/footer.php');
	?>