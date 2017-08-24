jQuery(document).ready(function() {

	jQuery.hideAllView = function hideAllView(){
		$("#employee-onboarding").hide();
		$("#employee-transfers").hide();
		$("#employee-transfer-information").hide();
		$("#employee-promotions").hide();
		$("#employee-promotion-information").hide();
		$("#employee-achievements").hide();
		$("#employee-achievement-information").hide();
	}
  
    
    $.hideAllView();
    
	
	/**
         * navigation declaration
         */ 
        //onboarding
	$("#menu-onboarding").click(function(){
		$(".page-breadcrumb-title").text("Employee Dashboard");
		$(".page-title").text("Employee Information");
                $.hideAllView();
		$("#employee-onboarding").show();
	});
        // transfer
        $("#menu-transfers").click(function(){
		$(".page-breadcrumb-title").text("Employee Dashboard");
		$(".page-title").text("Employee Transfer");
                $.hideAllView();
		$("#employee-transfers").show();
	});
        // promotion
        $("#menu-promotions").click(function(){
		$(".page-breadcrumb-title").text("Employee Dashboard");
		$(".page-title").text("Employee Promotion");
                $.hideAllView();
		$("#employee-promotions").show();
	});
        // achievement
        $("#menu-achievements").click(function(){
		$(".page-breadcrumb-title").text("Employee Dashboard");
		$(".page-title").text("Employee Achievement");
                $.hideAllView();
		$("#employee-achievements").show();
	});
	
});