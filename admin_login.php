<?php

session_start();

$link=mysqli_connect("localhost","root","","coaching_institute_portal");


$name = $_POST['name'];
$password = $_POST['password'];

$fetch = "select Name FROM admin WHERE Name = '$name' and Password = '$password';";


$result = mysqli_query($link,$fetch);


if (mysqli_num_rows($result) > 0 and !isset($_SESSION['name']) and !isset($_SESSION['Tname'])){
	while ($row = mysqli_fetch_assoc($result)) {
		# code...

		$_SESSION["Aname"] = $_POST['name'];
	}

header('Location: home.php');

}

else{

	echo "<center><b style = 'font-size: 20px;'>Please enter correct info. Or someone has already signed-in</b></center>";
	echo "<center><b style = 'font-size:20px;'><a href='admin_signin.php'>GoBack</a></b></center>";
	    }


?>


