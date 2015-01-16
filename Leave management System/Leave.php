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
$id = $_SESSION['StaffID'];
$name = $_SESSION['StaffName'];

$sql = "SELECT LeaveBal FROM staff WHERE StaffID = $id";

mysql_select_db('leave_app');
$retval = mysql_query($sql, $conn);
if(! $retval)
{
	die('could not get data: '. mysql_error());
}
$rows = mysql_fetch_array($retval,MYSQL_ASSOC);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="logo">
		<img src="images/title.png" width="500" height="90">
	</div>

</div>
<div id="menu">
	<ul>
		<li><a href="indexs.php"><b>Profile</b></a></li>
		<li class="active"><a href="#"><b>Leave Application</b></a></li>
		<li><a href="status.php"><b>Status</b></a></li>
		<li><a href="account.php"><b>Account</b></a></li>
		<li><a href="logout.php"><b>Logout</b></a></li>
	</ul>
</div>
<div id="page">
	<div id="content">
		<div id="feature" class="box-orange">
			<h2 class="section"><b>Leave Application</b></h2><br />
				<h1>Leave Form</h1><br />
                <center><b>Name : <?php echo $name ?></b><br /></center><br />
                <center><?php echo "<b>Leave Available : {$rows['LeaveBal']} </b><br><br>";?></center>

                <center><form action="LeaveSubmit.php" method="POST">
<table border="0" width="500">
<tr><td><b>Leave Start  :</b></td><td><input id="searchinput" name="LeaveFromDt" type="date" value="" size="50"><br></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><b>Leave End  :</b></td><td> <input id="searchinput" size="50" type="date" name="LeaveToDt"/><br></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td><b>Note  :</b> </td><td><input height="40" size="50" type="text" name="Note"/><br></td></tr>
<input type="hidden" name="name" value="<?php echo $name;?>"/>
<input type="hidden" name="id" value="<?php echo $id;?>"/>
<input type="hidden" name="Status" value="pending"/>

</table><br /><tr><td colspan="2"><center>
<input id="searchsubmit" type="submit" value="submit"/></center></td></tr>
</form>
				</center>
			</div>
		</div>
	</div>
    
	<div id="sidebar" class="two-cols">
    				<?php
				date_default_timezone_set("Asia/Kuala_lumpur");
				$date=date("D-M-Y");
				$kl =date("d-m-Y");
				
				echo "<b><o>$date</o></b><br/>";
				echo "<b><o>$kl</o></b><br/>";
				
				
				?><br />
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
