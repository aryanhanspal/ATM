l<html>
<head>
<title>Balance
</title>
<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>

<?php
session_start();
require_once("/boss.php");
$id=($_SESSION["login"]);
connect();
$qry=mysql_query("SELECT * FROM atm.users WHERE user_id= $id && acc_type=1");
$row=mysql_fetch_array($qry);
$balance=$row['balance'];

?>
<p class="sub"><?php echo "</br>Your account balance is:</br>"?></p>
<p class="sub"><?php echo "RS $balance" ?></p>;

<?php
header('refresh:3; url= continue.php');
?>


</form></p>
</body>
</html>