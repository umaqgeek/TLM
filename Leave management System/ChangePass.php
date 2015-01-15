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
                        	<td><b><a href="edit.php"><input id="searchsub" type="submit" value="Edit Profile"/>
              				</a></b></center></td>
                            <td></td><td></td>
                        	<td><input id="sea" type="submit" value="Change Password"/>
                            </a></center></td>
                        </tr>
                      </table><br/><br/>

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
						
							$sql = mysql_query("SELECT * FROM staff WHERE StaffID = $id");
							$res = mysql_fetch_array($sql);
						
?>
<center>
<h1>Enter New Password</h1><br/>
<fieldset style="width:40%">
</br><p><b>your old password = "<?php echo $res['StaffPassword'];?>"</b></p>
</fieldset>
</br>

<form action="ChangePass.php" method="POST">
<table border="0" width="400">
<tr><td><b>New Password :</b></td><td> <input  type="password" name="newpass"/></td></tr>
<tr><td></td><td></td></tr>
<tr><td><b>Re-enter Password :</b></td><td> <input  type="password" name="password"/></td></tr>
<tr><td></td><td> <input  type="hidden" name="ID" value="<?php echo $id;?>"/></td></tr>


</table><br /><tr><td colspan="2"><center>
<input id="searchsubmit" type="submit" name="submit" value="submit"/></center></td></tr>
</form>
<br/>
<center>
<?php
if(isset($_POST['newpass'])){
	
$newpass = $_POST['newpass'];
$password = $_POST['password'];

	if ($newpass != '' && $password != '' ){
		if ($newpass == $password){
		$sql = "UPDATE staff SET StaffPassword='$_POST[newpass]' WHERE StaffID= $_POST[ID]";
		$res = mysql_query($sql) or die ("could not update".mysql_error());
		echo "Password has been Change";
		Header("Location:success.php");
		}
		else{
			 echo "<b>The password didnt match!! </b>";
			}
	}
else{
 echo "<b>please fill the form !! </b>";
}}
?>
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
