<h2>Profile</h2>


<?php 
	foreach($result as $row){
		echo "Name : $row->name </br>";
		echo "IC Number : $row->no_ic </br>";
		echo "Address : $row->address </br>";
		echo "Gender : $row->gender </br>";


	}

?>
<form action="<?php echo base_url()?>register/add_to_queue" method="POST">
	<div>
		<input type="hidden" value="<?php echo $row->name ;?>" name="name"/>
		<input type="hidden" value="<?php echo $row->no_ic ;?>" name="ic_number"/>
		<input type="hidden" value="<?php echo $row->address ;?>" name="address"/>
		<input type="hidden" value="<?php echo $row->gender ;?>" name="gender"/>
	

		<input type="submit" name="submit" value="Add To Queue"/>
		<a href="<?php echo base_url()?>register/searcher"><input type="button" name="back" value="Back"/></a>
</div>
</form>

