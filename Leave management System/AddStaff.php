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
                 <table border="0">
						<tr>
                        	<td><b><a href="#"><input id="sea" type="submit" value="Add Staff"/>
              				</a></b></center></td>
                            <td></td><td></td>
                        	<td><a href="view.php"><input id="searchsub" type="submit" value="View Staff"/>
                            </a></center></td>
                            <td></td><td></td>
                        	<td><a href="update.php"><input id="searchsub" type="submit" value="Update Staff"/>
                            </a></center></td>
                            <td></td><td></td>
                        	<td><a href="Change.php"><input id="searchsub" type="submit" value="Change Password"/>
                            </a></center></td>
                        </tr>
                      </table><br/>
                <form action="ConfirmAdd.php" method="POST">
<table border="0" width="400">
<tr><td><b>Name:</b></td><td> <input size="50" type="text" name="StaffName"/></td></tr>
<tr><td><b>IC No. :</b></td><td> <input size="50" type="text" name="StaffIC"/></td></tr>
<tr><td><b>Date of Birth:</b></td><td> <input size="50" type="date" name="StaffDOB"/></td></tr>
<tr><td><b>Gender:</b></td><td> <input size="50" type="text" name="StaffGender"/></td></tr>
<tr><td><b>Address:</b> </td><td><input size="50" type="text" name="StaffAddress"/></td></tr>
<tr><td><b>Phone no.:</b> </td><td><input size="50" type="text" name="StaffContactNo"/></td></tr>
<tr><td><b>Email:</b></td><td> <input size="50" type="text" name="StaffEmail"/></td></tr>
<tr><td><b>type:</b></td><td> <input name="StaffType" type="text" size="50" readonly="readonly" value="staff"/></td></tr>
<tr><td><b>Username:</b> </td><td><input size="50" type="text" name="StaffUsername"/></td></tr>
<tr><td><b>Password:</b> </td><td><input size="50" type="text" name="StaffPassword"/></td></tr>
</table><br /><tr><td colspan="2"><center>
<input id="searchsubmit" type="submit" value="Add"/></center></td></tr>
</form>
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
