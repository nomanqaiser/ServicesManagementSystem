<?php
define('TITLE','Requests');
define('PAGE','request');
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

<!-- kae jahn service request ka data save hua is tablae mae
uc table sae data yahn fetch krna hai -->

<!-- assin form mae technican ka data dae kr assign kr dena hai or wo sara data table mae chla jae ga
uc ko work order mae fetch kryawe gae -->

<!-- 1: data retreieve krae gae 
2: view krae gae or action then assign-->

<!-- pehla kaam data ko retreieve krwanae ka -->

<div class="col-sm-4 mb-5">
    <!-- ab yahn card banana hai jis ame user request kr rha hai uc ka data ho ga -->
    <?php
        $sql = "SELECT request_id, request_info, request_desc, request_date FROM submitrequest_tb"; 
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc()){
                echo '<div class="card mt-5 mx-5">';
                    echo '<div class="card-header">';
                     echo 'Request ID:'.$row['request_id'];
                    echo '</div>';
                    // body
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">Request Info: '.$row['request_info'];
                    echo '</h5>';
                    echo '<p class="card-text">'.$row['request_desc'];
                    echo '</p>';
                    echo '<p class="card-text">Request Date: '.$row['request_date'];
                    echo '</p>';
                    // button start
                    echo '<div class="float-right">';
					echo '<form action="" method="POST">';
						echo '<input type="hidden" name="id" value='.$row["request_id"].'>';
						echo '<input type="submit" class="btn btn-danger mr-3" name="view" value="View">';
						echo '<input type="submit" class="btn btn-secondary" name="close" value="Close">';
                    echo '</form>';
                    echo '</div>'; // button end
                    echo '</div>';
                    echo '</div>';
            }
        }

    ?>
</div>


	
<?php
include('assignworkform.php'); 
include('includes/footer.php'); 
 
 ?>