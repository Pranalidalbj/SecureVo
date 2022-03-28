<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureVote</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1707px)" href="css/phone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>

    
<?php require 'partials/_nav.php' ?>
    <section id="home">
        <h1 class="h_primary">Welcome to SecureVote</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel at dignissimos expedita?</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
        <button class="btn" href="login.php" >Vote Now</button>
    </section>
    
    <section id="dc" class="defn-container">
        <!-- <h2 class="h-primary center">What is Online Voting Sytem</h2> -->
        <div id="defn">
            <div class="box">
                <h2 class="h-secondary center">SecureVote</h2><br />
                <img src="imgs/5.jpg" alt="">

                <p>SecureVote is online voting system which will help user to make vote without physically present.
                    SecureVote will have user login and registration, auto-generated user-id and password for candidate
                    and voter. </p>
            </div>

        </div>
    </section><br><br><br><br>
    <!-- <div class="container">
        <form action="noaction.php">
            <div class="form-group center"></div>
            <h3>Enter your details here</h3><br><br>
            Name: <input type="text" placeholder="Enter Name"><br /><br />
            Age: <input type="text" placeholder="Enter Age"><br /><br />
            DOB: <input type="text" placeholder="Enter DOB"><br /><br />
        </form>
    </div>
    <section id="client-section">
        <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="clients-items">
                <img src="imgs/top1.jpg" alt="Our Clients">
            </div>
        </div>
    </section> -->

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name" placeholder="Enter your Name"><br><br>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" placeholder="Enter your Email"><br><br>
                </div>
                <div class="form-group">
                    <label for="Pname">Phone Number :</label>
                    <input type="Pname" name="Pname" id="Pname" placeholder="Enter your Phone Number"><br><br>
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea name="message" id="message" cols="30" rows="10"
                        placeholder="Enter your Message"></textarea>
                </div>
                <button class="sbtn">Submit</button>
            </form>
        </div>
    </section>

    <?php require 'partials/_footer.php' ?>
</body>

</html>