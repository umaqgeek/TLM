<h2>insert IC Number</h2>
<form action="<?php echo base_url()?>register/search_patient" method="POST">
	<div>
		<label for="ic_number">IC Number : </label>
		<input type="text" value="<?php echo set_value('ic_number') ;?>" name="ic_number" placeholder="12 digit"/>
	

		<input type="submit" name="submit" value="search"/>
		<a href="<?php echo base_url()?>register/main"><input type="button" name="back" value="Back"/></a>
</div>
</form>