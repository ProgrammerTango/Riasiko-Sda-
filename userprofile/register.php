<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Minet BMI initiative</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head>
  <h1>Minet BMI initiative</h1>
  <body>
  <div class="reg-input-field">
        <h3>Enter your details below</h3>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your Fullname" required />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" style="width:20em;" placeholder="Enter your email" required />
          </div> 
          <div class="form-group">
            <label>Division</label>
            <input type="text" class="form-control" name="division" style="width:20em;" placeholder="Enter your Division" required />
          </div>
          <div class="form-group">
            <label>Target</label>
            <input type="text" class="form-control" name="target" style="width:20em;" placeholder="Tree Planting Goals(Target Number)" required  />
          </div>
          <div class="form-group">
            <label>Number Planted</label>
            <input type="text" class="form-control" name="number" style="width:20em;" required placeholder="No of Trees Planted"></textarea>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="user" style="width:20em;" placeholder="Enter your Username">
          </div><div class="form-group">
            <label>Password</label>
            <input type="Password" class="form-control" name="pass" style="width:20em;" required  placeholder="Enter your Password">
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" /><br><br>
             <center>
             <a href="index.php">LogIn</a>
           </center>
          </div>
        </form>
      </div>
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