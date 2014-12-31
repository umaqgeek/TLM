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
	$res = mysql_fetch_array($sql);

?>
<center>
<h1>Enter New Password</h1>
<fieldset style="width:20%">
<p><b>your old password = "<?php echo $res['StaffPassword'];?>"</b></p>
</fieldset>
</br>
</br>
<form action="ChangePswd.php" method="POST">
<table border="0" width="400">
<tr><td><b>New Password :</b></td><td> <input  type="password" name="newpass"/></td></tr>
<tr><td></td><td> <input  type="hidden" name="ID" value="<?php echo $id;?>"/></td></tr>

</table><br /><tr><td colspan="2"><center>
<input type="submit" name="submit" value="submit"/></center></td></tr>
</form>
<center>
<?php
if(isset($_POST['newpass'])){
$newpass = $_POST['newpass'];

	if ($newpass != ''){
	$sql = "UPDATE staff SET StaffPassword='$_POST[newpass]' WHERE StaffID= $_POST[ID]";
	$res = mysql_query($sql) or die ("could not update".mysql_error());
	echo "Password has been Change";
	Header("Location:account.php");
}

else{
 echo "please fill the form";
}}
?>
