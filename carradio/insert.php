<?php
	$fname="";
    $lname="";
	$pass="";
	$email="";
    $acc="";

	
if(isset($_POST['email']) && isset($_POST['accounttype']) && isset($_POST['psw'])){
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
	$pass=$_POST['psw'];
	$email=$_POST['email'];
    $acc=$_POST['accounttype'];
} 

include('inc/dbConn.php');

if($conn){
	
$sql="INSERT INTO users (firstName, lastName, email, accountType, password) VALUES ('$fname', '$lname', '$email', '$acc', '$pass')";

$result=mysqli_query($conn,$sql);

if($result){

?>

<script>
    alert("Login Success");
	window.location="index.html";
</script>

<?php
}}
?>