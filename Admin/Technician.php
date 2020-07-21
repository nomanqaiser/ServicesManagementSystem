<?php
define('TITLE','Technician');
define('PAGE','technician');
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

<!-- pehla table bnana hai daat ko rertrieve krnae kae lia -->
<div class="col-sm-9 col-md-10 mt-5 text-center">
    <p class="bg-dark text-white p-2">List of Technicians</p>
    <?php
        $sql = "SELECT * FROM technician_tb";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">Emp ID</th>';
            echo '<th scope="col">Name</th>';
            echo '<th scope="col">City</th>';
            echo '<th scope="col">Mobile</th>';
            echo '<th scope="col">Email</th>';
            echo '<th scope="col">Action</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while($row = $result->fetch_assoc()){
                echo '<tr>';
                echo '<td>'.$row["empid"].'</td>';
                echo '<td>'.$row["empName"].'</td>';
                echo '<td>'.$row["empCity"].'</td>';
                echo '<td>'.$row["empMobile"].'</td>';
                echo '<td>'.$row["empEmail"].'</td>';
                echo '<td>';
                // edit button icon
                echo '<form action="editemp.php" method="POST" class="d-inline">';
                // ab view kae button pae click hotae hi, o be id hai wo pass hona chyie, 
                // khan per edit wale page per
                // hiddent input ki zrorat prae gi tak jo ic ki r_login_id hum uc page mae baej skae
                // ab kia hua kae jo id hai upr jo value bnae ga hidden field ka wo pass ho ga editpage pae
                // uc button ake submit honae per.
                echo '<input type="hidden" name="id" value='.$row["empid"].'>
                <button class="btn btn-info mr-3" type="submit" 
                name="edit" value="Edit"><i class="fas fa-pen"></i></button>';
                echo '</form>';
                // delete button icon
                echo '<form action="" method="POST" class="d-inline">';
                echo '<input type="hidden" name="id" value='.$row["empid"].'>
                <button class="btn btn-secondary mr-3" type="submit" 
                name="delete" value="Delete"><i class="fas fa-trash-alt"></i></button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } 
        else{
            echo 'Zero Results';
        }
        
        ?>
</div>
<?php
// delete query
if(isset($_REQUEST['delete']))
{
$sql = "DELETE FROM technician_tb WHERE empid = {$_REQUEST['id']}";
if($conn->query($sql) == TRUE)
{
    echo '<meta http-equiv="refresh" content=0";URL=?deleted" />';
}
else{
    echo 'Unable to delete'; 
}
}
?>


<!-- footer -->
</div><!-- End Row -->
<!-- + button banana hai user new add kae lia -->
    <!-- + button banana hai user new add kae lia -->
<div class="float-right"><a href="insertemp.php" class="btn btn-danger">
<i class="fas fa-plus fa-2x"></i></a></div>
</div><!-- End container -->
	



<!-- javascript start -->

<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>