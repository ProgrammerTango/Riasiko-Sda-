<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">



<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('imgs/d4.jpg');
}

.navbar {
  overflow: hidden;
  background-color: red;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.logout{
  float: right;
}
</style>
</head>
<body>
<div class="navbar">

<a href="\login\Minet\login.php">Home</a>

  <a href="#">Motor</a>
  <a href="#">Rates</a>
  <div class="dropdown">
    <button class="dropbtn">Health 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="\login\Minet\underwiters\minethealth.php">MINET HEALTH</a>
    <a href="uap.php">UAP Family</a>
    <a href="apa.php">APA JAMII PLUS</a>
    <a href="jubilee.php">Jubilee J-CARE</a>
    <a href="aar.php">AAR Family</a>
    <a href="#">CIC FAMILY</a>
    <a href="#">Britam Milele 1 Family</a>
    <a href="#">Britam Milele 1 Family</a>
    <a href="#">Britam Premier Family</a>
    <a href="#">Britam Advantage Family</a>
    </div>
  </div> 
  <div class="logout">
  <a href="\login\Minet\logout.php">Logout</a>

  </div>

</div>

</body>
      </nav>
      </html>