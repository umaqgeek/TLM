<script src="asset/js/jquery-2.1.3.js"></script>

<script>
$(document).ready(function(){
	
		$("div").click(function(){
		$(this).html("");
		$(this).css("background-repeat", "no-repeat")
		$(this).css("background-color", "#fff");
		var c=0;
		for (i=0; i<39; i++){
			$(this)<?php
				for($i=1; $i<=39; $i++){
				echo ".animate({opacity:1.0, marginLeft:c+=0},180, function(){ $(this).css(\"background-image\", \"url('asset/image/c".$i.".jpg')\");
				})";
				}
			?>;
		}
	});	
});
</script>

<div style="height:400; width:1200; background-image:url(asset/image/bg.jpg);"></div>
