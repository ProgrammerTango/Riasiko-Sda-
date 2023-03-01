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
                header("location:index1.php");  
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
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <label>Don't have an account?<a href="index.php">  Create here</a></label>
                     <br>
                     <label><a href="#">Forgot password</a> </label>
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
                     <label>Enter Password</label>  
                     <input type="password" name="password"  id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                     class="form-control" />  
                     <input type="checkbox" onclick="myFunction()">Show Password
                     <br />  
                     <br>
                     <label>Confirm Password</label>  
                     <input type="password" onclick="myFunction()" name="confirm_password"  id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                     class="form-control" />
                    </br>	
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <label>Already have an account?<a href="index.php?action=login">   Login here</a></label>
                </form>
                <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
  <p id="pwd match" class="invalid">Password <b>match</b></p>
</div>  
                <?php  
                }  
                ?>  
           </div>  
           <script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
      </body>  
 </html>  
