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
<h1>Add Staff</h1>
<form action="ConfirmAdd.php" method="POST">
<table border="0" width="400">
<tr><td><b>Name:</b></td><td> <input size="50" type="text" name="StaffName"/></td></tr>
<tr><td><b>IC No. :</b></td><td> <input size="50" type="text" name="StaffIC"/></td></tr>
<tr><td><b>Date of Birth:</b></td><td> <input size="50" type="date" name="StaffDOB"/></td></tr>
<tr><td><b>Gender:</b></td><td> <input size="50" type="text" name="StaffGender"/></td></tr>
<tr><td><b>Address:</b> </td><td><input size="50" type="text" name="StaffAddress"/></td></tr>
<tr><td><b>Phone no.:</b> </td><td><input size="50" type="text" name="StaffContactNo"/></td></tr>
<tr><td><b>Email:</b></td><td> <input size="50" type="text" name="StaffEmail"/></td></tr>
<tr><td><b>type:</b></td><td> <input size="50" type="text" name="StaffType"/></td></tr>
<tr><td><b>Username:</b> </td><td><input size="50" type="text" name="StaffUsername"/></td></tr>
<tr><td><b>Password:</b> </td><td><input size="50" type="text" name="StaffPassword"/></td></tr>
</table><br /><tr><td colspan="2"><center>
<input type="submit" value="Add"/></center></td></tr>
</form>
</center>
</body>
