<script src='https://www.google.com/recaptcha/api.js'></script>
<?php 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	echo "";
}
?>
<br>
<br>
<?php



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureVote</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" media="screen and (max-width: 1707px)" href="css/phone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
<div id="it" class="item">
<a href="index.php">Back</a>
</div>

<?php
               //  if($showAlert){
               //    echo " Success!!.Your account is now created ";
               //  }
                ?>
<div class="container">
       <div class="login-box">
       
    <!-- <section id="home">
        <h1 class="h_primary">Signup to SecureVote</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel at dignissimos expedita?</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
        <button class="btn">Vote Now</button>
    </section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
    <div class="col-md-6 login-right">
        <h1 class="center">Signup</h1><br><br>
        
             <form action="reg_action.php" method="post">
                <div class="form-group">
                   <label>Name</label>
                   <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                   <label>Email Address</label>
                   <input type="email" name="email" id="email" class="form-control" autocomplete="put your mail account" required>
                </div>
                <div class="form-group">
                   <label>Phone Number</label>
                   <input type="pnum" name="pnum" id="pnum" class="form-control" maxlength="10" required>
                </div>
                <div class="form-group">
                   <label>Password</label>
                   <input type="password" name="password" id="password" class="form-control" autocomplete="Create password for your account" minlength="6" required>
                </div>
                <div class="form-group">
                   <label>Confirm Password</label>
                   <input type="password" name="cpassword" id="cpassword" class="form-control" autocomplete="Create password for your account" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary"
                onclick="if(document.getElementById('pnum').value.length!=10) 
                           {
                              alert('Phone Number should have only 10 values.');
                              return false;                                               
                           }
                        if(document.getElementById('password').value != document.getElementById('cpassword').value) {
                           alert('Enter same password.....');
                           return false;
                        }">Register</button> 
                
                <br>
               <br>
                <br>
               <br>
               <div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
               <br>

             </form>
          </div><br><br><br><br><br><br><br><br><br><br>
          
       </div>
    </div>

    <script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("name","req","Please enter Full Name"); 
 frmvalidator.addValidation("name","maxlen=40");
 frmvalidator.addValidation("email","req","Please enter email"); 
 frmvalidator.addValidation("email","maxlen=50");
 frmvalidator.addValidation("pnum","req","Please enter Phone Number"); 
 frmvalidator.addValidation("pnum","maxlen=10","minlen=10","Phone number should be 10 character");
 frmvalidator.addValidation("password","req","Please enter password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
 frmvalidator.addValidation("cpassword","req","Please enter confirm password"); 
 frmvalidator.addValidation("cpassword","minlen=6","Enter the same password.");

</script>
    <!-- <section id="dc" class="defn-container"> -->
    <?php require 'partials/_footer.php' ?>
</body>

</html>