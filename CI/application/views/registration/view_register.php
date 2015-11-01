<h1> REGISTER </h1>
<fieldset style="width:30%">
<form action="<?php echo base_url()?>register/register_user" method="POST">
	<div>
		<label for="name">Name: </label>
		<input type="text" value="<?php echo set_value('name') ;?>" name="name" placeholder="Name"/>
	</div>
		<div>
		<label for="ic_number">IC Number: </label>
		<input type="text" value="<?php echo set_value('ic_number') ;?>" name="ic_number" placeholder="IC Number"/>
	</div>
	<div>
		<label for="address">Address: </label>
		<input type="text" value="<?php echo set_value('address') ;?>" name="address" placeholder="Address"/>
	</div>
	<div>
		<label for="gender">Gender: </label>
		<select name="gender">
		<option value="" selected>Select Gender</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
	</select>
	</div>
	<div>
		<input type="submit" name="submit" value="register"/>
		<a href="<?php echo base_url()?>register/main"><input type="button" name="back" value="Back"/></a>

</form>
</fieldset>

