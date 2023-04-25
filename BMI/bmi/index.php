<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>DICKSON LOGIN FORM</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="reg-input-field">
        <form method="post" action="#" >
          <h1>Minet BMI initiative</h1>
          <div class="grid">
            <label>Full Name</label>
            <input type="text" class="form-control" name="fname" placeholder="Enter your Fullname" required />
          </div>
          <div class="grid">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email" required />
          </div> 
          <div class="grid">
            <label>Division</label>
            <input type="text" class="form-control" name="division" placeholder="Enter your Division" required />
          </div>
          <div class="grid">
            <label>Target</label>
            <input type="text" class="form-control" name="target" placeholder="Tree Planting Goals(Target Number)" required  />
          </div>
          <div class="grid">
            <label>Number Planted</label>
            <input type="text" class="form-control" name="number"  required placeholder="No of Trees Planted"></textarea>
          </div>
          <div class="grid">
            <label>Username</label>
            <input type="text" class="form-control" name="user" placeholder="Enter your Username">
          </div><div class="grid">
            <label>Password</label>
            <input type="Password" class="form-control" name="pass"  required  placeholder="Enter your Password">
          </div>
          <div class="grid">
            <input type="submit" name="submit" class="submitBtn" /><br><br>
             <center>
              <div class="submitBtn">
              <a href="\login\BMI\login.php">LogIn</a>

              </div>
           </center>
          </div>
        </form>
      </div>
  </body>
</body>
</html>
<?php
      include 'connection.php';
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$target = $_POST['target'];
$number = $_POST['number'];
$division = $_POST['division'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$trn_date = date("Y-m-d H:i:s");


  $query = "INSERT INTO users
                (username, password, fname, target,number,division, email, trn_date)
                VALUES ('".$user."','".$pass."','".$fname."','".$target."','".$number."','".$division."','".$email."','".$trn_date."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
                ?>
                <script type="text/javascript">
            alert("Successfull Added.");
            window.location = "index.php";
        </script>
                <?php
}
      ?>