<?php
session_start();
include 'includes/conn.php';

if(isset($_POST['signin'])){
        $name = mysqli_real_escape_string($con, $_POST['firstname']);
        $name2 = mysqli_real_escape_string($con,$_POST['lastname']);
        $name3 = mysqli_real_escape_string($con,$_POST['username']);
        $pass = mysqli_real_escape_string($con,$_POST['password']);
		// $username = $_POST['username'];
		// $password = $_POST['password'];

		$que = 'SELECT username FROM adminlogin WHERE username="'.$_POST['username'].'"';
        $sq = mysqli_query($con, $que);
        $exist = mysqli_num_rows($sq);
	
		if($exist==1){
		        $nam="<center><h4><font color='#FF0000'>The username already used, pick another.</h4></center></font>";
		        unset($name);
		        include('register.php');
		        exit();
		}
		
        $sql = mysqli_query($con, 'INSERT INTO admin (firstname,lastname,username,password)
        VALUES("'.$_POST['firstname'].'","'.$_POST['lastname'].'","'.$_POST['username'].'","'.md5($_POST['password']).'")');
        if (!$sql) { 
                die (mysqli_error($con));
        }

        $sql2 = mysqli_query($con, 'INSERT INTO adminlogin(username,password)
                VALUES("'.$_POST['username'].'","'.md5($_POST['password']).'")'); 
        if (!$sql2) { 
                die (mysqli_error($con));
                }
        else {
        echo "Successfully Registered!  <a href= 'index.php'>Click here to Login </a>";
        }
}
else{
	$_SESSION['error'] = 'Input admin credentials first';
        include "resgister.php";
	}

	header('location: register.php');

?>