<!doctype html>
<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SanePie</title>
<meta name="keywords" content="<!-- WRITE YOUR KEYWORDS HERE -->">
<meta name="description" content="<!-- WRITE YOUR WEBSITE DESCRIPTION HERE -->">
<meta name="robots" content="index,follow">
<link rel="icon" href="images/sanepiefavicon5.png" type="image/png">
<link rel="stylesheet" href="css/stylemain.css" type="text/css">
<link rel="styleshet" href="css/normalize.css" type="text/css">
<!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <![endif]-->  

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/behaviour.js"></script>
<script>
var saneobj;
if(window.XMLHttpRequest)
  {
	  saneobj=new XMLHttpRequest();
  }
  else if(window.ActiveXObject)
  {
	  saneobj=new ActiveXObject("Microsoft.XMLHTTP");
  }
  else
  {
	  alert("Sorry, your browser does not support AJAX. Please upgrade your browser or trying using another browser");
  }
 function searchvalue(userval,displayblock)
 {
	if(saneobj)
	{
	var displayblockid=document.getElementById(displayblock);
	saneobj.open("GET","sanesearching.php?searchcon="+userval);
	saneobj.onreadystatechange=function()
	  {
		if(saneobj.status==200 && saneobj.readyState==4)
		{
			displayblockid.innerHTML=saneobj.responseText;
			
		}
		
	  }
	}
	saneobj.send(null);
 }
 
</script>
</head>

<body>
<main>
<!------ Container1 Start---------------->
<div class="container backgrd1"> 
<div class="clr">
<div class="columns sixteen"><p class="topright"><a href="addyourwebsite.php">Are we missing your website?</a></p>
</div>
<div class="columns sixteen">
  <div align="center"><span><a href="index.php"><img class="logoimg " src="images/logo.png"></a></span>
  </div>
</div>
<div class="columns sixteen"><p class="logo1a"><a href="index.php"><span class="logosane">Sane</span>Pie<span class="logo1b"> (Beta 2.0)</span></a></p>
<p class="logo2">Button Less Searching</p>
</div>
</div> <!--Clr div Closing -->
</div>
<!------ Container1 End --------------->
<!------ Container2 Start ------------------>
<div class="container backgrd2"> 
<div class="clr">
<div class="columns sixteen">
<div>  <form id="form1" name="form1" method="post">
    <div align="center">
      <input class="searchmenu" type="text" name="searchinput" id="searchinput" placeholder="What are you thinking?" onkeyup="searchvalue(this.value,'searchres')">
    </div>
  </form>
</div>
</div>
</div> <!--Clr div Closing --> 
</div> 
<!------ Container2 End  -------------->
<!------ Container3 Start ------------------->
<div class="container"> 
<div class="clr">
<div class="columns sixteen help">Searching examples: New York Restaurants, London Shopping,Travel,Hotels, Tourist Places in Dubai etc. </div>
</div>
</div> 
<!------ Container3 End  --------------->
<!------ Container4 Start (Main) -------------->
<div class="container maincont"> 
<div class="clr">
<!-------- Left Main Container -------------->
<div class="columns two">
</div>
<!-------- Center Main Container ------------>
<div class="columns twelve two-offset-left maincont-mid">
<div align="center">
<div class="tabadjust" id="searchres"></div>
</div>
</div>
<!-------- Right Main Container  ------------>
<div class="columns two">  
</div>
</div>
</div>
<!------ Container4 End ---------------->
<!------ Container5 Start (Footer) -------------->
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
<!------ Container5 End ---------------->

</main>
<script src="js/PIE.js"></script>
<script src="js/modernizr.custom.94994.js"></script>
</body>
</html>