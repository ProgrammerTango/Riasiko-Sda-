<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dickson</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<b>
<section id="home" >
<div class="container">
<img src="assets/imgs/26302-" alt="">
<form action="string.php" method="post">
password <input type="password" name="password"> <br>
<input type="submit">

</form>
<br>
<span>Welcome</span>

<?php 
echo $_POST["password"]
?>
</div>
</section>
</b>

<!--ARRAYS-->

<?php 
$friends = array("dickson", "john", "100", "tango");



echo count($friends); $friends[3];

?>



</body>
</html>