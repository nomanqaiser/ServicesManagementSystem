<!-- Start registration form start -->

<?php
include ('dbConnection.php');
// ab from ka data table mae ja k save krtae hain.
// yeh data ab hum nae dtabse mae table ame lae kae jana hai, echo nhi variable ame store krwa dae gae

if (isset($_REQUEST['rSignup'])) {
 // Email alerady registered code
$sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
$result = $conn->query($sql);
if ($result->num_rows==1) {
    $regmsg =  '<div class="alert alert-warning mt-2" role="alert">Email ID Already Registered!!!</div>';
}
else
{
// assigining users values to variable
$rName = $_REQUEST['rName'];
$rEmail= $_REQUEST['rEmail'];
$rPassword = $_REQUEST['rPassword'];

$sql = "INSERT INTO requesterlogin_tb(r_name,r_email,r_password) VALUES ('$rName','$rEmail','$rPassword')";

if($conn->query($sql) == TRUE)
{
    $regmsg = '<div class="alert alert-success mt-2" role="alert">Account Successfully Created!!</div>';
}
else
{
    $regmsg = '<div class="alert alert-danger mt-2" role="alert">Unable To Create Account</div>';
}
}
}


?>


<div class="container pt-5" id="registration">
    <h2 class="text-center">Create An Account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" method="POST" class="shadow-lg p-4">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name:</label><input type="text" name="rName" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email:</label><input type="email" name="rEmail" class="form-control" placeholder="Email" required>
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">New Password:</label><input type="password" name="rPassword" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                <em style="font-size: 10px;">Note - By clicking SignUp, You agree to our Terms,Data Policy and Cookie policy</em>
                <?php  if (isset($regmsg)) { echo $regmsg;} ?>
            </form>
        </div>
    </div>
</div>
<!-- end registration fotrm -->