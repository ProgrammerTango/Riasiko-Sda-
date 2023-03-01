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



$id = $_GET['id'];
$query= mysqli_query($mysqli, "SELECT * FROM student WHERE id=$id");
while($row = mysqli_fetch_array($query))
{
$name = $row['name'];
$id = $row['id'];
}
?>
<?php echo '<h2>'.$name.'<h2><br>'; ?> 
<?php echo '<h2>'.$id.'<h2><br>'; ?> 