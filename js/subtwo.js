$(document).ready(function(){
	$('#to_saveC').click(function(){
		var codef= $('#code_value').val();
		$.ajax({
			url: 'subtwo.php',
			type: 'post',
			data: 'for_code='+codef,
			success: function(){

			}
		})
	});

	

});