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
				<h1>Leave Form</h1><br /><br />
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

date_default_timezone_set("Asia/Kuala_lumpur");
$now =date("Y-m-d");

if ($LeaveFromDt != ''&& $LeaveToDt !=''&& $Status != ''&& $Note !=''&& $nn != ''){
	
$seq = "SELECT * FROM staff WHERE StaffID = $id";
$sa = mysql_query($seq);
$query = mysql_fetch_array($sa);
$leavebal = $query['LeaveBal'];

if ($LeaveFromDt >= $now){
if ($LeaveToDt >= $LeaveFromDt){
	if ($leavebal > 0){
		

	$startDate = $_POST['LeaveFromDt'];
	$endDate = $_POST['LeaveToDt'];
	$workingDays = 0;
 
	$startTimestamp = strtotime($startDate);
	$endTimestamp = strtotime($endDate);
 
		for($i=$startTimestamp; $i<=$endTimestamp; $i = $i+(60*60*24) ){
		if(date("N",$i) <= 6) $workingDays = $workingDays + 1;
			}
			$LeaveDay = $workingDays;
			
			if ($LeaveDay <= $leavebal){
					$sql = "INSERT INTO leave1 ( LeaveFromDt, LeaveToDt, LeaveDay, LeaveStatus, StaffName, StaffID, Note)
					VALUES('$LeaveFromDt','$LeaveToDt','$LeaveDay','$Status','$nn', '$id', '$Note')";

	

					$retval = mysql_query($sql, $conn);
					if($retval)
					{
						echo "<h1>SUCCESS!</h1><br/>";
						echo "<b><p>your application has been sent</p></b><br/>";
					}
					else{
						die('could not get data: '. mysql_error());
					}}
				else
				{
					echo "<b><p>your leave application more than available leave</p></b>";
				}}
		else{
			echo "<b><p>Cant send your request!</p></b>";
		}}
	else{
	echo "<b><p>invalid date requested</b></p>";
	}}
	else{
		echo"<b>you've entered the past day</b><br/>";
	}}
else{
echo "<b><p>please fill the form</b></p>";
}

?>
<br />
<a href="Leave.php"><input id="searchsubmit" type="submit" value="Back"/></a>

</center>
                    
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

		<div id="popupBoxOnePosition">
			<div class="popupBoxWrapper">
				<div class="popupBoxContent">
					<h3>Popup Box 1</h3>
					<p>You are currently viewing popup box 1.</p>
					<p>Click <a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');">here</a> to close popup box one.</p>
				</div>
			</div>
		</div>

		<div id="wrapper">

			<p>Click <a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');">here</a> to see popup box one.</p>

		</div><!-- wrapper end -->

	</body>

</html>
