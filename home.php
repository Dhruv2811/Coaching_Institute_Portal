<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
Beyond-teaching
</title>
<link href="css/font.css" rel="stylesheet">

</head>
<body>
           <div id="img">
            <a href="home.php"><img src="img/mainlogo.jpg" width="200" height="100"></a>
         </div>
	<div id="nav">
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="courses.php">Courses</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="sign_up.php">Sign_Up</a></li>              
              <li><a href="login.php">Sign-in</a></li>
              
              <?php
session_start();

if (isset($_SESSION['Aname'])) {

echo " <li><a href='logout.php'>Log-out</a></li>
<li><a href='Manage.php'>Manage</a></li>"; 


}

elseif (isset($_SESSION['name'])) {

echo "<li><a href='logout.php'>Log-out</a></li>"; 


}


elseif (isset($_SESSION['Tname'])) {

echo " <li><a href='logout.php'>Log-out</a></li>
<li><a href='profile.php'>ProfileUpdate</a></li>"; 


}



?>

            
             
   </div>
   <br><br><br>



<img src="images1/1.jpg" height="800" width="1520" alt="homepage">

<?php


if (isset($_SESSION['name'])) {

echo "Welcome  "; 
echo $_SESSION['name'];

}

elseif (isset($_SESSION['Aname'])) {

echo "Welcome  "; 
echo $_SESSION['Aname'];

}

elseif (isset($_SESSION['Tname'])) {

echo "Welcome  "; 
echo $_SESSION['Tname'];

}


?>



<div id="float-left">
                  
                  <h3>About Beyond Teaching</h3>
                  <p>welcome to the Beyond Teaching, an ideal education provider for students seeking an industry-relevant curriculum.
                  Beyond Teaching offers a variety of programs in management, business and accounting at diploma, bachelor and master degree level. The bachelor and master degree programs are offered in association with the</p>
                  <p><a href="about.php" class="btn btn-primary">Learn More</a></p><br><br><br><br>
                  <div class="float-right"><img src="img/mainlogo.jpg" width="500" height="200"></div>
     
                </div>
 
 
<footer>
	
             <div style="float: left;">   
              <h3 style="color: white;">About Us</h3> <pre style="color: white">Beyond Teaching was established in 1994, 
and officialy opened in 1996, as the first completely 
new university in Australia since 1971. Since then our 
student population has grown considerably.Beyond Teaching 
and Beyond Teaching work together to provide students with 
relevant, high quality education.</pre>
             </div>



              <div style="float: left; margin-left: 300px">
                  <h3 style="color: white;">Links</h3>
                  <a href="home.php">Home</a><br>
                  <a href="courses.php">Courses</a><br>
                  <a href="about.php">About Us</a><br>
                  <a href="contact.php">Contact</a><br>
                  <a href="sign_up.php">Sign_Up</a><br>
                  <a href="login.php">Sign-in</a><br>                  
</div>  
<div style="margin-left: 1000px;">
 <h3 style="color: white;">Contact_Info</h3>
                
            
                

                  <pre style="color: white">399 Lonsdale Street,Melbourne,VIC 3000, Australia</pre>
                  <pre style="color: white">info@Beyond Teaching.edu.au</pre>
                  <pre style="color: white">+61383273100</pre>          
                
              </div>

             
              <div style="margin-top: 150px">
                <p style="color: white; display: inline-block;">&copy; 2018 All Rights Reserved. Designed & developed by Beyond Teaching.</p>
                <p style="display: inline-block; margin-left: 800px"><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
              
                
              
</footer>
       
 </body>
 </html>



	
