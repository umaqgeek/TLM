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
mysql_select_db('leave_app');
if(! $conn)
{
	die('could not connect: '. mysql_error());
}
$LeaveFromDt = $_POST['LeaveFromDt'];
$LeaveToDt = $_POST['LeaveToDt'];
$Status = $_POST['Status'];
$Note = $_POST['Note'];
$nn = $_POST['name'];
$id = $_POST['id'];

if ($LeaveFromDt != ''&& $LeaveToDt !=''&& $Status != ''&& $Note !=''&& $nn != ''){
	
$seq = "SELECT * FROM staff WHERE StaffID = $id";
$sa = mysql_query($seq);
$query = mysql_fetch_array($sa);
$leavebal = $query['LeaveBal'];

if ($leavebal > 0){
		
	$date1=date_create("$LeaveFromDt");
	$date2=date_create("$LeaveToDt");
	$diff=date_diff($date1,$date2);
	$Leave = $diff->format("%a");
	$LeaveDay = $Leave + "1";
	
	if ($LeaveDay <= $leavebal){
	$sql = "INSERT INTO leave1 ( LeaveFromDt, LeaveToDt, LeaveDay, LeaveStatus, StaffName, StaffID, Note) VALUES('$LeaveFromDt','$LeaveToDt','$LeaveDay','$Status','$nn', '$id', '$Note')";

	

	$retval = mysql_query($sql, $conn);
		if($retval)
		{
			echo "<b>SUCCESS!</b>";
		}
		else
		{
			die('could not get data: '. mysql_error());
		}}
		else{
			echo "your leave application more than available leave";
		}}
	else
	{
		echo "<b>Cant send your request! your leave available is 0 </b>";
	}}
else{
	echo "please fill the form";
	}
?>
<br /><br />
<a href="leave_app.php"><input type="submit" value="Back"/></a>

</center>