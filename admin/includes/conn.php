<?php

    $con = new mysqli('localhost', 'root', '', 'typroj');

    if($con-> connect_error){
        die("Connection failed: ". $con->connect_error);
    }

?>
<?php 
// $con = mysqli_connect("localhost","root","","typroj") or die ("error" . mysqli_error($con));
?>