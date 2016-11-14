<?php
extract($_POST);
session_start();
$websitename=$_SESSION['websitename'];

header("refresh:4;url=addyourwebsite.php");

session_destroy();

if($websitename=="")
{
  header("location:addyourwebsite.php");	
}

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sanepie</title>
<meta name="keywords" content="<!-- WRITE YOUR KEYWORDS HERE -->">
<meta name="description" content="<!-- WRITE YOUR WEBSITE DESCRIPTION HERE -->">
<meta name="robots" content="index,follow">
<link rel="icon" href="images/sanepiefavicon5.png" type="image/png">

<link rel="stylesheet" href="css/webaddedconfirm.css" type="text/css">
<link rel="styleshet" href="css/normalize.css" type="text/css">
<!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
<main>
<!---- Header Container Start  ---->
<header class="container backgrgheader">
<div class="clr">
<div class="columns sixteen"><p class="logotxt"><img class="logoimg" src="images/logo.png"><span class="logotextcomp">Sane<span class="logotxtb">Pie</span></span></div>
</div>
</header>
<!---- Header Container End ----->

<!---- Intro Text Container Start ---->
<div class="container introtextcontainer"> 
<div class="clr">
<div class="columns three"><p></p></div>
<div class="columns ten three-offset-left"></div>
<div class="columns three"><p></p></div>
</div>
</div>
<!----- Intro Container End ------>

<!---- Form Container Start ----->
<div class="container containerform1"> 
<div class="clr">
<div class="columns two"><p></p></div>
<div class="columns twelve two-offset-left formcontainerbackgrdcolor">
<p class="thanksinsidemsg">Thank you!</p>
<p></br></p>
<p><span class="innermsg">Request for adding <?php echo "<span style='color:#F38630;'> $websitename </span>"?> has been submitted sucessfully :) </span></p>
</div>
<div class="columns two"><p></p></div>
</div>
</div>

<!---- Form Container End ----->




<script src="js/PIE.js"></script>
<script src="js/modernizr.custom.94994.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
</body>
</html>