<?php

include('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  top: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>
</head>


<body>


<video autoplay muted loop id="myVideo">
  <source src="v2.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
  
<?php
include('includes/header.php');
      include('includes/sidebar.php');
    
      ?>
      
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
  <p>Minet is a trusted pan-African advisor that meets the uncertainties of tomorrow by delivering risk and human capital solutions today.</p>
  <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
  <?php
  include ('includes/footer.php')
  ?>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>




        <!--NAVBUTTONS-->
  <!--
 
    <section id="home"> <DIv class="container">
    
      </DIv>
<H1>HEALTH</H1>
<H2>MORTAL</H2>
<H2>HEALTH</H2>
    </section>
    <br>
    <br>

      <!----brand-->
<!--
      <section id="brand" class="container">
        <div class="row">
          
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="https://www.minet.com/wp-content/uploads/2020/03/KENYA.jpg">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="https://www.dhahabu.co.ke/wp-content/uploads/2018/10/minet.jpg">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfaAY4i3g2IZj_IdYL2GfFCS460_wLI-OQTQ&usqp=CAU">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="https://pbs.twimg.com/media/FNTMcNYUUAAjMN8?format=jpg&name=small">

        </div>

      </section>
      
-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</body>
</html>