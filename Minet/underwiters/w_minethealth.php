<?php
  require 'C:\xampp\htdocs\login\Minet\includes\header.php';
  ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
 font-family: Arial, Helvetica, sans-serif;
  background-image: url('imgs/4.jpg');
  background-color:wheat;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}
h3{
  background-color: white;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown .menu {
  font-size: 26px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: black;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>


<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>


<?php 

$amount1='38896';
$amount2='43217';
$amount3='48019';
$amount4='52878';
$amount5='58232';
$amount6='64136';
$amount7='74145';
?>
<!--INTPATIENT PREMIUMS-->



<!--OUTPATIENT PREMIUMS-->
<?PHP
$op1=$amount1;
$op2=$amount2;
$op3=$amount3;
$op4=$amount4;
$op5=$amount5;
$op6=$amount6;
$op7=$amount7;


$tbp= $op1+$amount1  ;
$tbp2= $op2+$amount2 ;
$tbp3= $op3+$amount3 ;
$tbp4= $op4+$amount4 ;
$tbp5= $op5+$amount5 ;
$tbp6= $op6+$amount6 ;
$tbp7= $op7+$amount7 ;


$tps1=$tbp*45/100+40;
$tps2=$tbp2*45/100+40;
$tps3=$tbp3*45/100+40;
$tps4=$tbp4*45/100+40;
$tps5=$tbp5*45/100+40;
$tps6=$tbp6*45/100+40;
$tps7=$tbp7*45/100+40;

$tp1=$tbp+$tps1;
$tp2=$tbp2+$tps2;
$tp3=$tbp3+$tps3;
$tp4=$tbp4+$tps4;
$tp5=$tbp5+$tps5;
$tp6=$tbp6+$tps6;
$tp7=$tbp7+$tps7;
?>
<?php
$Maternity1='75000';
$Maternity2='100000';
$Maternity3='150000';
$Maternity4='200000';
$Maternity5='250000';
$Maternity6='250000';
$Maternity7='300000';
?>

<form action="">
 
  <div class="dropdown">
    <button class="menu">Select 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="wt_minethealth.php">Without Maternity</a>
    <a href="w_minethealth.php">With Maternity</a>
    
    </div>
  </div> 
</div>
<table style="width:100%">
  <tr>
    <th></th> 
    <th>500,000 p.f</th>
    <th>750,000 p.f</th> 
    <th>1,000,000 p.f</th>
    <th>2,000,000 p.f</th>
    <th>3,000,000 p.f</th>
    <th>5,000,000 p.f</th>
    <th>10,000,000 p.f</th>
  </tr>
  <tr>
    <td>INPATIENT ONLY PREM </td>
    <td><?php echo $amount1?></td>
    <td><?php echo $amount2?></td>
    <td><?php echo $amount3?></td>
    <td><?php echo $amount4?></td>
    <td><?php echo $amount5?></td>
    <td><?php echo $amount6?></td>
    <td><?php echo $amount7?></td>
  </tr>

  <h3>MINET HEALTH </h3> 
  <h3>INPATIENT ONLY PREMIUMS ( With Maternity )</h3> 




  <table style="width:100%">
  <tr>
    <td></td>   
    <th>75000</th>
    <th>100000</th> 
    <th>150000</th>
    <th>200000</th>
    <th>250000</th>
    <th>250000</th>
    <th>300000 </th>
  </tr>
  <tr>
  <td>OUTPATIENT PREMI</td>
    <td><?php echo $op1 ?></td>
    <td><?php echo $op2?></td>
    <td><?php echo $op3?></td>
    <td><?php echo $op4?></td>
    <td><?php echo $op5?></td>
    <td><?php echo $op6?></td>
    <td><?php echo $op7?></td>
  </tr>
  
 <h3>OUTPATIENT PREMIUMS</h3> 
  <table style="width:100%">
  <tr>
    <th></th>
    <th>500,000 p.f</th>
    <th>750,000 p.f</th> 
    <th>1,000,000 p.f</th>
    <th>2,000,000 p.f</th>
    <th>3,000,000 p.f</th>
    <th>5,000,000 p.f</th>
    <th>10,000,000 p.f</th>
  </tr>
  <tr>
      <tr>
    <th>Dental limit</th>
    <th><?php echo $Maternity1 *0.1?></th>
    <th><?php echo $Maternity2 *0.1?></th> 
    <th><?php echo $Maternity3 *0.1?></th>
    <th><?php echo $Maternity4 *0.1?></th>
    <th><?php echo $Maternity5 *0.1?></th>
    <th><?php echo $Maternity6 *0.1?></th>
    <th><?php echo $Maternity7 *0.1 ?></th>
  
  <tr>
     </tr>
     <tr>
    <th>Outpatient Dental </th>
    <th><?php echo '-' ?></th>
    <th><?php echo '-' ?></th> 
    <th><?php echo '-' ?></th>
    <th><?php echo '-' ?></th>
    <th><?php echo '-' ?></th>
    <th><?php echo '-' ?></th>
    <th><?php echo '-' ?></th>
     </tr>
     <tr>
    <th>Optical Limit</th>
    <th><?php echo $Maternity1 *0.1?></th>
    <th><?php echo $Maternity2 *0.1?></th> 
    <th><?php echo $Maternity3 *0.1?></th>
    <th><?php echo $Maternity4 *0.1?></th>
    <th><?php echo $Maternity5 *0.1?></th>
    <th><?php echo $Maternity6 *0.1?></th>
    <th><?php echo $Maternity7 *0.1 ?></th>
     </tr>
     <tr>
    <th>Covid Limit of Cover</th>
    <th>300,000</th>
    <th>300,000</th> 
    <th>5000,000</th>
    <th>1,000,000</th>
    <th>1,000,000</th>
    <th>1,000,000</th>
    <th>1,000,000</th>
     </tr>
     <tr>
    <th>Covid Premium</th>
    <th>0</th>
    <th>0</th> 
    <th>0</th>
    <th>0</th>
    <th>0</th>
    <th>0</th>
    <th>0</th>
     </tr>
     <h3>Auxillary Subtotals</h3>
 


  <table style="width:100%">
  <tr>
    <th>Total Basic Prem</th>
    <th><?php  echo $tbp?></th> 
    <th><?php  echo $tbp2?></th>
    <th><?php  echo $tbp3?></th>
    <th><?php  echo $tbp4?></th>
    <th><?php  echo $tbp5?></th>
    <th><?php  echo $tbp6?></th>
    <th><?php  echo $tbp7?></th>
  </tr>
  <tr>
    <th>TL,PHC Stamp Du</th>
    <th><?php echo $tps1?></th> 
    <th><?php echo $tps2?></th> 
    <th><?php echo $tps3?></th> 
    <th><?php echo $tps4?></th> 
    <th><?php echo $tps5?></th> 
    <th><?php echo $tps6?></th> 
    <th><?php echo $tps7?></th> 

  </tr>
  <tr>
    <th>TOTAL PREMIUM</th>
    <th><?php echo$tp1?></th> 
    <th><?php echo$tp2?></th> 
    <th><?php echo$tp3?></th> 
    <th><?php echo$tp4?></th> 
    <th><?php echo$tp5?></th> 
    <th><?php echo$tp6?></th> 
    <th><?php echo$tp7?></th> 

  </tr>
  <tr>
  <h3>Total Basic Premium</h3> 


</table>
</form>
<br><br><br>
<?php
  include ('C:\xampp\htdocs\login\Minet\includes\footer.php')
  ?>
<a href="\login\Minet\index.php">Back</a>
</body>
</html>

