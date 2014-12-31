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
<h1>Staff Profile</h1><br><br>
<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "leave_app";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);


if(isset($_GET['search']))
{
	$id = $_GET['search'];
	$sql = mysql_query("SELECT * FROM staff WHERE StaffID= $id");
    $is = mysql_fetch_array($sql);

mysql_select_db('leave_app');

if ($rows = $is)
{
	echo "<b>Name : {$rows['StaffName']} </b><br><br>".
	     "<b>IC number : {$rows['StaffIC']} </b><br><br>".
		 "<b>Gender : {$rows['StaffGender']} </b><br><br>".
		 "<b>Address : {$rows['StaffAddress']} </b><br><br>".
		 "<b>Date Of Birth : {$rows['StaffDOB']} </b><br><br>".
		 "<b>Phone No. : {$rows['StaffContactNo']} </b><br><br>".
		 "<b>Email : {$rows['StaffEmail']} </b><br><br>";
}

}
?>
</center>