<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="set.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="logo">
		<img src="images/title.png" width="500" height="90">
	</div>

</div>
<div id="menu">
	<ul>
		<li><a href="indexadd.php"><b>Profile</b></a></li>
		<li><a href="Leaveadd.php"><b>Leave Application</b></a></li>
		<li><a href="history.php"><b>History</b></a></li>
		<li class="active"><a href="#"><b>Account</b></a></li>
		<li><a href="logout.php"><b>Logout</b></a></li>
	</ul>
</div>
<div id="page">
	<div id="content">
		<div id="feature" class="box-orange">
			<h2 class="section"><b>Account</b></h2><br />
				<h1>Add Staff</h1><br />
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
$StaffName = $_POST['StaffName'];
$StaffIC = $_POST['StaffIC'];
$StaffDOB = $_POST['StaffDOB'];
$StaffGender = $_POST['StaffGender'];
$StaffAddress = $_POST['StaffAddress'];
$StaffContactNo = $_POST['StaffContactNo'];
$StaffEmail = $_POST['StaffEmail'];
$StaffType = $_POST['StaffType'];
$StaffUsername = $_POST['StaffUsername'];
$StaffPassword = $_POST['StaffPassword'];

if ($StaffName != ''&& $StaffType !=''&& $StaffUsername != ''&& $StaffPassword !=''){
$sql = "INSERT INTO staff (StaffName,StaffIC,StaffDOB,StaffGender,StaffAddress,StaffContactNo,StaffEmail,StaffType, StaffUsername,StaffPassword) VALUES('$StaffName','$StaffIC','$StaffDOB','$StaffGender','$StaffAddress','$StaffContactNo','$StaffEmail','$StaffType','$StaffUsername','$StaffPassword')";

mysql_select_db('leave_app');
$retval = mysql_query($sql, $conn) or die ("please fill the form");
if($retval)
{
	echo "<b>SUCCESS!</b>";
	
}
else{
	die('could not get data: '. mysql_error());;
}}
else{ 
	echo "please fill the form";
}
?>
<br /><br />
<a href="accountadd.php"><input type="submit" value="Back"/></a>

</center>
                    
			</div>
		</div>
	</div>
    
	<div id="sidebar" class="two-cols">
    <img src="images/tuffah1.jpg" width="300"/><br /><br />
		<div class="col-one">
			<div class="box-pink">
            	
					<h2 class="section"><b>Tuffah Informatic</b></h2>
					<div class="content"><center>
                    	<a href="http://www.tuffah.info/">www.tuffah.info</a><br /><br />
                        <a href="https://www.facebook.com/tuffah.informatic">Facebook</a><br /><br />
                        <a href="http://www.tuffah.info/">bilal@tuffah.info</a><br /><br />
                        <p>013-614 8106</p>
                        
                        </center>
					</div>
			</div>
		</div>
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2014 Simpletex. All Rights Reserved | Designed by <a href="https://www.facebook.com/ezwan.shahrin">Ezwan shahrin</a></p>
	<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
</div>
<div align=center><a href='http://all-free-download.com/free-website-templates/'>www.tuffah.info</a></div></body>
</html>
