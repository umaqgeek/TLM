<link rel="stylesheet" type="text/css" href="style.css">
<body background="blur.jpg">

<center>
<form  action='register.php' method='post'
    accept-charset='UTF-8'>
<div id="register"> 
<p><b>You Are Not Registered Yet.</b></p>
<fieldset>
<img src="title.png" width="417" height="61">
<legend><h1>Register</h1></legend></br>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='username' ><b>UserName:</b></label>
<input type='text' name='username' id='username' maxlength="50" /></br></br>
 
<label for='email' ><b>Email Address:</b></label>
<input type='text' name='email' id='email' maxlength="50" /></br></br>
 

<label for='password' ><b>Password:</b></label>
<input type='password' name='password' id='password' maxlength="50" /></br></br>
<input type='submit' name='Submit' value='Submit' />
 
</fieldset>
</center>
</form>