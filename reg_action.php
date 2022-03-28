<?php

session_start();

$captcha = "" ;
include "dbconnect.php"; 
if(isset($_POST['submit'])) {
	if (isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
		  echo "Please check captcha too";
		  include ('registration.php');
                  
		  exit();
        }
        $secretKey = "6LeD3hEUAAAAADNeeaGRfKmABjn1gnsXxrpdTa2J";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
		  $error = "You are spammer !";
        }
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $name2 = mysqli_real_escape_string($con,$_POST['email']);
        $name3 = mysqli_real_escape_string($con,$_POST['pnum']);
        $pass = mysqli_real_escape_string($con,$_POST['password']);
        $cpass = mysqli_real_escape_string($con,$_POST['cpassword']);
        $que = 'SELECT email FROM loginusers WHERE email="'.$_POST['email'].'"';
        $sq = mysqli_query($con, $que);
        $exist = mysqli_num_rows($sq);
	
		if($exist==1){
		        $nam="<center><h4><font color='#FF0000'>The Email already used, pick another.</h4></center></font>";
		        unset($name);
		        include('registration.php');
		        exit();
		}

        $sql = mysqli_query($con, 'INSERT INTO users(name,email,pnum,password)
        VALUES("'.$_POST['name'].'","'.$_POST['email'].'","'.$_POST['pnum'].'","'.md5($_POST['password']).'")');
        if (!$sql) { 
                die (mysqli_error($con));
        }

        $sql2 = mysqli_query($con, 'INSERT INTO loginusers(email,password)
                VALUES("'.$_POST['email'].'","'.md5($_POST['password']).'")'); 
        if (!$sql2) { 
                die (mysqli_error($con));
                }
        else {
        echo "Successfully Registered!  <a href= 'login.php'>Click here to Login </a>";
        }
        
}
else {
        $error="<center><h4><font color='#FF0000'>Registration Failed Due To Error !</h4></center></font>";
        include "registration.php";
        }
?>