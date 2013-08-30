// JavaScript Document



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


var $overlay = $('<div class="overlay"><div class="popup"></div></div>');
var loginpopdata = $('.login_pop', '#footer');
var signuppopdata = $('.signup_pop', '#footer');

$('body').append($overlay);
$('.login_pop').hide();
$('.signup_pop').hide();

$(".login_but").click(function(){
$(".popup").html(loginpopdata);
	$(".overlay").fadeIn(800).addClass('show');
	$(".overlay .login_pop").show();
	$(this).show();
	
});
$(".signup_but").click(function(){
	
$(".popup").html(signuppopdata);
	$(".overlay").fadeIn(800).addClass('show');
	$(".overlay .signup_pop").show();
	$(this).show();
	
});
/*$('.popup').click(function() {
	$(".overlay").removeClass('visible');
	console.log(this);

});*/

$(".popup_wrap").click(function(e){
  e.stopPropagation();
});

function close_popup(){
	$(".overlay").removeClass('show');
/*	$(".overlay .popup").hide();*/
	}
	
$('.fav_list').each(function(ele,val){
	var ulWidth = 0;
$(val).find("ul li").each(function() {
    ulWidth = ulWidth + $(this).outerWidth(true)+1;

});
$(val).find("ul").width(ulWidth);
 var element = $(val).find('.grid_gallery').jScrollPane();
     var api = element.data('jsp');
     element.bind(
          'mousewheel',
          function (event, delta, deltaX, deltaY)
          {
              api.scrollByX(delta * 60);
              return false;
          }
     );
	
	});	
	
$('.product_suggest').each(function(ele,val){
	var ulWidth = 0;
$(val).find("ul li").each(function() {
    ulWidth = ulWidth + $(this).outerWidth(true)+1;

});
$(val).find("ul").width(ulWidth);
 var element = $(val).find('.grid_gallery').jScrollPane();
     var api = element.data('jsp');
     element.bind(
          'mousewheel',
          function (event, delta, deltaX, deltaY)
          {
              api.scrollByX(delta * 60);
              return false;
          }
     );
	
	});		
	
	/*var ulWidth = 0;
$(".product_suggest ul li,.fav_list ul li").each(function() {
    ulWidth = ulWidth + $(this).outerWidth(true)+1;

});
$(".product_suggest ul,.fav_list ul").width(ulWidth);
 var element = $('.product_suggest .grid_gallery,.fav_list .grid_gallery').jScrollPane();
     var api = element.data('jsp');
     element.bind(
          'mousewheel',
          function (event, delta, deltaX, deltaY)
          {
              api.scrollByX(delta * 60);
              return false;
          }
     );
*/
