<?php
$link=mysqli_connect("localhost","root","","sanepie")or die("Database Not Connected");
$msg101=NULL;
$tm=time();
$tm2=md5($tm);
$tm3=substr($tm2,0,6);
$col=array("#999","#69D2E7","#A7DBDB","#E0E4CC","#F38630","#FA6900","#DB3340","#E8B71A","#F7EAC8","#1FDA9A","#28ABE3");
$fnt=array("Baskerville", "Palatino Linotype", "Palatino", "Century Schoolbook L", "Times New Roman", "serif", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Verdana", "sans-serif");
$ftsize=array("17px","20px","18px","23px","20px","19px","21px","22px");
$fntmix=array_rand($fnt);
$colmix=array_rand($col);
$ftsizemix=array_rand($ftsize);

$num1=range(99,9);
$num2=range(99,9);
$num3=range(99,9);

$num1mix=array_rand($num1);
$num2mix=array_rand($num2);
$num3mix=array_rand($num3);

$address=$num1mix+$num2mix+$num3mix;

$date1= date("j F, Y");
$time1= date("g:i a");

extract($_POST);
if(isset($sub))
{    
	if($captchainp==$addcheck)
	{
		$websitename=mysqli_real_escape_string($link,htmlentities(trim($websitename))); //For SQL Injection
    $url=mysqli_real_escape_string($link,htmlentities(trim($url))); //For SQL Injection
    $categories=mysqli_real_escape_string($link,htmlentities(trim($categories))); //For SQL Injection
    $keywords=mysqli_real_escape_string($link,htmlentities(trim($keywords))); //For SQL Injection
    $usersname=mysqli_real_escape_string($link,htmlentities(trim($usersname))); //For SQL Injection
    $usersemail=mysqli_real_escape_string($link,htmlentities(trim($usersemail))); //For SQL Injection
    $userslinktoweb=mysqli_real_escape_string($link,htmlentities(trim($userslinktoweb))); //For SQL Injection
	
	if(mysqli_query($link,"insert into userswebsites values('$websitename','$url','$categories','$keywords','$usersname','$usersemail','$userslinktoweb','$date1','$time1')"))
	{
		 session_start();
	     $_SESSION['websitename']=$websitename;
	     header("location:webaddedconfirm.php");
	}
	else
	{
	    $msg101="<span style='color:red; font-size:15px;  font-family: open_sansregular;'>Sorry! Request for this website has already been made!!</span>";		
	}
	
		
	
	}
	else
	{
		$msg101= "<span style='color:red; font-size:15px;  font-family: open_sansregular;'>Sorry! The sum of the numbers is incorrect!!</span>";
	}
	
	
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

<link rel="stylesheet" href="css/styleaddyourwebsite.css" type="text/css">
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
<div class="columns sixteen"><p class="logotxt"><a href="index.php"><img class="logoimg" src="images/logo.png"><span class="logotextcomp">Sane<span class="logotxtb">Pie</span></span></a></div>
</div>
</header>
<!---- Header Container End ----->

<!---- Intro Text Container Start ---->
<div class="container introtextcontainer"> 
<div class="clr">
<div class="columns three"><p></p></div>
<div class="columns ten three-offset-left"><span ><p class="introtext">Please give us your website details below and we will add them up onto <a href="index.php"><span class="introtextsanepie"> SanePie </span></a> searching</p></span></div>
<div class="columns three"><p></p></div>
</div>
</div>
<!----- Intro Container End ------>

<!---- Form Container Start ----->
<div class="container containerform1"> 
<div class="clr">
<div class="columns two"><p></p></div>
<div class="columns twelve two-offset-left formcontainerbackgrdcolor">
  <form id="form1" name="form1" method="post" class="formwidth1">
    <div align="center">
      <table border="0" class="tablewidth1">
        <tr>
          <td colspan="3"><div align="center" class="submissionmsg"><h4><?php echo $msg101;?></h4></div></td>
          </tr>
        <tr>
          <td colspan="2" class="rowsstyling"><input type="text" name="websitename" id="websitename" class="textboxstyling" placeholder="Website Name"></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="2" class="rowsstyling"><input type="text" name="url" id="url" class="textboxstyling" placeholder="Url"></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="2" class="rowsstyling"><input type="text" name="categories" id="categories" class="textboxstyling" placeholder="Categories your website fall into"></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="2" class="rowsstyling"><input type="text" name="keywords" id="keywords" class="textboxstyling" placeholder="Keywords for your website"></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="2" class="rowsstyling"><input type="text" name="usersname" id="usersname" class="textboxstyling" placeholder="Your Name"></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="2"  class="rowsstyling"><input type="text" name="usersemail" id="usersemail" class="textboxstyling" placeholder="Your Email Id"></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="2" class="rowsstyling"><input type="text" name="userslinktoweb" id="userslinktoweb" class="textboxstyling" placeholder="How are your linked to this website"></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td class="rowsstyling"><span class="userdetailform captchainfo">Human Verification:&nbsp; <?php echo "<span class='captchastyling1' style='color:$col[$colmix]; font-family:$fnt[$fntmix]; font-size:$ftsize[$ftsizemix];'>$num1mix + $num2mix + $num3mix =</span>";
 echo "<input type='hidden' name='addcheck' value='$address'/>"; ?></span></td>

          <td class="rowsstyling"><input type="text" name="captchainp" id="captchainp" class="textboxstyling textboxstylingcaptcha" placeholder="Please enter the sum of above numbers"></td>
          
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="3">
            <input type="submit" name="sub" id="sub" value="Submit" class="usersubmitbutton">
          </td>
          </tr>
      </table>
    </div>
  </form>
</div>
<div class="columns two"><p></p></div>
</div>
</div>

<!---- Form Container End ----->

<!------ Footer Container Start -------------->
<div id="fott" class="container footer" > 
<div class="clr">
<div class="columns sixteen ">
<ul class="footerli">
<li><a href="#">Need Searching Help?</a></li>
<li><a href="#">Feedback</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Contact</a></li>
</ul>

</div>
</div>
</div> 
<!------ Footer Container End ---------------->


<script src="js/PIE.js"></script>
<script src="js/modernizr.custom.94994.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
</body>
</html>