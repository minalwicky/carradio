<?php
	$vname="";
	$date="";
	$etype="";
    $email="";
    $image="";
	
if(isset($_POST['vname']) && isset($_POST['email'])){
    $vname=$_POST['vname'];
	$date=$_POST['yom'];
	$etype=$_POST['etype'];
    $email=$_POST['email'];
    $image=$_POST['img'];
} 


include('inc/dbConn.php');

if($conn){ 
	
$sql="INSERT INTO sellerdetails (vehicleName, date, engineType, email, image) VALUES ('$vname', '$date', '$etype', '$email', '$image')";


$result=mysqli_query($conn,$sql);

if($result){

?>

<script>
    alert("Successfully Inserted");
	window.location="sellerpage.php";
</script>

<?php
}}
?>