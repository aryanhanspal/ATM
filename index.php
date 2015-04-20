<html>
<head>
<title>ATM Login
</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<style type="text/css">
#keypad
	{	float:left;
		margin-left: 2cm;
		margin-top: 1.2cm;
	}
#header
{
color: #FFFFFF;
font-family: Broadway;
font-size: 50px;
}
</style>
</head>

<body>
<h1 class="header">Iron Bank  </h1>
<table width="100%">
	<tr>
	<td>
<img id="keypad" src="keypad1.jpg" alt="Keypad" style="width:400px;height:400px"></td>
<form action="func.php" method="post">
<td width="60%" class="sub1"> Click here after entering the pin-->
<button name="button" class="button" type="submit">Enter</button>

<p class="sub">Enter your account number:</p> <input type="text" name="user_id" align="center" class="txttop">
<p class="sub">Enter your pin:</p> <input type="password" name="pin" align="center" maxlength="4" class="txtbot">
</form>
</td></tr>
</table>
</body>
</html>