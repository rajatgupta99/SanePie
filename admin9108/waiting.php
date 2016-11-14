<?php

session_start();
$name=$_SESSION['name'];

if($name=="")
{
  header("location:index.php");	
}

header("refresh:2;url=adminaccount.php");


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SanePie Admin Account</title>
<link rel="stylesheet" href="css/loaderstyle.css">
</head>

<body>
<section class="mainbox" >

<div align="center"><img src="images/loader2.gif" class="loader1"></div>
<p class="text1"> Please wait while we prepare your account.... </p>

</section>
</body>
</html>
