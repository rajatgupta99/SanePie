<?php
error_reporting(0);
$link=mysqli_connect("localhost","root","","sanepie")or die("Database Not Connected");
extract($_POST);
$rembme='';
$errmsg='';
if(isset($login))
{
$userid=mysqli_real_escape_string($link,htmlentities(trim($userid))); //For SQL Injection
$userpass=mysqli_real_escape_string($link,htmlentities(trim($userpass))); //For SQL Injection

   if($rembme!=NULL)
   {
	setcookie("useridcook",$userid,time()+ (86400 * 30)); //Valid for 30 days
	setcookie("userpasswordcook",$userpass,time()+ (86400 * 30));  //Valid for 30 days	   
   }


$sel=mysqli_query($link,"select * from admin9108 where username='$userid'");
$arr=mysqli_fetch_array($sel);
	 
   if($userid==$arr['username'] and $userpass==$arr['password'])
	{
	     session_start();
	     $_SESSION['name']=$arr['name'];
	     header("location:waiting.php");
	 }
   
   else
   {
        $errmsg="Username and Password does not match!";
   }
}

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SanePie Admin Login</title>
<meta name="keywords" content="<!-- WRITE YOUR KEYWORDS HERE -->">
<meta name="description" content="SanePie Admin Acoount Login Portal">
<meta name="robots" content="index,follow">
<link rel="icon" href="images/sanepiefavicon5.png" type="image/png">

<link rel="stylesheet" href="css/style2.css" type="text/css">
<link rel="styleshet" href="css/normalize.css" type="text/css">
<!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <![endif]-->
  
<script>
function cookierecieve()
{
	if("<?php echo $_COOKIE['useridcook'];?>"!=NULL)
	{
	   if(document.form1.userid.value=="<?php echo $_COOKIE['useridcook'];?>")
	   	{
			document.form1.userpass.value="<?php echo $_COOKIE['userpasswordcook'];?>";
		}
		else
		{
			document.form1.userpass.value="";
		}	
	}
	
}

</script>  
</head>

<body class="backgrdbody">
<main>
<div class="container ">
<div class="clr">
<div class="columns sixteen"><section class="formsection">
  <form id="form1" name="form1" method="post" >
    <table width="56%" border="0" class="tablebgd">
      <tr>
        <td colspan="2"><span><a href="index.php"><img class="logoprp" src="images/logo.png"></a></span></td>
        </tr>
      <tr>
        <td colspan="2" class="headalignment push"><span class="logo1">Sane</span><span class="logo2">Pie</span><span class="logo3"> (Admin)</span></td>
      </tr>
      <tr>
        <td colspan="2" class="headalignment"><span class="notecolor" >Note:</span> Fields Marked with an asterisk(*) are compulsory</td>
        </tr>
      <tr>
        <td colspan="2" class="errormsgdisplay"><p><?php echo $errmsg ?></p></td>
        </tr>
      <tr>
        <td width="101" class="tabtxt useredit">User Name*</td>
        <td width="182" class="usernametopline" ><input class="inputtextfld" type="text" name="userid" id="userid" placeholder="Admin username" onblur="cookierecieve()" ></td>
      </tr>
      <tr>
        <td class="tabtxt">Password*</td>
        <td class="passbottomline"><input class="inputtextfld" type="password" name="userpass" id="userpass" placeholder="Admin password" ></td>
      </tr>
      <tr>
        <td colspan="2" class="tabtxt lowerline1"><input class="checktextfld" type="checkbox" name="rembme" id="rembme"> <span class="remedit">Remember Me</span> </td>
      </tr>
      <tr>
        <td colspan="2" class="subbuttonmargin"><input class="subbutton1a" type="submit" name="login" id="login" value="Log In"></td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </form>

</section>


</div>
</div>
</div>

<script src="js/PIE.js"></script>
<script src="js/modernizr.custom.94994.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
</body>
</html>