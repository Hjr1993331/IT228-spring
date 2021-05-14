<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="UTF-8">
<title><?php echo $title; ?></title>  
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/test2.js"></script>

</head>

<body>

<header>
<div class="inner-header">
<div class="container">
<div class="present">
<div class="green"></div>
<div class="lid"></div>
<div class="box"></div>
<div class="bow"></div>
<div class="ribbon"></div></div>
</div>
<nav>
<ul id="myTopnav" class="topnav"> 
<?php echo makeLinks($nav); ?>
<li class="icon"> 
          <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
</ul>
</nav>
</div>
  </header>  

<div id="index" class="fade-img">
        <img src="images/scenery2.jpeg" alt="<?php echo $alt; ?>">
        <img src="images/scenery6.jpg" alt="<?php echo $alt; ?>">
        <img src="images/scenery4.jpg" alt="<?php echo $alt; ?>">
        <img src="images/scenery7.jpg" alt="<?php echo $alt; ?>"> 
</div>        
<h1 class="name">Hijiri Maruo's Portfolio</h1>      



<?php 
include('includes/form.php'); ?>


