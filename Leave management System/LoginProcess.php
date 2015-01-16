  <?php
include("config.php");
date_default_timezone_set("Asia/Kuala_lumpur");

if (isset($_POST['StaffUsername'])){
$StaffUsername = $_POST['StaffUsername'];
$StaffPassword = $_POST['StaffPassword'];

	if ($StaffUsername != ''&& $StaffPassword !=''){
	
	$sql = "SELECT * FROM staff WHERE StaffUsername='".$StaffUsername."' AND StaffPassword='".$StaffPassword."'LIMIT 1";
	
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res, MYSQL_ASSOC);
	$year = $row['Year'];
	$Today = date("Y");

		if (mysql_num_rows($res) == 1){
		$_SESSION['StaffType']=$row['StaffType'];
	
			if ($_SESSION['StaffType']=='admin'){
			$_SESSION['StaffID']=$row['StaffID'];
			$_SESSION['StaffName']=$row['StaffName'];
			Header ("Location: indexadd.php");
			exit();
			}

			else{
				if($Today == $year){
			$_SESSION['StaffID']=$row['StaffID'];
			$_SESSION['StaffName']=$row['StaffName'];
			Header ("Location: indexs.php");
			exit();
				}
				else{
				$query = "UPDATE staff SET Year='$Today', LeaveBal='14' WHERE StaffUsername='".$StaffUsername."' AND StaffPassword='".$StaffPassword."'";
				$rus = mysql_query($query);
			$_SESSION['StaffID']=$row['StaffID'];
			$_SESSION['StaffName']=$row['StaffName'];
			Header ("Location: indexs.php");
			exit();
			}}}
	else{
	Header ("Location: loginfail.php");
}}
else{
	Header ("Location: loginfail.php");
}}
?>
