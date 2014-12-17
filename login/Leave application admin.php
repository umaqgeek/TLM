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

<center>
<table width="900" border="1" rules="all" >
	<tr>
	<th>No</th>
    <th>Name</th>
    <th>Leave Start</th>
    <th>Leave End</th>
    <th>Note</th>
    <th>Status</th>
    <th>Action</th>
    
    </tr>
 
<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);

if(! $conn)
{
	die('could not connect: '. mysql_error());
}
$sql = "SELECT * FROM leave1";

mysql_select_db('leave_app');
$retval = mysql_query($sql,$conn);
if(! $retval)
{
	die('could not get data: '. mysql_error());
}
$i=1;
while ($res = mysql_fetch_array($retval))
{
	 echo "<tr>";
	 echo "<td align='center'>".$i."</td>";
	 echo "<td align='center'>".$res['StaffName']."</td>";
	 echo "<td align='center'>".$res['LeaveFromDt']."</td>";
	 echo "<td align='center'>".$res['LeaveToDt']."</td>";
	 echo "<td align='center'>".$res['Note']."</td>";
	 echo "<td align='center'>".$res['LeaveStatus']."</td>";
	 echo "<td align='center'><a href='ApproveLeave.php?status=$res[LeaveID]'>Approve</a><span>  </span><a href='DeleteLeave.php?Delete=$res[LeaveID]'>Delete</a></td><br>";
	 $i++;
 }
?>
</center>