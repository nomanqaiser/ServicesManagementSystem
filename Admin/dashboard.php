<?php
define('TITLE','Dashboard');
define('PAGE','dashboard');
include ('includes/header.php');
include ('../dbConnection.php');
//  yahn pae check krna hai agr koi bnda bina login kia access krae ga admin login ho tb 
// hi dashboard dikhae, tb option login ka dae gae 
session_start();
if(isset($_SESSION['is_adminlogin'])) 
{
	$aEmail = $_SESSION['aEmail'];
}
else
{
	echo "<script>location.href='login.php'</script>";
}
// dashabord dybnamic
// jo request submit ho rha hai uc ka data kase nikalae gae
$sql = "SELECT max(request_id) FROM submitrequest_tb";
$result = $conn->query($sql);
// uc max id ko fetch krna eki bajae numeri array ame lae lae gae 
$row = $result->fetch_row();
$submitrequest = $row[0];

$sql = "SELECT max(request_id) FROM assignwork_db";
$result = $conn->query($sql);
// uc max id ko fetch krna eki bajae numeri array ame lae lae gae 
$row = $result->fetch_row();
$assignwork = $row[0];

$sql = "SELECT * FROM technician_tb";
$result = $conn->query($sql);
// uc max id ko fetch krna eki bajae numeri array ame lae lae gae 
$totaltech = $result->num_rows;


?>

		
		<div class="col-sm-9 col-md-10"><!-- start dashboard start 2st column -->
			<div class="row text-center mx-5">
			<div class="col-sm-4 mt-5">
				<div class="card text-white bg-danger mb-3" style="max-width:18rem;">
					<div class="card-header">Requests Received</div>
						<div class="card-body">
						<h4 class="card-title"><?php echo $submitrequest; ?></h4>
						<a class="btn text-white" href="request.php">View</a>
						</div>
				</div>
			</div>
			<div class="col-sm-4 mt-5">
				<div class="card text-white bg-success mb-3" style="max-width:18rem;">
					<div class="card-header">Assigned Work</div>
						<div class="card-body">
						<h4 class="card-title"><?php echo $assignwork; ?></h4>
						<a class="btn text-white" href="work.php">View</a>
						</div>
				</div>
			</div>
			<div class="col-sm-4 mt-5">
				<div class="card text-white bg-info mb-3" style="max-width:18rem;">
					<div class="card-header">No. of Technician</div>
						<div class="card-body">
						<h4 class="card-title"><?php echo $totaltech; ?></h4>
						<a class="btn text-white" href="technician.php">View</a>
						</div>
				</div>
			</div>
			</div>

		<!-- requester start fetch code -->
			<div class="mx-5 mt-5 text-center">
				<p class="bg-dark text-white p-2">List of Requesters</p>
				<!-- start php kae andr html code -->
				<?php
					$sql = "SELECT * FROM requesterlogin_tb";
					$result = $conn->query($sql);
					if($result->num_rows > 0)
					{
						echo '
							<table class="table">
							<thead>
								<tr>
									<th scope="col">Requester ID</th>
									<th scope="col">Name</th>
									<th scope="col">Email</th>
								</tr>
							</thead>
							<tbody>';
							
							// b tak uc mae data rhae ga yeh true rhae ga.
							while($row = $result->fetch_assoc())	{
							
							
							echo '<tr>';
							echo '<td>'.$row["r_login_id"].'</td>';	
							echo '<td>'.$row["r_name"].'</td>';	
							echo '<td>'.$row["r_email"].'</td>';
							echo '</tr>';		
							}
								echo '</tbody>
							
							
							
							</table>';
					}
					else{
						echo "Zero Result";
					}
				?>
			</div>
		<!-- requester end fetch code -->




		</div>
		<!-- end dashboard end 2st column -->





 <?php
	include('includes/footer.php');
 ?>
