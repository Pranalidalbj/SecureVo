<?php
session_start();
include "dbconnect.php"; 
if(isset($_POST['login'])) {
$email = $_POST["email"];
$password = $_POST["password"];
$email = addslashes($email);
$password = addslashes($password);
$email = mysqli_real_escape_string($con,$email);
$password = mysqli_real_escape_string($con,$password);

$sql = mysqli_query($con, 'SELECT * FROM loginusers WHERE email="'.$_POST['email'].'"  AND password="'.md5($_POST['password']).'" AND status="ACTIVE" ' );
if (mysqli_num_rows($sql) >0) {
	$member =  mysqli_fetch_assoc($sql);
	$_SESSION['SESS_NAME'] = $member['email'];
	$_SESSION['SESS_RANK'] = $member['rank'];
	
	if($member['rank']=='administrator'){
			header("location: admin.php");
			}
			else if($member['rank']=='voter'){
			header("location: voter.php");
			}
}
else {
	$error = "<center><h4><font color='#FF0000'>Incorrect email or Password</h4></center></font>";
	include "login.php";
}
}
else {
	$error = "<center><h4><font color='#FF0000'>Invalid email or Password</h4></center></font>";
	include "login.php";
}
?>

<?php
// session_start();
// 	include 'includes/conn.php';

// 	if(isset($_POST['login'])){
// 		$username = $_POST['username'];
// 		$password = $_POST['password'];

// 		$sql = "SELECT * FROM admin WHERE username = '$username'";
// 		$query = $conn->query($sql);

// 		if($query->num_rows < 1){
// 			$_SESSION['error'] = 'Cannot find account with the username';
// 		}
// 		else{
// 			$row = $query->fetch_assoc();
// 			if(password_verify($password, $row['password'])){
// 				$_SESSION['admin'] = $row['id'];
// 			}
// 			else{
// 				$_SESSION['error'] = 'Incorrect password';
// 			}
// 		}
		
// 	}
// 	else{
// 		$_SESSION['error'] = 'Input admin credentials first';
// 	}

// 	header('location: index.php');

?>