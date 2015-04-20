<head>
<title>
Pin change successful
</title>
<link rel="stylesheet" type="text/css" href="pin_change.css">
</head>
<body><h1 class="header">Iron Bank  </h1></body>
<p class="dsc">
<?php
session_start();
require_once("/boss.php");
$id=($_SESSION["login"]);
connect();
$old_pin=$_POST['old_pin'];
$new_pin=$_POST['new_pin'];
$qry=mysql_query("SELECT pin FROM `users` WHERE (user_id='$id' &&(acc_type=1 || acc_type=2))");
$result=mysql_fetch_array($qry);
$pin=$result['pin'];
if($old_pin!=$pin)
{
echo "Wrong pin";
}
else if ($old_pin==$pin)
{
mysql_query("UPDATE atm.users SET pin=$new_pin WHERE(user_id=$id && pin=$old_pin && acc_type=1)");
mysql_query("UPDATE atm.users SET pin=$new_pin WHERE(user_id=$id && pin=$old_pin && acc_type=2)");
echo "Pin Changed";
}
?></p>


<?php
header('refresh:3; url= continue.php');
?>