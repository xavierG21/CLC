$(document).ready(function(){

	$('#fpalawan').click(function(event){


		tosubmit("Palawan");


	});



	$('#fpaypal').click(function(){
		tosubmit("Paypal");
		
	});
	
	function tosubmit(ffpayment){
		var checkedValue = document.getElementsByName('radio');
		var valueDatapass='';
		var palawan = ffpayment;
		if(checkedValue[0].checked){
			valueDatapass='delivery';
		}else valueDatapass ='pick-up';
		$.ajax({
			url: 'sub.php',
			type: 'POST',
			data: 'methodVal='+valueDatapass+"&fpayment="+ffpayment,
			success: function(){
				
			}	
		});
	}
});
