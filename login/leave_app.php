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
<h1>Leave Application</h1>
<form action="LeaveSubmit.php" method="POST">
<table border="0" width="500">
<tr><td><b>Leave date (From):</b></td><td><input name="LeaveFromDt" type="date" value="" size="50"><br></td></tr>
<tr><td><b>Leave date (To):</b></td><td> <input size="50" type="date" name="LeaveToDt"/><br></td></tr>
<tr><td><b>Note:</b> </td><td><input height="40" size="50" type="text" name="Note"/><br></td></tr>
<input type="hidden" name="Status" value="pending"/>

</table><br /><tr><td colspan="2"><center>
<input type="submit" value="submit"/></center></td></tr>
</form>
</center>
</body>
</html>


