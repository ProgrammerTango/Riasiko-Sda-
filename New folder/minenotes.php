
                            <?php

//method of connecting php into the database 
//method 1



            require_once('config/connection.php');
            require_once('common/directory.php');
            require("Phpmailer/class.PHPMailer.php");
            
            
            @session_start();
            
            date_default_timezone_set("Africa/Nairobi");
            $time_out=date('Y/m/d H:i:s');
            $DateToday=date('Y/m/d');

            $aonline = './Aon Line/HealthcareFilesUploads/';

            $uploads_dir = $aonline;

            if(isset($_POST['registers'])){

                    $FirstName=mysqli_real_escape_string($dbc,$_POST['FirstName']);
                    $OtherNames=mysqli_real_escape_string($dbc,$_POST['OtherNames']);
                    $Surname=mysqli_real_escape_string($dbc,$_POST['Surname']);
                    $DependantType=mysqli_real_escape_string($dbc,$_POST['DependantType']);
                    $DOB=mysqli_real_escape_string($dbc,$_POST['DOB']);
                    $BirthCertificate=mysqli_real_escape_string($dbc,$_POST['BirthCertificate']);
                    $ProofofSchool=mysqli_real_escape_string($dbc,$_POST['ProofofSchool']);
                    $DisabilityCard=mysqli_real_escape_string($dbc,$_POST['DisabilityCard']);
                    $IDNO=mysqli_real_escape_string($dbc,$_POST['IDNO']);
                    $MARRIAGECERTIFICATE=mysqli_real_escape_string($dbc,$_POST['MARRIAGECERTIFICATE']);
                    $KPSNumber=mysqli_real_escape_string($dbc,$_POST['KPSNumber']);
                    $Phone_No=mysqli_real_escape_string($dbc,$_POST['Phone_No']);
                    $Disablex=mysqli_real_escape_string($dbc,$_POST['Disablex']);
                    $Gender=mysqli_real_escape_string($dbc,$_POST['Gender']);


                    //$UniqueID=mysqli_real_escape_string($dbc,$_POST['UniqueID']);
    
                    

                  {
                        $query="INSERT INTO tscdependants (Surname,FirstName,LastName,DOB,Disabled,Relationship,CellPhone,Gender) VALUES ('$Surname','$FirstName','$OtherNames','$DOB','$Disablex','$DependantType','$Phone_No', '$Gender')";
                        $query_run = mysqli_query($dbc,$query);
                        if($query_run){
                            $_SESSION['sytatus'] ='data submitted successful';

                               
                        }else{
                            $msg=' <div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong>Error!</strong> Please try again!
                               </div>'.mysqli_error($dbc);
                        }
                    }
                  
                  }



// method 2



                  ?>




  connectiion.php ......connecting to the database

  <?php
error_reporting(0);
$dbc=@mysqli_connect('localhost','root','','nps_kps') or die ('Connecting....');

//connect.php
$server	    = 'localhost';
$usernamess	= 'root';
$passwordss	= '';
$databasess	= 'nps_kps' ; 

//$dbc_accident=@mysqli_connect('localhost','PortalUser','Confirm2021','minet_surveys') or die ('Connecting');

$con = @mysqli_connect($server, $usernamess, $passwordss);

if(!$con)
{
 	exit('Connecting ....');
}
if(!mysqli_select_db($con, $databasess))
{
 	exit('Connecting ....');
}

?>






<?php
error_reporting(0);
$dbc=@mysqli_connect('localhost','root','','nps_kps') or die ('Connecting....');

//connect.php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "nps_kps";
		
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

		if ($conn->connect_error) {
            die('Could not connect to the database.');
        }

		$sql="INSERT INTO tscdependants (Surname,FirstName,LastName,DOB,Disabled,Relationship,CellPhone,Gender) 
		VALUES (?,?,?,?,?,?,?,?)"; 

		$stmt = mysqli_stmt_init($conn);

		if( ! mysqli_stmt_prepare($stmt, $sql)){

			die(mysqli_error($conn));
		}
		mysqli_stmt_bind_param($_stmt, "ssii",
		$Surname,
		$FirstName,
		$LastName,
		$DOB,
		$Disabled,
		$Relationship,
		$CellPhone,
		$Gender);

		mysqli_stmt_execute($stmt);
		echo "Record saved";


		


?>

