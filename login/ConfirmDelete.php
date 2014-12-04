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
<h1>Delete Staff</h1>
<form action="ConfirmDelete.php" method="POST">
    <b>Enter Staff ID:</b> <input type="text" name="StaffID"/></br></br>
    <centre>
<input type="submit" value="Search"/>
</form>
</center>
</br>
<center>
<?php
$Delete = $_POST['Delete'];
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);

if(! $conn)

{
	die('could not connect: '. mysql_error());
}
if (isset($_POST['Delete'])){
$Delete = $_POST['Delete'];
$sql = 'SELECT StaffName, StaffIC, StaffGender, StaffAddress, StaffDOB, StaffContactNo, StaffEmail FROM staff WHERE StaffID ="'.$Delete.'"';

mysql_select_db('leave_app');
$retval = mysql_query($sql, $conn);
if(! $retval)
{
	die('could not get data: '. mysql_error());
}
while ($rows = mysql_fetch_array($retval,MYSQL_ASSOC))
{
	echo "<b>Name : {$rows['StaffName']} </b><br><br>".
	     "<b>IC number : {$rows['StaffIC']} </b><br><br>".
		 "<b>Gender : {$rows['StaffGender']} </b><br><br>".
		 "<b>Address : {$rows['StaffAddress']} </b><br><br>".
		 "<b>Date Of Birth : {$rows['StaffDOB']} </b><br><br>".
		 "<b>Phone No. : {$rows['StaffContactNo']} </b><br><br>".
		 "<b>Email : {$rows['StaffEmail']} </b><br><br>";
}
mysql_close($conn);
}

?>
</center>
<center>
<a href="LastDelete.php"><input type="submit" value="delete"/>
</a></center>
