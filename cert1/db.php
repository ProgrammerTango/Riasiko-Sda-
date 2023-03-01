<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","testing");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if (isset($_POST['username'])) {
    $fname = stripslashes($_REQUEST['fname']);    // removes backslashes
    $password = mysqli_real_escape_string($con, $password);
    $query    = "SELECT * FROM `users` WHERE fname='$fname'
    AND password='" . md5($password) . "'";
$result = mysqli_query($con, $query) or die(mysqli_error());
$rows = mysqli_num_rows($result);
    }
?>