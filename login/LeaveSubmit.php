<body background="blur.jpg">
<link href="Layout.css" rel="stylesheet" type="text/css" />
<link href="Menu.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body m background="blur.jpg">
<div id="Container">
<div id="Head"></div>
<div id="Navbar"></div>
<nav>
<ul>
    <li><a href="main menu.php"><img src="tuffah1.jpg" width="180" height="60" /></li>
	<li><b><a href="profile.php">Profile</a></b></li>
    <li><b><a href="leave_app.php">Leave application</a></b></li>
    <li><b><a href="LeaveStatus.php">leave status</a></b></li>
    <li><b><a href="account.php">Account</a></b></li>

</ul>
</nav>
<div id="Content"></div>
<div id="Footer">
</div>
</div>
<center>
<?php
session_start();
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
	die('could not connect: '. mysql_error());
}
$LeaveFromDt = $_POST['LeaveFromDt'];
$LeaveToDt = $_POST['LeaveToDt'];
$Status = $_POST['Status'];
$Note = $_POST['Note'];
$nn = $_POST['name'];

if ($LeaveFromDt != ''&& $LeaveToDt !=''&& $Status != ''&& $Note !=''&& $nn != ''){
$sql = "INSERT INTO leave1 ( LeaveFromDt, LeaveToDt, LeaveStatus, StaffName, Note) VALUES('$LeaveFromDt','$LeaveToDt','$Status','$nn','$Note')";

$bal = "SELECT * FROM staff WHERE StaffName = '$nn'";
$res = mysql_query($bal);
 
mysql_select_db('leave_app');

$retval = mysql_query($sql, $conn);
if($retval)
{
	$_SESSION['LeaveBal']= $res['LeaveBal'];
	$LB=$_SESSION['LeaveBal'];
	if ($LB<='14'){
	echo "<b>SUCCESS!</b>";
	}
	else{
		echo "Your Leave Balance is over than 14";
	}}
else{
	die('could not get data: '. mysql_error());
}}
else{
	echo "please fill the form";
	}
?>
<br /><br />
<a href="leave_app.php"><input type="submit" value="Back"/></a>

</center>