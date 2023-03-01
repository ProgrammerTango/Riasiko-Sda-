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
       if (empty($_POST["password"]) ){ 
          echo '<script>alert("password required")</script>';  
     }
     if ($_POST["password"] !== $_POST["confirm_password"]) {
          echo '<script>alert("Passwords must be the same")</script>';
     }     

      else  
      {   
          $fullname=mysqli_real_escape_string($connect, $_POST["fullname"]);
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $confirm_password = mysqli_real_escape_string($connect, $_POST["confirm_password"]);  
           $password = md5($password);  
           $query = "INSERT INTO users (username, password, full_name) VALUES('$username', '$password' ,'$fullname')";  
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
      if(empty($_POST["password"])){
      echo '<script>alert"password required"</script>';
      }
     
      else  
      {  
           $username= mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['username'] = $username;  
                header("location:index.php");  
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
                
                <h3 align="center">Admin login</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                </form>  
               
      </body>  
 </html>  
