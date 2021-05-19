<html>
<head><title></title>
<body>
<input type='text' id='userinput' placeholder="What are you looking for?" style="width:500px;border-radius:10px">
<button onclick='fetchdata();' class='button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0' id='myBtn'>Search</button>
<div id='target'></div>
</body>
</html>
<script src='js/jquery.min.js'></script>
<script>
	var input = document.getElementById("userinput");
	input.addEventListener("keyup", function(event) {
    	event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("myBtn").click();
    }
	});

function fetchdata(){

	var x = $("#userinput").val();
	$("#bts").hide();
	$("#target").html("<br><img src='images/loader.gif'><em>Searching...</em>");
	$.ajax({
		url: "test.php",
		method: "POST",
		data:{
			term : x
		},
		success: function(retval){
			$("#target").html(retval);
			$("#bts").show();
		}
	});

}
</script>