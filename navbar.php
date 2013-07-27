<?php 
session_start();

$active_page = $_SESSION["page"];

if ($active_page == "home")
    $home = true;
else if ($active_page == "about")
    $about = true;
else if ($active_page == "contact")
    $contact = true;

?>

<div class="navbar navbar-fixed-top">
 <div class="navbar-inner">
   <div class="container-fluid">
     <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="brand" href="#">Student Orgs</a>
     <div class="nav-collapse collapse">
       <ul class="nav">
         <li <?php if($home) echo 'class="active"'; ?>><a href="index.php">Home</a></li>
         <li <?php if($about) echo 'class="active"'; ?>><a href="about.php">About</a></li>
         <li <?php if($contact) echo 'class="active"'; ?>><a href="contact.php">Contact</a></li>
       </ul>
     </div>
   </div>
 </div>
</div>