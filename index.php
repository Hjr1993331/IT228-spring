<?php 
include('config.php'); 
include('includes/header.php');
?>


<div id="about"  class="wrapper">
<h2 class="title">about</h2>  
<h2 class="myfname">HIJIRI
<h2 class="mylname">MARUO </h2></h2>
<img class="mypic" src="images/mypic.jpg" alt="My picture">
<img class="mypic2" src="images/view.jpg" alt="view">
<div  class="about">
<h2 class="myfname2">HIJIRI
<h2 class="mylname2">MARUO </h2></h2>
<ul class="attend">
<li class="rule">Career</li>  
<li class="career">Graduated high school in Fukui, 2012</li>
<li class="career">Started working in kyoto from 2012 to 2018</li>
  <li class="career">Attended Seattle Central College from April, 2018</li>
  <li class="career">graduated ESL classes in Fall, 2019</li>
  <li class="career">Received an Associate Degree in Computer Science in August, 2021</li>
  <li class="rule">Live</li>
  <li class="career">Seattle, Washington State</li>
</div>
</div>


<main id="class">  
<h2 id="skill" class="titles"><?php echo $summary; ?></h2>
<div class="one">
<img id="first" class="logo" src="images/htmllogo.png" alt="HTML">
<img id="first" class="logo" src="images/css.png" alt="CSS">
<img id="first" class="logo" src="images/javascript.png" alt="JavaScript">
<img id="second" class="logo" src="images/php.png" alt="PHP">
<img id="second" class="logo" src="images/mysql.jpg" alt="MySql">  
<img id="second" class="logo3" src="images/python.jpg" alt="Python"> 
<div class="two"> 
<img id="fourth" class="logo2" src="images/python.jpg" alt="Python">
<img id="third" class="logo2" src="images/java.jpg" alt="Java">
<img id="third" class="logo2" src="images/django.png" alt="Django">
<img id="third" class="logo2" src="images/github.png" alt="GitHub">       
</div>
<h3 class="question">What kind of websites that I made?</h3>  
<ul class="learn">
<li class="career"><a href="../web110/index.html">First HTML and CSS class </a></li>
<li class="career"><a href="../web120/index.php">Second HTML and CSS class</a></li>
<li class="career"><a href="../it261/index.php">PHP class</a></li>    
</ul>
</div>
</main>

<article>
<h2 id="contact" class="title">Contact</h2> 
<h3 class="infomation">My contact information</p>
<h3 class="infomation">I'll give you more information after I receive your contact form!</p>   
<div class="telphone">  
<img class="imglogo" src="images/mobilephone.png" alt="Mobilephone logo"> 
<p class="info">My Phone Number</p>
<p class="info">***-704-****</p>
</div>
<div class="email">
<img class="imglogo2" src="images/email.png" alt="Email logo"> 
<p class="info">My Email Address</p>
<p class="info">hjr*******3@gmail.com</p>   
</div>
</article>


<footer>
<ul class="below">
  <li class="footer">Copyright&copy; 2020 - <?php echo date('Y'); ?> </li>
  <li class="footer">All Rights Reserved</li>
  <li class="footer">Terms of Use</li>
  <li class="footer"><a href="index.php">Web designer Hijiri</a></li>
</ul>

</footer>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
    
<script src='js/main.js'></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/basic-example.js"></script>

    
</script> 