<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "elearning";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$qry = "select * from users limit 3";
$rs = mysqli_query($conn,$qry);
$getRow = mysqli_fetch_row($rs);



  

?>


<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878; background-color:bisque   ">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px"><b><?php echo "".$getRow['1']?></b></span><br/><br/>
       <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
       <span style="font-size:30px"><?php echo "".$getRow ['2'] ?></span> <br/><br/>
       <span style="font-size:20px">with score of <b><?php echo"" .$getRow['0']?>%</b></span> <br/><br/><br/><br/>
       <span style="font-size:25px"><i>dated</i></span><br><?php // Prints the day, date, month, year, time, AM or PM 
       echo date("l jS \of F Y h:i:s A") . "<br>";?>
       <span style="font-size:30px"></span>
</div>
</div>
