
<center>

<table width="630" border="2" rules="all" >
	<tr>
	<th>No</th>
    <th>Name</th>
    <th>IC Number</th>
    <th>Address</th>
    <th>Gender</th>
    <th>Action</th>
</tr>
 <?php 

	$i=1;
	foreach($result as $row){


	 echo "<tr>";
	 echo "<td align='center'>".$i."</td>";
	 echo "<td align='center'>".$row->name."</td>";
	 echo "<td align='center'>".$row->no_ic."</td>";
	 echo "<td align='center'>".$row->address."</td>";
	 echo "<td align='center'>".$row->gender."</td>";
	 echo "<td align='center'><a href='register/add_details?ic=$row->no_ic'>Add Description</a></td><br>";


$i++;
 }
?>
</table></br>
<a href="<?php echo base_url()?>register/main"><input type="button" name="back" value="main menu"/></a>
</center>