<?php
define('TITLE','Status');
include ('includes/header.php');
include ('../dbConnection.php');
if($_SESSION['is_login'])
{
	$rEmail = $_SESSION['rEmail']; 
}
else
{
	echo "<script>location.href='Requesterlogin.php'</script>";
}
?>
<!-- start 2nd column -->
<div class="col-sm-6 mt-5 mx-5">
    <form action="" method="POST" class="form-inline">
        <div class="form-group mr-3 d-print-none">
            <label for="checkid">Enter Request Id:</label>
            <input type="text" class="form-control" name="checkid" id="checkid" onkeypress="isInputNumber(event)">
        </div>
        <button type="submit" class="btn btn-danger d-print-none">Search</button>
    </form>
    <?php
		if(isset($_REQUEST['checkid']))
		{
			if($_REQUEST['checkid'] == "")
			{
				$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
			}
			else{
				// select query sae data ko dikahana hai
			$sql= "SELECT * FROM assignwork_db WHERE request_id={$_REQUEST['checkid']}";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			if(($row['request_id'] == $_REQUEST['checkid'])){ ?>
    <!--  html mae php use kr kae dikhata hn.  -->
    <h3 class="text-center mt-5">Assigned Work Details</h3>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>Request ID</td>
                <td><?php if(isset($row['request_id'])) { echo $row['request_id'];} ?></td>
            </tr>
            <tr>
                <td>Request info</td>
                <td><?php if(isset($row['request_info'])) { echo $row['request_info'];} ?></td>
            </tr>
            <tr>
                <td>Request Description</td>
                <td><?php if(isset($row['request_desc'])) { echo $row['request_desc'];} ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php if(isset($row['requester_name'])) { echo $row['requester_name'];} ?></td>
            </tr>
            <tr>
                <td>Address 1</td>
                <td><?php if(isset($row['requester_add1'])) { echo $row['requester_add2'];} ?></td>
            </tr>
            <tr>
                <td>Address 2</td>
                <td><?php if(isset($row['requester_add2'])) { echo $row['requester_add2'];} ?></td>
            </tr>
            <tr>
                <td>City</td>
                <td><?php if(isset($row['requester_city'])) { echo $row['requester_city'];} ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php if(isset($row['requester_state'])) { echo $row['requester_state'];} ?></td>
            </tr>
            <tr>
                <td>Request ID</td>
                <td><?php if(isset($row['request_id'])) { echo $row['request_id'];} ?></td>
            </tr>
            <tr>
                <td>Pin Code</td>
                <td><?php if(isset($row['requester_zip'])) { echo $row['requester_zip'];} ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php if(isset($row['requester_email'])) { echo $row['requester_email'];} ?></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><?php if(isset($row['requester_mobile'])) { echo $row['requester_mobile'];} ?></td>
            </tr>
            <tr>
                <td>Technician Name</td>
                <td><?php if(isset($row['assign_tech'])) { echo $row['assign_tech'];} ?></td>
            </tr>
            <tr>
                <td>Assign Date</td>
                <td><?php if(isset($row['assign_date'])) { echo $row['assign_date'];} ?></td>
            </tr>
            <tr>
                <td>Customer Sign</td>
                <td></td>
            </tr>
            <tr>
                <td>Technician Sign</td>
                <td></td>
            </tr>
        </tbody>
    </table>
	<div class="text-center">
		<form action="" class="mb-3 d-print-none">
				<input class="btn btn-danger" type="submit" value="Print" onClick="window.print()">
				<input class="btn btn-secondary" type="submit" value="Close">
		</form>
	</div>
    <?php }
		else { 
			echo '<div class="alert alert-info mt-4">Your Request Is Still Pending</div>';
		 }
			}	
		}?>
		<?php  if(isset($msg)) { echo $msg;} ?>
</div>
<!-- end 2nd column -->
<script>
function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
        evt.preventDefault();
    }
}
</script>





<?php
		include('includes/footer.php');
	?>