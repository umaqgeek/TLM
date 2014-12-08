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
$conn = mysql_connect($dbhost,$dbuser,$dbpass);


if(! $conn)
{
	die('could not connect: '. mysql_error());
}
if(isset($_GET['Modify']))
{
	$id = $_GET['Modify'];
	$sql = mysql_query("SELECT * FROM staff");
	$row = mysql_fetch_array($sql);
}
if(isset($_POST['inStaffName']))
{
	$inStaffName = $_POST['inStaffName'];
	$StaffID = $_POST['StaffID'];
	$sql = "UPDATE staff SET StaffName='$inStaffName' WHERE StaffID='$StaffID'";
	$res = mysql_query($sql) or die ("could not update".mysql_error());
	echo "<meta http-equiv='refresh' content='0;url=delete.php'>";
}
mysql_select_db('leave_app');
?>
<center>
<h1>modify</h1>
<form action="Modify.php" method="post">
	Name :<input type="text" name="inStaffName" value="<?php echo $row['StaffName']; ?>"/></br></br>
    <input type="hidden" name="StaffID" value="<?php echo $row['StaffID']; ?>"/></br></br>
    <input type="Submit" value="Modify"/>
</form>
<center>
<?php
