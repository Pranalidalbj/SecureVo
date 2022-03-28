<?php ; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureVote</title>
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen and (max-width: 1707px)" href="css/phone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>


    <div class="container">
       <div class="login-box">
       <div class="row">
          <div class="col-md-6 login-left">
             <h2>Login Here</h2>
             <form action="login_action.php" method="POST">
                <div class="form-group">
                   <label>Email Address</label>
                   <input type="email" name="email" id="email" class="form-control" autocomplete="put your mail account" required>
                </div>
                
                <div class="form-group">
                   <label>Password</label>
                   <input type="password" name="password" id="password" class="form-control" autocomplete="Create password for your account" required>
                </div>
             
                <button type="submit" name="login" class="btn btn-primary">Login</button> 
                

             </form>
          </div>
          <!-- <div class="col-md-6 login-right">
             <h2>Register Here</h2>
             
             <form action="login.php" method="post">
                <div class="form-group">
                   <label>Name</label>
                   <input type="text" name="user" id="user" class="form-control" required>
                </div>
                <div class="form-group">
                   <label>Email Address</label>
                   <input type="email" name="email" id="email" class="form-control" autocomplete="put your mail accout" required>
                </div>
                <div class="form-group">
                   <label>Phone Number</label>
                   <input type="number" name="number" id="number" class="form-control" required>
                </div>
                <div class="form-group">
                   <label>Password</label>
                   <input type="password" name="password" id="password" class="form-control" autocomplete="Create password for your account" required>
                </div>
                <div class="form-group">
                   <label>Confirm Password</label>
                   <input type="password" name="cpassword" id="cpassword" class="form-control" autocomplete="Create password for your account" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button> 
                
             </form>
          </div> -->
       </div>
       </div>
    </div><br><br><br><br><br><br><br><br><br><br>


    <!-- <section id="dc" class="defn-container"> -->
   <script type="text/javascript" > 
   var frmvalidator = new Validator("myform");
   frmvalidator.addValidation("email" , "req" , "Please Enter email");
   frmvalidator.addValidation("email", "maxlen=50");
   frmvalidator.addValidation("password", "req" , "Please Enter Password");
   </script>

   <?php require 'partials/_footer.php' ?>
</body>
</html>