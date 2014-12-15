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
<center>
<h1>Leave application</h1></center>
<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('leave_app');

if(! $conn)
{
	die('could not connect: '. mysql_error());
}
{
	$sql = mysql_query("SELECT * FROM leave1");
	$rows = mysql_fetch_array($sql);
}
?>
<center>
<table width="500" border="1">
	<tr><td>name</td><td>Leave Start</td><td>Leave End</td><td>Note</td></td><td>Status</td></tr>
	<tr><td><?php echo $rows['StaffName'];?></td><td><?php echo $rows['LeaveFromDt'];?></td><td><?php echo $rows['LeaveToDt'];?></td><td><?php echo $rows['Note'];?></td><td><input type="checkbox"></td></tr>
    
    </table><br />
     <input type="button" value="Approve"><span>    </span><input type="button" value="Decline">
</center>