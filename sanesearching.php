<?php
$link=mysqli_connect("localhost","root","","sanepie")or die("Database Not Connected");
$con=$_GET['searchcon'];//fetching the query string
$con=mysqli_real_escape_string($link,htmlentities(trim($con))); //For SQL Injection
$connew=strtolower($con);
$preparray = array('of','a','the','and','an','or','nor','but','is','if','then','else','when','at','from','by','on','off','for','in','out','over','to','into','with','website','websites');

$searchbits= explode(" ", $connew);  //breaking the sentence

foreach ($searchbits as $key => $word)  //removing the prepositions by matching from the above dataset
{

  if (in_array($word, $preparray))

     unset($searchbits[$key]);

}

$searchcombined= implode(" +", $searchbits); //joining the words back to sentence for searching

$name="Wikipedia";
$wiki1=$connew;
$wiki2=ucwords($wiki1); //making the first letter capital of each word for wiki searching

if($con!=NULL)
{
	$timecal=microtime(); //time cal start
	$sel=mysqli_query($link,"select *, MATCH (name,url,country,city,keyword1,keyword2,keyword3,keyword4,keyword5,keyword6,keyword7,keyword8,keyword9,keyword10,keyword11,keyword12) AGAINST ('+$searchcombined' IN BOOLEAN MODE) AS score FROM sanesearch1 WHERE MATCH (name,url,country,city,keyword1,keyword2,keyword3,keyword4,keyword5,keyword6,keyword7,keyword8,keyword9,keyword10,keyword11,keyword12) AGAINST ('+$searchcombined' IN BOOLEAN MODE) ORDER BY score DESC ");
	$timecal=microtime()-$timecal; //time cal stop
	$newtime=round( $timecal, 4);  //time cal rounded off to 4 decimal places
	echo "<span class='executime'>(".$newtime." seconds)</br></span>";
	echo "<span class='wikires'>Your Wikipedia Search Result for:</span> <a href='http://www.wikipedia.org/wiki/$wiki2' target='_blank' class='wikireslink'>".$con."</a><br/>";
	echo "<span class='dashsep'>--------------</span>";
	echo "<br/>";
	echo "<br/>";
	
	
	if(mysqli_num_rows($sel)>0)
	{
		$i=1;
		while(list($n,$u)=mysqli_fetch_array($sel))
		{
			if($i!=7)
			{
		   echo "<span class='seperatorlinks'>|</span><a href='http://$u' target='_blank' class='serresults' onclick=letscount($n);>".$n."</a>";
		   echo"&nbsp;&nbsp;&nbsp;";
		   $i++;
			}
			elseif($i==7)
			{
			  echo "<br/>";
			  echo "<br/>";
			  $i=0;	
			}
		}
		
	}
	else
	{
		//echo "No Results Found!";
		echo "<img src='images/loader2.gif' style='width:110px; height=110px;'>";
	}
}

/*
function letscount($yolo)
{
	echo"<script type=\"text/javascript\">alert('hello');</script>";	
} 
*/



?>