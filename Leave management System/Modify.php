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


if(isset($_GET['Modify']))
{
	$id = $_GET['Modify'];
	$sql = mysql_query("SELECT * FROM staff WHERE StaffID= $id");
	$row = mysql_fetch_array($sql);
}

?>
<center>
<h1>Modify</h1>
<form action="Modify.php" method="POST">
<table border="0" width="400">
<tr><td><b>Name:</b></td><td> <input size="50" type="text" name="StaffName" value="<?php echo $row['StaffName'];?>"/></td></tr>
<tr><td><b>IC Number:</b></td><td> <input size="50" type="text" name="StaffIC" value="<?php echo $row['StaffIC'];?>"/></td></tr>
<tr><td><b>Date of Born:</b></td><td> <input size="50" type="date" name="StaffDOB" value="<?php echo $row['StaffDOB'];?>"/></td></tr>
<tr><td><b>Gender:</b></td><td> <input size="50" type="text" name="StaffGender" value="<?php echo $row['StaffGender'];?>"/></td></tr>
<tr><td><b>Address:</b></td><td> <input size="50" type="text" name="StaffAddress" value="<?php echo $row['StaffAddress'];?>"/></td></tr>
<tr><td><b>Phone No. :</b></td><td> <input size="50" type="text" name="StaffContactNo" value="<?php echo $row['StaffContactNo'];?>"/></td></tr>
<tr><td><b>Email:</b></td><td> <input size="50" type="text" name="StaffEmail" value="<?php echo $row['StaffEmail'];?>"/></td></tr>
<tr><td></td><td> <input  type="hidden" name="ID" value="<?php echo $id;?>"/></td></tr>
<tr><td><b>Level :</b></td><td> <input size="50" readonly="readonly" name="level" value="<?php echo $row['StaffType'];?>"/></td></tr>

</table><br /><tr><td colspan="2"><center>
<input type="submit" name="submit" value="Modify"/></center></td></tr>
</form>
<center>
<?php
if(isset($_POST['submit']))
{

	$sql = "UPDATE staff SET StaffName='$_POST[StaffName]',StaffIC='$_POST[StaffIC]',StaffDOB='$_POST[StaffDOB]',StaffGender='$_POST[StaffGender]',StaffAddress='$_POST[StaffAddress]',StaffContactNo='$_POST[StaffContactNo]',StaffEmail='$_POST[StaffEmail]', StaffType='$_POST[level]' WHERE StaffID= $_POST[ID]";
	$res = mysql_query($sql) or die ("could not update".mysql_error());
	echo "Staff Has Been Modified";
	Header("Location:delete.php");
}
?>
