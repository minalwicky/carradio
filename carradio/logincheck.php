<?php
session_start();
 
$email="";
$pass="";

if(isset($_POST['email']) && isset($_POST['psw'])){
	$email=$_POST['email'];
	$pass=$_POST['psw'];
	
	include('inc/dbConn.php');
	
	$sql="SELECT * FROM users WHERE email='$email' AND password='$pass'";
	
	$result=mysqli_query($conn,$sql);
	$no=mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
    
	if($no>0){
		
        $_SESSION['uid']=$row['uid'];
		$_SESSION['uname']=$row['firstName'];
        $_SESSION['role']=$row['accountType'];	
		
        if($row['accountType'] == "seller"){
            header('location:sellerpage.php');
        } elseif ($row['accountType'] == "buyer"){
            header('location:buyerpage.php');
        } else {
            header('location:home.html');
        }
		
	}else{
		?>
        
        <script>
			alert("Invalid Login");
			window.location="home.html";
		</script>
             
<?php
}
mysqli_close($conn);
}

?>