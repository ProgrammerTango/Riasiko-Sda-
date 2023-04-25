<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Minet BMI initiative </title>
  <link rel="stylesheet" href="style.css">
  </head>

  <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="reg-input-field">
        <form method="post" action="#" >
          <div class="grid">
            <label>Username</label>
            <input type="text" class="form-control" name="user"  placeholder="Enter your Fullname" required />
          </div>
          <div class="grid">
            <label>Password</label>
            <input type="password" class="form-control" name="pass"  placeholder="Enter your email" required />
          </div> 
          <div class="grid">
            <input type="submit" name="submit" class=" submitBtn" /><br><br>
           <a href="index copy.php">Register</a>


    
          </div>
        </form>
      </div>
      </html>
      <?php
      session_start();
      include 'connection.php';
if(isset($_POST['submit'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $query=mysqli_query($db,"SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  $_SESSION["id"]=$row['user_id'];
if ($num_rows>0)
{
    ?>
    <script>
      alert('Successfully Log In');
      document.location='profile.php'
    </script>
    <?php
}
}
      ?>