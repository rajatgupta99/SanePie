<?php
$link=mysqli_connect("localhost","root","","sanepie")or die("Database Not Connected");
extract($_POST);
session_start();
$name=$_SESSION['name'];
$msg1='';
$msg2='';
$date1='';
$time1='';
$date1= date("F j, Y");
$time1= date("g:i a");
$webcount=mysqli_query($link,"select COUNT(*) from sanesearch1");
$arr=mysqli_fetch_array($webcount);

if(isset($sub))
{
	$webnam=mysqli_real_escape_string($link,htmlentities(trim($webnam))); //For SQL Injection
    $url=mysqli_real_escape_string($link,htmlentities(trim($url))); //For SQL Injection
    $country=mysqli_real_escape_string($link,htmlentities(trim($country))); //For SQL Injection
    $city=mysqli_real_escape_string($link,htmlentities(trim($city))); //For SQL Injection
    $key1=mysqli_real_escape_string($link,htmlentities(trim($key1))); //For SQL Injection
    $key2=mysqli_real_escape_string($link,htmlentities(trim($key2))); //For SQL Injection
    $key3=mysqli_real_escape_string($link,htmlentities(trim($key3))); //For SQL Injection
    $key4=mysqli_real_escape_string($link,htmlentities(trim($key4))); //For SQL Injection
    $key5=mysqli_real_escape_string($link,htmlentities(trim($key5))); //For SQL Injection
    $key6=mysqli_real_escape_string($link,htmlentities(trim($key6))); //For SQL Injection
    $key7=mysqli_real_escape_string($link,htmlentities(trim($key7))); //For SQL Injection
    $key8=mysqli_real_escape_string($link,htmlentities(trim($key8))); //For SQL Injection
    $key9=mysqli_real_escape_string($link,htmlentities(trim($key9))); //For SQL Injection
    $key10=mysqli_real_escape_string($link,htmlentities(trim($key10))); //For SQL Injection
    
	if($country!=NULL)
	{
	$webnam1= $webnam." "."(".$country.")";
	}
	else
	{
	$webnam1= $webnam;
	}
	 
	if(mysqli_query($link,"insert into sanesearch1 values('$webnam1','$url','$country','$city','$key1','$key2','$key3','$key4','$key5','$key6','$key7','$key8','$key9','$key10','$key11','$key12')"))
	{
		$msg1="The website has been sucessfully added!!";
		
	}
	else
	{
	    $msg2="The website is already registered";		
	}
	
}

if(isset($logout))
{
	header("location:logout.php");	
}

if($name=="")
{
  header("location:index.php");	
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SanePie (Admin)</title>
<meta name="keywords" content="<!-- WRITE YOUR KEYWORDS HERE -->">
<meta name="description" content="SanePie Admin Account">
<meta name="robots" content="index,follow">
<link rel="icon" href="images/sanepiefavicon5.png" type="image/png">

<link rel="stylesheet" href="css/style1.css" type="text/css">
<link rel="styleshet" href="css/normalize.css" type="text/css">
<!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <![endif]-->


<script type=""text/javascript"">
var cnt;
function wordcount1(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w1_count');
ele.value = cnt;
}

function wordcount2(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w2_count');
ele.value = cnt;
}

function wordcount3(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w3_count');
ele.value = cnt;
}

function wordcount4(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w4_count');
ele.value = cnt;
}

function wordcount5(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w5_count');
ele.value = cnt;
}

function wordcount6(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w6_count');
ele.value = cnt;
}

function wordcount7(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w7_count');
ele.value = cnt;
}

function wordcount8(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w8_count');
ele.value = cnt;
}

function wordcount9(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w9_count');
ele.value = cnt;
}

function wordcount10(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w10_count');
ele.value = cnt;
}

function wordcount11(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w11_count');
ele.value = cnt;
}

function wordcount12(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w12_count');
ele.value = cnt;
}
//document.write("<input type=text id=w_count size=4 readonly>");
//document.getElementById("w_count").innerHTML = "<input type=text id=w_count size=4 readonly>";
</script>

</head>

<body>
<main>
<div class="container backgrgheader">
<div class="clr">
<div class="columns fourteen"><p class="logotxt"><a href="adminaccount.php"><img class="logoimg" src="images/logo.png"></a> Sane<span class="logotxtb">Pie</span><span class="logotxt2"> (Admin)</span></p></div>
<div class="columns two">
 <section class="logout1"> <form id="form2" name="form2" method="post">
    <input type="submit" name="logout" id="logout" value="Log Out" class="logoutbutton">
  </form></section>
</div>
</div>
</div>
<div class="container">
<div class="clr">
<div class="columns four leftcontainer1"><section class="welcomingbar"><p>Welcome: <span class="userdet1"><?php echo $name; ?></span></p>
<p class="webinfo">Current Date: <span class="userdet2"><a href="adminaccount.php"></br><?php echo $date1; ?></a></span></p>
<p class="webinfo">Current Time: <span class="userdet2"><a href="adminaccount.php"><?php echo $time1; ?></a></span></p>
<p class="webinfo">Total websites count: <span class="userdet2"><a href="adminaccount.php"><?php echo $arr[0]; ?></a></span></p></section></div>

<div class="columns eight  midcontainer1">
<section><form class="tabelform" id="form1" name="form1" method="post">
  <div align="center">
    <table border="0">
      <tr>
        <td colspan="2">
          <h1 class="tabheading"><p align="center">SanePie Database Modifier</p></h1>
          </td>
        </tr>
      <tr>
        <td colspan="2"> <div align="center" class="tabsubheading">Please enter the details below for registering the website onto the SanePie Database</div></td>
        </tr>
     
      <tr>
        <td colspan="2" class="submessage1"><p><?php echo $msg1 ?></p></td>
        </tr>
         <tr>
        <td colspan="2" class="submessage2"><p><?php echo $msg2 ?></p></td>
        </tr>
        
      <tr>
        <td width="160"  class="rowspacing">Website Name*:</td>
        <td width="316"><input name="webnam" type="text" required class="userinp" id="webnam"></td>
        </tr>
      <tr>
        <td class="rowspacing">URL*:</td>
        <td><input name="url" type="text" required class="userinp" id="url"></td>
        </tr>
      <tr>
        <td class="rowspacing">Country:</td>
        <td><input type="text" name="country" id="country" class="userinp"></td>
        </tr>
      <tr>
        <td class="rowspacing">City:</td>
        <td><input type="text" name="city" id="city" class="userinp"></td>
        </tr>
      <tr>
        <td class="rowspacing">Keyword 1*:</td>
        <td><input name="key1" type="text" required class="userinp" id="key1" onkeyup="wordcount1(this.value)"> <span><input type=text id=w1_count size=4 readonly class="countertextbox"></span></td>
        </tr>
      <tr>
        <td class="rowspacing">Keyword 2:</td>
        <td><input type="text" name="key2" id="key2" class="userinp" onkeyup="wordcount2(this.value)">  <span><input type=text id=w2_count size=4 readonly class="countertextbox"></span></td>
        </tr>
      <tr>
        <td class="rowspacing">Keyword 3:</td>
        <td><input type="text" name="key3" id="key3" class="userinp" onkeyup="wordcount3(this.value)"> <span><input type=text id=w3_count size=4 readonly class="countertextbox"></span></td>
        </tr>
      <tr>
        <td class="rowspacing">Keyword 4:</td>
        <td><input type="text" name="key4" id="key4" class="userinp" onkeyup="wordcount4(this.value)"> <span><input type=text id=w4_count size=4 readonly class="countertextbox"></span></td>
        </tr>
      <tr>
        <td class="rowspacing">Keyword 5:</td>
        <td><input type="text" name="key5" id="key5" class="userinp" onkeyup="wordcount5(this.value)"> <span><input type=text id=w5_count size=4 readonly class="countertextbox"></span></td>
        </tr>
      <tr>
        <td class="rowspacing">Keyword 6:</td>
        <td><input type="text" name="key6" id="key6" class="userinp" onkeyup="wordcount6(this.value)"> <span><input type=text id=w6_count size=4 readonly class="countertextbox"></span></td>
        </tr>
      <tr>
        <td class="rowspacing">Keyword 7:</td>
        <td><input type="text" name="key7" id="key7" class="userinp" onkeyup="wordcount7(this.value)"> <span><input type=text id=w7_count size=4 readonly class="countertextbox"></span></td>
        </tr>
      <tr>
        <td class="rowspacing">Keyword 8:</td>
        <td><input type="text" name="key8" id="key8" class="userinp" onkeyup="wordcount8(this.value)"> <span><input type=text id=w8_count size=4 readonly class="countertextbox" ></span></td>
        </tr>
      <tr>
        <td class="rowspacing">Keyword 9:</td>
        <td><input type="text" name="key9" id="key9" class="userinp" onkeyup="wordcount9(this.value)"> <span><input type=text id=w9_count size=4 readonly class="countertextbox"></span></td>
        </tr>
      <tr>
        <td class="rowspacing">Keyword 10:</td>
        <td><input type="text" name="key10" id="key10" class="userinp" onkeyup="wordcount10(this.value)"> <span><input type=text id=w10_count size=4 readonly class="countertextbox"></span></td>
      </tr>
      <tr>
        <td class="rowspacing">Keyword 11:</td>
        <td><input type="text" name="key11" id="key11" class="userinp" onkeyup="wordcount11(this.value)"> <span><input type=text id=w11_count size=4 readonly class="countertextbox"></span></td>
      </tr>
      <tr>
        <td class="rowspacing">Keyword 12:</td>
        <td><input type="text" name="key12" id="key12" class="userinp" onkeyup="wordcount12(this.value)"> <span><input type=text id=w12_count size=4 readonly class="countertextbox"></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="sub" id="sub" value="Submit" class="regisbutton">
          <input type="reset" name="reset" id="reset" value="Reset" class="resetbutton">
        </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
    </table>
  </div>
</form></section>
</div>
<div class="columns four"></div>
</div>
</div>

<div class="container footer1">
<div class="clr">
<div class="columns sixteen">
<ul>
<li>Website Adding Requests</li>
<li>Change Password</li>
<li></li>
</ul>
</div>
</div>
</div>


<script src="js/PIE.js"></script>
<script src="js/modernizr.custom.94994.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>

</body>
</html>