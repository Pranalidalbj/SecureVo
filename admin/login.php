




<?php
// if(!isset($_SESSION)) {
// 	session_start();
// 	}
// if (isset($_SESSION['SESS_NAME'])!="") {
// 	header("Location: home.php");
// }
// 	include 'includes/conn.php';

	// if(isset($_POST['login'])){
	// 	$username = $_POST['username'];
	// 	$password = $_POST['password'];

	// 	$sql = "SELECT * FROM admin WHERE username = '$username'";
	// 	$query = $con->query($sql);

	// 	if($query->num_rows < 1){
	// 		$_SESSION['error'] = 'Cannot find account with the username';
	// 	}
	// 	else{
	// 		$row = $query->fetch_assoc();
	// 		if(password_verify($password, $row['password'])){
	// 			$_SESSION['admin'] = $row['id'];
	// 		}
	// 		else{
	// 			$_SESSION['error'] = 'Incorrect password';
	// 		}
	// 	}
		
	// }
	// else{
	// 	$_SESSION['error'] = 'Input admin credentials first';
	// }

	// header('location: index.php');


// if(isset($_POST['login'])) {
// $username = $_POST["username"];
// $password = $_POST["password"];
// $username = addslashes($username);
// $password = addslashes($password);
// $username = mysqli_real_escape_string($con,$username);
// $password = mysqli_real_escape_string($con,$password);

// $sql = mysqli_query($con, 'SELECT * FROM adminlogin WHERE username="'.$_POST['username'].'"  AND password="'.md5($_POST['password']).'" ' );

// if (mysqli_num_rows($sql) >0) {
// 	$member =  mysqli_fetch_assoc($sql);
// 	$_SESSION['SESS_NAME'] = $member['username'];
	
	
// 	if($member["username"]==$_POST["username"]){
// 			header("location: home.php");
// 			}
			
// }
// else {
// 	$error = "<center><h4><font color='#FF0000'>Incorrect email or Password</h4></center></font>";
// 	include "index.php";
// }
// }
// else {
// 	$error = "<center><h4><font color='#FF0000'>Invalid email or Password</h4></center></font>";
// 	include "index.php";
// }

?>