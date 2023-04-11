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

    
<form action="#" method="post">
   Num1 <input type="number" name="Num1" step="0.1"br>
       op     <input type="op" name="op"><br>
   num2 <input type="number" name="num2" step="0.1"><br>
<input type="submit">



    </section>
    <?php
    $num1 =$_POST["Num1"];
    $num2 =$_POST["num2"];
    $OP=$_POST["op"];
    

    if($OP=="+"){
echo $num1+$num2;
    }elseif ($OP== "-"){
        echo $num1-$num2;
    }elseif($OP=="/"){
        echo $num1/$num2;
    
    }elseif ($OP=="*") {
        echo $num1*$num2;
    } else{
        echo "invalid operator";
    }


    ?>
    </form>
<form action="" method="post">

what grade did you get <input type="text" name="grade">
<input type="submit">
<?php
$grade= $_POST["grade"];
echo $grade;

?>
</form>
</body>
</html>