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
		<li><a href="index.php"><b>Profile</b></a></li>
		<li><a href="Leave.php"><b>Leave Application</b></a></li>
		<li><a href="status.php"><b>Status</b></a></li>
		<li class="active"><a href="#"><b>Account</b></a></li>
		<li><a href="logout.php"><b>Logout</b></a></li>
	</ul>
</div>
<div id="page">
	<div id="content">
		<div id="feature" class="box-orange">
			<h2 class="section"><b>Account</b></h2><br />
				<h1>Account Setting</h1><br />
                <center>

                      <table border="0">
						<tr>
                        	<td><b><input id="sea" type="submit" value="Edit Profile"/>
              				</a></b></center></td>
                            <td></td><td></td>
                        	<td><a href="ChangePass.php"><input id="searchsub" type="submit" value="Change Password"/>
                            </a></center></td>
                        </tr>
                      </table><br /><br />




<?php
session_start();
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "leave_app";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

$id = $_SESSION['StaffID'];
$name = $_SESSION['StaffName'];

	$sql = mysql_query("SELECT * FROM staff WHERE StaffID= $id");
	$row = mysql_fetch_array($sql);


?>
<center>
<form action="edit.php" method="POST">
<table border="0" width="500">
<tr><td><b>Name:</b></td><td><input id="searchinput" size="50" type="text" name="StaffName" value="<?php echo $row['StaffName'];?>"/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><b>IC Number:</b></td><td> <input id="searchinput" size="50" type="text" name="StaffIC" value="<?php echo $row['StaffIC'];?>"/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><b>Date of Born:</b></td><td> <input id="searchinput" size="50" type="date" name="StaffDOB" value="<?php echo $row['StaffDOB'];?>"/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><b>Gender:</b></td><td> <input id="searchinput" size="50" type="text" name="StaffGender" value="<?php echo $row['StaffGender'];?>"/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><b>Address:</b></td><td> <input id="searchinput" size="50" type="text" name="StaffAddress" value="<?php echo $row['StaffAddress'];?>"/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><b>Phone No. :</b></td><td> <input id="searchinput" size="50" type="text" name="StaffContactNo" value="<?php echo $row['StaffContactNo'];?>"/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><b>Email:</b></td><td> <input id="searchinput" size="50" type="text" name="StaffEmail" value="<?php echo $row['StaffEmail'];?>"/></td></tr>
<tr><td></td><td> <input  type="hidden" name="ID" value="<?php echo $id;?>"/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><b>Level :</b></td><td> <input id="searchinput" size="50" readonly name="level" value="<?php echo $row['StaffType'];?>"/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
</table><br /><tr><td colspan="2"><center>
<input id="searchsubmit" type="submit" name="submit" value="Modify"/></center></td></tr>
</form>
<center>
<?php
if(isset($_POST['submit']))
{

	$sql = "UPDATE staff SET StaffName='$_POST[StaffName]',StaffIC='$_POST[StaffIC]',StaffDOB='$_POST[StaffDOB]',StaffGender='$_POST[StaffGender]',StaffAddress='$_POST[StaffAddress]',StaffContactNo='$_POST[StaffContactNo]',StaffEmail='$_POST[StaffEmail]', StaffType='$_POST[level]' WHERE StaffID= $_POST[ID]";
	$res = mysql_query($sql) or die ("could not update".mysql_error());
	Header("Location:success.php");
}
?>
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