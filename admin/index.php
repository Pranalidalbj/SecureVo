

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="index.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>

<?php
// if(!isset($_SESSION)) {
// 	session_start();
// }
// if(isset($_SESSION['admin'])){
//     header('location:home.php');
// }
?>
<?php
//  include 'includes/header.php';
  ?>
<!-- <body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>Voting System</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Login in to the system</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Log In</button>
        		</div>
      		</div>
    	</form>
  	</div> -->
  	<?php
  		// if(isset($_SESSION['error'])){
  		// 	echo "
  		// 		<div class='callout callout-danger text-center mt20'>
		// 	  		<p>".$_SESSION['error']."</p> 
		// 	  	</div>
  		// 	";
  		// 	unset($_SESSION['error']);
  		// }
  	?>
<!-- </div> -->
	
<?php
//  include 'includes/scripts.php' 
 ?>
<!-- </body> -->
