<?php
define('TITLE','Success');
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
// khch data ase name or email success ake tor per ake page mae dikhana hai jase uc ki receipt useer ko mlae wo khsh ho jae
$sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
// kuekae ake hi result ayae ga, or id bi ake ho gi or unique ho gi
if($result->num_rows == 1)
{
    $row = $result->fetch_assoc();
    echo "<div class='ml-5 mt-5'>
        <table class='table'>
            <tbody>
                <tr>
                    <th>Request ID </th>
                    <td>".$row['request_id']."</td>   
                </tr>
                <tr>
                    <th>Name</th>
                    <td>".$row['requester_name']."</td>   
                </tr>
                <tr>
                    <th>Email ID </th>
                    <td>".$row['requester_email']."</td>   
                </tr>
                <tr>
                    <th>Request Info </th>
                    <td>".$row['request_info']."</td>   
                </tr>
                <tr>
                    <th>Request Description</th>
                    <td>".$row['request_desc']."</td>   
                </tr>
                <tr>
                    <td><form class='d-print-none'><input class='btn
                     btn-danger' type='submit' value='Print' 
                     onClick='window.print()'></form></td>  
                </tr>

            </tbody>
            
                    
        </table>
    </div>
    ";
}
else
{
    echo "Failed";
}
?>





<?php
		include('includes/footer.php');
?>