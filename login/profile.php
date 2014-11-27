
<body background="blur.jpg">
<link href="Layout.css" rel="stylesheet" type="text/css" />
<link href="Menu.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>profile</title>
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

</html>
<center>
<div id="profile"> 
<fieldset style="width:120% " >
<legend><h1>My Profile</h1></legend></br>

<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);

if(! $conn)
{
	die('could not connect: '. mysql_error());
}
$sql = 'SELECT StaffName, StaffIC, StaffGender, StaffAddress, StaffDOB, StaffContactNo, StaffEmail FROM staff WHERE StaffID = "2"';

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
?>
</fieldset>
</center>
</form>
</body>
</div>
