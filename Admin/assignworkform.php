<!-- form start -->
<!-- third column start -->
<!-- khch quries likhni hai data ko fetch krnae kae lia -->
<?php

if(isset($_SESSION['is_adminlogin'])) 
{
	$aEmail = $_SESSION['aEmail'];
}
else
{
	echo "<script>location.href='login.php'</script>";
}


	if(isset($_REQUEST['view'])){
		$sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}"; 
		$result =$conn->query($sql);
		$row = $result->fetch_assoc(); 
}
	if(isset($_REQUEST['close'])){
		$sql = "DELETE FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
		if($conn->query($sql) == TRUE)
		{
			echo 'meta http-equiv="refresh" content="0;URL=?closed" />';
		}
		else{
			echo "Unable to delete";
		}
		
	} 
	// assign button ake click per data ayae
		if(isset($_REQUEST['assign']))
		{
			if(($_REQUEST['request_id'] == "")|| ($_REQUEST['request_info'] == "")
			  ||($_REQUEST['requestdesc'] == "")|| ($_REQUEST['requestername'] == "")
			  || ($_REQUEST['address1'] == "")|| ($_REQUEST['address2'] == "")
			  || ($_REQUEST['requestercity'] == "")|| ($_REQUEST['requesterstate'] == "")
			  || ($_REQUEST['requesterzip'] == "")|| ($_REQUEST['requesteremail'] == "")
			  || ($_REQUEST['requestermobile'] == "")|| ($_REQUEST['assigntech'] == "")
			  || ($_REQUEST['inputdate'] == "")){
				$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
			} 	
			else{
				// ake ake varaible ame data ko rakh laate hain
				$rid = $_REQUEST['request_id'];
				$rinfo = $_REQUEST['request_info'];
				$rdesc = $_REQUEST['requestdesc'];
				$rname = $_REQUEST['requestername'];
				$radd1 = $_REQUEST['address1'];
				$radd2 = $_REQUEST['address2'];
				$rcity = $_REQUEST['requestercity'];
				$rstate = $_REQUEST['requesterstate'];
				$rzip = $_REQUEST['requesterzip'];
				$remail= $_REQUEST['requesteremail'];
				$rmobile = $_REQUEST['requestermobile'];
				$rassigntech = $_REQUEST['assigntech'];
				$rdate = $_REQUEST['inputdate'];
				
				$sql = "INSERT INTO assignwork_db (request_id, request_info, request_desc, requester_name
				, requester_add1, requester_add2, requester_city, requester_state, requester_zip,
				requester_email, requester_mobile, assign_tech,assign_date) VALUES ('$rid', '$rinfo'
				, '$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail'
				, '$rmobile', '$rassigntech', '$rdate')";

				if($conn->query($sql) == TRUE){
					$msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Work Assigned Successfully</div>';
				}
				else{
					$msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to work Assign</div>';
				}	
			}
		}
	?>




<div class="col-sm-5 mt-5 jumbotron">
	<form  action="" method="POST">
	 <!-- kis chz kae lia request krna chahtae ho  -->
        <h5 class="text-center">Assign Work Order Request</h5>
        <div class="form-group">
	 		<label for="request_id">Request ID</label>
	 		<input type="text" name="request_id" class="form-control" id="request_id"
			  value="<?php if(isset($row['request_id'])) echo $row['request_id']; ?>" readonly>
	 	</div>
	 	<div class="form-group">
	 		<label for="request_info">Request Info</label>
	 		<input type="text" name="request_info" 
			  value="<?php if(isset($row['request_info'])) echo $row['request_info']; ?>" 
			  class="form-control" id="request_info">
	 	</div>
	 	<div class="form-group">
	 		<label for="requestdesc">Description</label>
			 <input type="text" name="requestdesc"  value="<?php if(isset($row['request_desc'])) 
			 echo $row['request_desc']; ?>"
			  class="form-control" id="requestdesc">
	 	</div>
	 	<div class="form-group">
	 		<label for="requestername">Name</label>
			 <input type="text" name="requestername"  value="<?php if(isset($row['requester_name']))
			  echo $row['requester_name']; ?>"
			  class="form-control" id="requestername">
	 	</div>
	 		<div class="form-row">
	 			<div class="form-group col-md-6">
	 				<label for="address1">Address line 1</label>
	 				<input type="text" name="address1" 
					 value="<?php if(isset($row['requester_add1']))
					  echo $row['requester_add1']; ?>" class="form-control" id="address1">
	 			</div>
	 			<div class="form-group col-md-6">
	 				<label for="address2">Address line 2</label>
	 				<input type="text" name="address2" 
					  value="<?php if(isset($row['requester_add2']))
					   echo $row['requester_add2']; ?>"class="form-control" id="address2">
	 			</div>
	 		</div>
	 		<div class="form-row">
	 			<div class="form-group col-md-4">
	 				<label for="requestercity">City</label>
	 				<input type="text" name="requestercity" 
					 value ="<?php if(isset($row['requester_city'])) 
					 echo $row['requester_city']; ?>" class="form-control" id="requestercity">
	 			</div>
	 			<div class="form-group col-md-4">
	 				<label for="requesterstate">State</label>
	 				<input type="text" name="requesterstate"
					  value="<?php if(isset($row['requester_state'])) 
					  echo $row['requester_state']; ?>" class="form-control" id="requesterstate">
	 			</div>
	 			<div class="form-group col-md-4">
	 				<label for="requesterzip">Zip</label>
	 				<input type="text" name="requesterzip"
					  value="<?php if(isset($row['requester_zip'])) 
					  echo $row['requester_zip']; ?>" class="form-control" id="requesterzip" onkeypress="isInputNumber(event)">
	 			</div>
	 		</div>
	 		<div class="form-row">
	 			<div class="form-group col-md-8">
	 				<label for="requesteremail">Email</label>
	 				<input type="email" name="requesteremail"
					  value="<?php if(isset($row['requester_email'])) 
					  echo $row['requester_email']; ?>" class="form-control" id="requesteremail">
	 			</div>
	 			<div class="form-group col-md-4">
	 				<label for="requestermobile">Mobile</label>
	 				<input type="text" name="requestermobile"
					  value="<?php if(isset($row['requester_mobile']))
					   echo $row['requester_mobile']; ?>" class="form-control" id="requestermobile" 
					   onkeypress="isInputNumber(event)">
	 			</div>
			</div>
                 <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="assigntech">Assign To Technician</label>
                        <input type="text" class="form-control" id="assigntech" name="assigntech">
                    </div>
                    <div class="form-group col-md-6">
	 				<label for="inputDate">Date</label>
	 				<input type="date" name="inputdate" class="form-control" id="inputDate">
	 			</div>
                 </div>
            <div class="float-right">
                <button type="submit" class="btn btn-success" name="assign">Assign</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
           </div>
	        </form>
			<?php if(isset($msg)) { echo $msg;}?>
        </div>
		<script>
			function isInputNumber(evt){
				var ch = String.fromCharCode(evt.which);
				if(!(/[0-9]/.test(ch))){
					evt.preventDefault();
				}
			}
		</script>

		
		