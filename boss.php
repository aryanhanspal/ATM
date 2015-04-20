
<?php

function connect()
	{
	$conn = mysql_connect("localhost", "root", "")or die("Unable to connect to MySQL");
	mysql_select_db("atm") or die(mysql_error());
	}

function limit_check($amt)
	{
	if(20000<$amt)
		{
		//$row['limit']
		//echo "Sorry, your limit is ".$row['limit'];
		//session_destroy();
		header(' url= try2.html');
		}
	}

?>