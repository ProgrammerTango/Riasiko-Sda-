<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Minet BMI initiative</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <?php
  include 'connection.php';
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($db,"SELECT * FROM users where user_id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>

  
<div class="profile-input-field">
        <form method="post" action="#" >
          <div class="form-group">
            <label>Fullname</label>
            <input type="text" class="form-control" name="fname" placeholder="Update your Fullname" value="<?php echo $row['fname']; ?>" required />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email"  placeholder="Update your email" required value="<?php echo $row['email']; ?>" />
          </div>
          <div class="form-group">
            <label>2023 Tree Planting Goals (Target Number)</label>
            <input type="number" class="form-control" name="target"  placeholder="Enter your New target" value="<?php echo $row['target']; ?>">
          </div>
          <div class="form-group">
            <label>Total trees planted</label>
            <input type="text" class="form-control" name="number"  required placeholder="Trees planted today" value="<?php echo $row['number']; ?>"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" ><br><br>
            <center>
             <a href="logout.php">Log out</a>
           </center>
          </div>
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $target = $_POST['target'];
        $number = $_POST['number'];
      $query = "UPDATE users SET fname = '$fname',
                      email = '$email', target = $target, number = '$number'
                      WHERE user_id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }               
?>  