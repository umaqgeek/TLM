<?php
include("config.php");

?>
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


$sql = "INSERT INTO leave1 ( LeaveFromDt, LeaveToDt, LeaveStatus, Note) VALUES('$LeaveFromDt','$LeaveToDt','$Status','$Note')";

mysql_select_db('leave_app');
$retval = mysql_query($sql, $conn);
if($retval)
{
	echo "<b>SUCCESS!</b>";
	
}
else{
	die('could not get data: '. mysql_error());;
}
?>
<br /><br />
<a href="leave_app.php"><input type="submit" value="Back"/></a>

</center>