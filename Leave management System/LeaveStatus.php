<link href="Layout.css" rel="stylesheet" type="text/css" />
<link href="Menu.css" rel="stylesheet" type="text/css" />

<title>Untitled Document</title>
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
<h1> leave status</h1>
<table width="800" border="2" rules="all" >
	<tr>
	<th>No</th>
    <th>Leave Start</th>
    <th>Leave End</th>
    <th>Note</th>
    <th>Status</th>
    
    </tr>

<?php
session_start();
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);

$id = $_SESSION['StaffID'];
$name = $_SESSION['StaffName'];
$sql = "SELECT * FROM leave1 WHERE StaffName = '$name'";

mysql_select_db('leave_app');
$retval = mysql_query($sql, $conn);
if(! $retval)
{
	die('could not get data: '. mysql_error());
}
$i=1;
while ($res = mysql_fetch_array($retval))
{
	 echo "<tr>";
	 echo "<td align='center'>".$i."</td>";
	 echo "<td align='center'>".$res['LeaveFromDt']."</td>";
	 echo "<td align='center'>".$res['LeaveToDt']."</td>";
	 echo "<td align='center'>".$res['Note']."</td>";
	 echo "<td align='center'>".$res['LeaveStatus']."</td>";
	 $i++;
 }
?>
</center>
