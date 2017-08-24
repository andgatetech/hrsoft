jQuery(document).ready(function() {
	$("#employee-info-save").click(function(){
		alert( "Employee enformation saved." );
		$( "#employee-info-form" ).submit(function(  ) {
		  
		  event.preventDefault();
		});
	});
   
});