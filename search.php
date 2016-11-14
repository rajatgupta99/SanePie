<?php
$con=$_GET['searchcon'];// g to read the text box value or object
$name="Wikipedia";
$wiki1=$con;
$wiki2=ucwords($wiki1);

if($con!=NULL)
{
	$link=mysqli_connect("localhost","root","","google")or die("Database Not Connected");
	
	$sel=mysqli_query($link,"select * from search where name like '$con%' or keyword1 like '$con%' or keyword2 like '$con%' or keyword3 like '$con%' or keyword4 like '$con%' or keyword5 like '$con%' or keyword6 like '$con%' or keyword7 like '$con%' or keyword8 like '$con%' or keyword9 like '$con%' or keyword10 like '$con%' ");
	
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
		echo "<p align='center' class='notfoundmsg'>Sorry, there are no results for your search.</p>";
	}
}

function letscount($yolo)
{
	echo"<script type=\"text/javascript\">alert('hello');</script>";	
}



?>