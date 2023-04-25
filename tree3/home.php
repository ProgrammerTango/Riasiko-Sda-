<?php
include 'C:\xampp\htdocs\login\s1\entry.php';
?>
  <link rel="stylesheet" href="\login\s1\assets\css\style.css">

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <a href="index.php" class="cd-logo"><img src="https://image.pitchbook.com/4FJQlHjnVgYvWIBE3U1DccJV2Xp1646814809578_200x200" alt="Logo"></a>
    </div>
    
    <div class="cd-search js-cd-search">
      <form>
      </form>
    </div>
    
    <button class="reset cd-nav-trigger js-cd-nav-trigger"ggle menu"><span></span></button>  
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><?php  
                echo '<h1>Admin panel - welcome '.$_SESSION["username"].'</h1>';  
                ?> </a></li>
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0"> 
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxNovPoZ6Zg6_xsh9DQNw2bfEbIuf5qvh9F3Tgu8rkWaz3MMv5yGJNYvhU-t__hVRjS_k&usqp=CAU" alt="avatar">
          <span>Account</span>
        </a>
    
        
        <ul class="cd-nav__sub-list">
        <li class="cd-nav__sub-item"><a href="#0"></a></li>
        <li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>
        <li class="cd-nav__sub-item"><a href="logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Minet</span></li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">
          <a href="#0">Your	Email</a>
          <a href="#">2023 Tree Planting Goals (Target Number)</a>
          <a href="#">No of Trees Planted</a>
    

        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">
          <a href="#0">Notifications<span class="cd-count">3</span></a>
         
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <a href="#0">Upprove comments</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="#0">All Comments</a></li>
            <li class="cd-side__sub-item"><a href="#0">Edit Comment</a></li>
            <li class="cd-side__sub-item"><a href="#0">Delete Comment</a></li>
          </ul>
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Secondary</span></li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks js-cd-item--has-children">
          <a href="">View Results</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="\login\s1\cert3\index.php">Certificate</a></li>
            <li class="cd-side__sub-item"><a href="#0">print Certificate</a></li>
            <li class="cd-side__sub-item"><a href="#0">Report</a></li>
          </ul>
        </li>

   
    

    </nav>
  
    <div class="cd-content-wrapper">
      <div class="text-component text-center">
       
      <?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "testing";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$qry = "select * from users limit 3";
$rs = mysqli_query($conn,$qry);
$getRow = mysqli_fetch_row($rs);



$query = "SELECT username,password,full_name FROM users WHERE username =".$_SESSION["username"] ;


?>

       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px"><b><?php echo "".$_SESSION["username"]?></b></span><br/><br/>
       <span style="font-size:25px"><i>HAS PLANTED</i></span> <br/><br/>
       <span style="font-size:30px"><?php echo "".$getRow ['1'] ?></span> <br/><br/>
       <span style="font-size:20px">with score of <b><?php echo"" .$getRow['0']?>%</b></span> <br/><br/><br/><br/>
       <span style="font-size:25px"><i>dated</i></span><br><?php // Prints the day, date, month, year, time, AM or PM 
       echo date("l jS \of F Y h:i:s A") . "<br>";?>
       <span style="font-size:30px"></span>
</div>
</div>

      </div>
    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
</body>
