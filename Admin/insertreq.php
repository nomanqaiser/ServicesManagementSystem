<?php
define('TITLE','Update Requester');
define('PAGE','requesters');
include ('includes/header.php');
include ('../dbConnection.php');

session_start();
if(isset($_SESSION['is_adminlogin'])) 
{
	$aEmail = $_SESSION['aEmail'];
}
else
{
	echo "<script>location.href='login.php'</script>";
}

// insert data query
if(isset($_REQUEST['reqsubmit']))
{
    if(($_REQUEST['r_name'] == "") || ($_REQUEST['r_email'] == "") || ($_REQUEST['r_password'] == ""))
    {
        $msg = '<div class="alert alert-warning col-sm-6 mt-2 ml-5">Fill All Fields</div>';
    }
    else{
        $rname = $_REQUEST['r_name'];
        $rEmail = $_REQUEST['r_email'];
        $Password = $_REQUEST['r_password'];
        $sql = "INSERT INTO requesterlogin_tb(r_name,r_email,r_password) 
        VALUES('$rname','$rEmail','$Password')"; 
        if($conn->query($sql) == TRUE)
        {
            $msg = '<div class="alert alert-success col-sm-6 mt-2 ml-5">Added Successfully</div>';
        }
        else{
            $msg = '<div class="alert alert-danger col-sm-6 mt-2 ml-5">Unable to Add</div>';
        }
    }
}
?>
<!-- ake new user add krna hai, jo register ka form bnaya tha user kae lia wahi yahn use krna hai -->
<!-- 2nd column start -->
    <div class="col-sm-6 mt-5 mx-3 jumbotron">
        <h3 class="text-center">Add New Requester</h3>
        <form action="" method="POST">
           <div class="form-group">
                <label for="r_name">Name:</label>
                <input type="text" class="form-control" id="r_name" name="r_name">
           </div>
           <div class="form-group">
                <label for="r_email">Email:</label>
                <input type="text" class="form-control" id="r_email" name="r_email">
           </div>
           <div class="form-group">
                <label for="r_password">Password:</label>
                <input type="password" class="form-control" id="r_password" name="r_password">
           </div>
           <div class="text-center">
            <button type="submit" class="btn btn-danger" name="reqsubmit" id="reqsubmit">Submit</button>
             <a href="requester.php" class="btn btn-secondary">Close</a>
           </div>
           <?php if(isset($msg)) { echo $msg ;} ?>
        </form>
    </div>
<!-- 2nd column end -->





<?php  include('includes/footer.php') ?>