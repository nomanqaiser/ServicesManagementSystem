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
?>
<!-- yahn per request id a jae ga, uc ka use kr kae form bnae gae, sara data populate ho ga, edit kr 
kae update krnae ka option dae gae. -->
<!-- strart 2nd column -->
 <div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Requester Details</h3>
    <!-- jb hum click krtae hai tou next page pae login id pass hota hai tou hum simply echo kr lae gae. -->
    <?php
        // sub sae pehale data ko form mae retreive krwana hai
        if(isset($_REQUEST['edit'])){
            // edit kae click honae per code execute ho ga wrna nhi ho ga.
        $sql = "SELECT * FROM requesterlogin_tb WHERE r_login_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        }
        // update button code
        if(isset($_REQUEST['requpdate']))
        {
            if(($_REQUEST['r_login_id'] == "") || ($_REQUEST['r_name'] == "") ||
            ($_REQUEST['r_email'] == ""))
            {
             $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>'; 
            }
            else
            {
                // jo uc field mae ho ga wo ic request sae ml jae ga or jo ic varibale mae assign ho ga
                $rid = $_REQUEST['r_login_id'];
                $rname = $_REQUEST['r_name'];
                $remail = $_REQUEST['r_email'];
                $sql = "UPDATE requesterlogin_tb SET r_login_id = '$rid', 
                r_name= '$rname', r_email= '$remail' WHERE r_login_id = '$rid'";
                if($conn->query($sql) == TRUE)
                {
                    $msg = '<div class="alert alert-success  col-sm-6 ml-5 mt-2" role="alert">Update Successfully</div>'; 
                }
                else{
                    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Not Updated</div>'; 
                }
            }
        }
    ?>
    <!-- ab data hamara row mae hai, row mae value klae tor per data dikhatae jae gae -->
        <form action="" method="POST">
        <div class="form-group">
        <label for="r_login_id">Requester ID:</label>
        <input type="text" class="form-control" name="r_login_id" id="r_login_id" 
        value="<?php  if(isset($row['r_login_id'])) { echo  $row['r_login_id'];} ?>" readonly>
        </div>
        <div class="form-group">
        <label for="r_name">Name:</label>
        <input type="text" class="form-control" name="r_name" id="r_name" 
        value="<?php  if(isset($row['r_name'])) { echo  $row['r_name'];} ?>">
        </div>
        <div class="form-group">
        <label for="r_email">Email:</label>
        <input type="text" class="form-control" name="r_email" id="r_email" 
        value="<?php  if(isset($row['r_email'])) { echo  $row['r_email'];} ?>">
        </div>
        <!-- buton -->
        <div class="text-center">
           <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="requester.php" class="btn btn-secondary">Close</a>
        </div>
        <?php  if(isset($msg)) { echo $msg;} ?>
        </form>
 </div>
<!-- end 2nd column -->




<?php  include('includes/footer.php') ?>