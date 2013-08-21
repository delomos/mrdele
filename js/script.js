// JavaScript Document

$(document).ready(function ()
                  {

	window.ddzSlider = $('.home_slider').ddzSlider({animSpeed:800,easing:"swing",speed:10});
	window.ddzSlider = $('.grid_gall_1').ddzSlider({animSpeed:800,easing:"linear",next:"#slider2Next_1",prev:"#slider2Back_1", speed:7, auto:false});
		window.ddzSlider = $('.grid_gall_2').ddzSlider({animSpeed:800,easing:"linear",next:"#slider2Next_2",prev:"#slider2Back_2", speed:7, auto:false});
			window.ddzSlider = $('.grid_gall_3').ddzSlider({animSpeed:800,easing:"linear",next:"#slider2Next_3",prev:"#slider2Back_3", speed:7, auto:false});



	 
});

$(".return_confirmation").addClass("hide");
$(".order_track td.status .big_button").click(function(){
$(this).parent(".status").parent().find(".return_confirmation").removeClass("hide").addClass("show");
});
$(".return_confirmation .cancel").click(function(){
$(this).parents(".return_confirmation").addClass("hide");
});
$(".return_confirmation .return").click(function(){
$(this).parents(".return_confirmation").find(".floatRight").hide();
$(this).parents(".return_confirmation").find("label").html("We are now notifed that you want to return this item.");

	
});

$(".input_group_wrap .input_group input").fadeOut();
$(".edit_account_info .input_group_wrap > label > span").removeClass("icon_cross");
$(".edit_account_info .input_group_wrap label .icon_pencil").click(function(){
	$(this).removeClass("icon_pencil").addClass("icon_cross");
	$(this).parents(".input_group_wrap").find("input").fadeIn();
		$(this).parents(".input_group_wrap").find("em").hide(10);
});
