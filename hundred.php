<head>
<title> Transaction </title>
<link rel="stylesheet" type="text/css" href="transaction.css">
</head>
<body><h1 class="header">Iron Bank  </h1></body>
<p class="dsc">
<?php
session_start();
require_once("/boss.php");
$id=($_SESSION["login"]);
connect();
$qry=mysql_query("SELECT * FROM atm.users WHERE user_id= $id && acc_type=1");
$row=mysql_fetch_array($qry);
$balance=$row['balance'];


if(($balance-100)<0 || $balance<100)
{
		echo "Transaction Failed";
	}
else{
$f=mysql_query("UPDATE atm.users SET balance=$balance - 100 WHERE (user_id=$id && acc_type=1)");

	
		echo "Transaction Successful! </br> Please collect your money";
		
}

?>
</p>
<?php
header('refresh:3; url= continue.php');
?>