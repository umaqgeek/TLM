	<?php
include("config.php");

if (isset($_POST['StaffUsername'])){
$StaffUsername = $_POST['StaffUsername'];
$StaffPassword = $_POST['StaffPassword'];

	if ($StaffUsername != ''&& $StaffPassword !=''){
	
	$sql = "SELECT * FROM staff WHERE StaffUsername='".$StaffUsername."' AND StaffPassword='".$StaffPassword."'LIMIT 1";

	$res = mysql_query($sql);
	$row = mysql_fetch_array($res, MYSQL_ASSOC);

		if (mysql_num_rows($res) == 1){
		$_SESSION['StaffType']=$row['StaffType'];
	
			if ($_SESSION['StaffType']=='admin'){
			Header ("Location: admin.php");
			exit();
			}
			else{
			Header ("Location: main menu.php");
			exit();
			}}
	else{
	echo "login fail";
}}
else{
	echo "login fail";
}}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body background="blur.jpg">
<div id="login"> 

<center><fieldset style="width:30%">
  <img src="title.png" width="417" height="61"></br>
  <img src="tuffah1.jpg" width="447" height="209"></br></br>
  <form action="login.php" method="POST">
    <b>Username:</b> <input type="text" name="StaffUsername"/></br></br>
    <b>Password:</b> <input type="password" name="StaffPassword"/></br></br>
    <centre>
<input type="submit" value="Login"/>
</form>
</fieldset>
</center>
</center>
</div>
