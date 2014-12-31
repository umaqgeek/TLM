<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="Layout.css" rel="stylesheet" type="text/css" />
<link href="Menu.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body m background="blur.jpg">
<div id="Container">
<div id="Head"></div>
<div id="Navbar"></div>
<nav>
<ul>
    <li><img src="tuffah1.jpg" width="180" height="60" /></li>
	<li><b><a href="profile admin.php">Profile</a></b></li>
    <li><b><a href="leave application admin.php">Leave application</a></b></li>
    <li><b><a href="leave History.php">Leave history</a></b></li>
    <li><b><a href="account admin.php">Account</a></b></li>

</ul>
</nav>
<div id="Content"></div>
<div id="Footer">
</div>
</div>
<?php

$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "leave_app";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);


	$sql = mysql_query("SELECT * FROM staff WHERE StaffType='admin'");
	$res = mysql_fetch_array($sql);

?>
<center>
<h1>Enter New Password</h1>
<fieldset style="width:20%">
<p><b>your old password = "<?php echo $res['StaffPassword'];?>"</b></p>
</fieldset>
</br>
</br>
<form action="ChangePswd.php" method="POST">
<table border="0" width="400">
<tr><td><b>New Password :</b></td><td> <input  type="password" name="newpass"/></td></tr>


</table><br /><tr><td colspan="2"><center>
<input type="submit" name="submit" value="submit"/></center></td></tr>
</form>
<center>
<?php
if(isset($_POST['submit']))
{

	$sql = "UPDATE staff SET StaffPassword='$_POST[newpass]' WHERE StaffType='admin'";
	$res = mysql_query($sql) or die ("could not update".mysql_error());
	echo "Password has been Change";
	Header("Location:account.php");
}
?>
