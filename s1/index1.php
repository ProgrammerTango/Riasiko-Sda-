<?php
include 'entry.php';
?>
  <link rel="stylesheet" href="assets/css/style.css">

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <a href="#0" class="cd-logo"><img src="https://image.pitchbook.com/4FJQlHjnVgYvWIBE3U1DccJV2Xp1646814809578_200x200" alt="Logo"></a>
    </div>
    
    <div class="cd-search js-cd-search">
      <form>
      </form>
    </div>
    
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>  
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><?php  
                echo '<h1>Welcome - '.$_SESSION["username"].'</h1>';  
                echo '<label><a href="logout.php">Logout</a></label>';  
                ?> </a></li>
      <li class="cd-nav__item"><a href="#0">Motor</a></li>
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0"> 
          <img src="assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        
        <ul class="cd-nav__sub-list">
        <li class="cd-nav__sub-item"><a href="#0">My Account</a></li>
        <li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>
        <li class="cd-nav__sub-item"><a href="\login\s1\logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Minet</span></li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">
          <a href="#0">Health</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="#0">All Data</a></li>
            <li class="cd-side__sub-item"><a href="#0">Category 1</a></li>
            <li class="cd-side__sub-item"><a href="#0">Category 2</a></li>
            <li class="cd-side__sub-item"><a href="#0">All Data</a></li>
            <li class="cd-side__sub-item"><a href="#0">Category 1</a></li>
            <li class="cd-side__sub-item"><a href="#0">Category 2</a></li>
          </ul>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">
          <a href="#0">Notifications<span class="cd-count">3</span></a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a aria-current="page" href="#0">All Notifications</a></li>
            <li class="cd-side__sub-item"><a href="\login\s1\user\exams.php">Exams</a></li>
            <li class="cd-side__sub-item"><a href="#0">Other</a></li>
          </ul>
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <a href="#0">Comments</a>
          
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
          <a href="">Results</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="\login\s1\cert3\index.php">Certificate</a></li>
            <li class="cd-side__sub-item"><a href="#0">print Certificate</a></li>
            <li class="cd-side__sub-item"><a href="#0">Remarks</a></li>
          </ul>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">
          <a href="#0">Images</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="#0">All Images</a></li>
            <li class="cd-side__sub-item"><a href="#0">Edit Image</a></li>
          </ul>
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">
          <a href="#0">Users</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="#0">All Users</a></li>
            <li class="cd-side__sub-item"><a href="#0">Users</a></li>
            <li class="cd-side__sub-item"><a href="#0">Users</a></li>
          </ul>
        </li>
      </ul>
    
      <li class="cd-side__sub-item"><a href="\login\s1\admin\login.php">Admin</a></li>

    </nav>
  
    <div class="cd-content-wrapper">
      <div class="text-component text-center">
        <h1></h1>
        <p><a href=""> </a></p>
      </div>
      <img src="https://image.pitchbook.com/4FJQlHjnVgYvWIBE3U1DccJV2Xp1646814809578_200x200" alt="">
    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
</body>
