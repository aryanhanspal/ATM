<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body><h1 class="header">Iron Bank  </h1></body>
<p class="dsc">
<?php
require_once("/boss.php");
connect();
$id=$_POST['user_id'];
$pin=$_POST['pin'];
//check the entered id and pin-
$qry=mysql_query("SELECT * FROM atm.users WHERE user_id='$id'");
if(!$qry)
	{
		die("Query Failed: ". mysql_error());
	}
$row=mysql_fetch_array($qry);
//if($id==$row['user_id'])
//{
if($id==$row['user_id'] && $pin==$row['pin'])
    {		session_start();
			$_SESSION["login"] =$id;
            header("Location: menu.php");
    }
else{
	echo "Invalid pin or account number!";
	header('refresh:2; url= index.php');
	}
//}
?>
</p>