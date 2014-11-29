<?php
include("config.php");

?>
<body background="blur.jpg">
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
<h1 align="center">Leave application</h1>
<center>
<table width="568" height="286" border="3" align="center" >
<tr>
<td>Name</td><td> : </td><td> <input size="70" type="text" name="StaffName"/></td>
</tr>
<tr>
<td>Leave Type</td><td></td><td><input name="Leave Type" type="checkbox" value="integer">Annual <br><input name="Leave Type" type="checkbox" value="integer">Sick <br><input name="Leave Type" type="checkbox" value="integer">Family <br><input name="Leave Type" type="checkbox" value="integer">Study <br><input name="Leave Type" type="checkbox" value="integer">Unpaid <br><input name="Leave Type" type="checkbox" value="integer">Other<br></td>
</tr>
<tr>
<td>Leave Available</td><td> : </td><td><center>30 days</center></td>
</tr>
<tr>
<td>Date Range</td><td> : </td><td><center>From :<input type="Datetime" name="LeaveFromDt"/> -     to :<input type="Datetime" name="LeaveToDt"/></center><center></td></td>
</tr>
<tr>
<td>Leave Requested</td><td> : </td><td><center>day</center></td>
</tr>
<tr>
<td>Note</td><td> : </td><td><textarea name="Note" cols="73" rows="3"></textarea></td></td>
</tr>

</table></br>
<input type="submit" value="Submit"/>
</center>
</body>
</html>


