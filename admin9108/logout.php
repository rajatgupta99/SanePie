<?php

session_start();

session_destroy();

header("refresh:1;url=index.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SanePie Admin Account</title>
<link rel="stylesheet" href="css/loaderstyle2.css">
</head>

<body>
<section class="mainbox" >


<p class="text1">Thank you! You have been successfully logged out.</p>
<p class="text2">  Redirecting to the Admin Login page..... </p>
<div align="center"><img src="images/loader2.gif" class="loader1"></div>
</section>
</body>
</html>
