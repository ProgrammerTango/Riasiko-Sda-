<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <form action="junct.php" method="post"></form>
First name<input type="text" name="fistname" ><?php echo $fname?>
Email <input type="email" name="email" ><?php echo $email?>
Last name<input type="text" name="fistname" <?php echo $lname?>
<input type="submit" name="submit">

    </section>
</body>
</html>