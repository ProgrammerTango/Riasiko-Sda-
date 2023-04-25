<?php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 session_start();  

 if(isset($_POST["register"]))  
 {   if(empty($_POST['fullname']))
     {
          echo '<script> alert("Full names Please")</script>';
     }
      if(empty($_POST["username"]) )  
      {  
           echo '<script>alert("Username required")</script>';  
      }  
           

      else  
      {   
           $fullname=mysqli_real_escape_string($connect, $_POST["fullname"]);
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $confirm_password = mysqli_real_escape_string($connect, $_POST["confirm_password"]);  
           $password = md5($password);  
           $query = "INSERT INTO users (username, full_name) VALUES('$username' ,'$fullname')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration successful")</script>';  
           }  
           
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) )  
      {  
           echo '<script>alert("Username required")</script>';  
      } 
    
     
      else  
      {  
           $username= mysqli_real_escape_string($connect, $_POST["username"]);  
           $query = "SELECT * FROM users WHERE username = '$username' ";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['username'] = $username;  
                header("location:home.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>DICKSON SIGNIN AND REGISTER FORM</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link rel="stylesheet" href="style/style.css">
      </head>  

      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Minet</h3>  
                          <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center">Login</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
               
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <label>Don't have an account?<a href="index.php">  Create here</a></label>
                     <br>
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">Register</h3>  
                <br />  
                <form method="post">  
                    <label >Full Names </label>
                    <input type="text"name="fullname" class="form-control" />
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
               
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <label>Already have an account?<a href="index.php?action=login">   Login here</a></label>
                </form>
  
                <?php  
                }  
                ?>  
           </div>  
           
      </body>  
 </html>  
