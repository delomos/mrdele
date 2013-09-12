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
function close_topbar(){
	$("#topbar").slideUp('slow');

	}
	
	$(".grid_image_overlay .heart_block").click(function(){
	$(this).find(".icon_emptyheart").hide();
$(this).parent(".select_favourite").addClass("favlist_expanded");

});
$(".grid_box .dropdown_trigger.your_fav .dropdown").hide();
$("#header .dropdown_trigger.your_fav .trigger_child").hide();
$(".heart_block .create_fav.trigger_parent .trigger_child ").hide();
$(".dropdown_trigger.your_fav > strong").click(function(){
	/*$(this).parent().find(".dropdown").slideToggle();*/
	$(this).parents(".favlist_expanded").toggleClass("movedup");
	});
	
	$(".create_fav.trigger_parent > label").click(function(){
		$(this).parent().find(".trigger_child").fadeIn("fast");
		$(this).addClass("active");
	
		$(this).parent().find(".fav_items").hide(); 
		});
	
	$(".create_fav.trigger_parent label.icon_plus .icon_cross").click(function(e){
	$(this).parents(".create_fav.trigger_parent").find(".trigger_child").fadeOut("fast");  e.stopPropagation(); 
	$(this).parents(".create_fav.trigger_parent").find(".fav_items").show("fast"); 
	$(this).parent("label.icon_plus").removeClass("active");
	
		});
		$(".dropdown_trigger.your_fav > strong").click(function(){
	$(this).parent().find(".dropdown").slideToggle();
	$(this).parent(".favlist_expanded").toggleClass("movedup");
	});
	
	
	

  
  $(document).ready(function(){
  $( '.grid_box .select_favourite' ).each(function() { 
     if($(this).hasClass('notloggedin')){
    $(this).find("strong").html("<a class='drop_image icon_heart'></a><em> Please <a href='#;'>sign in</a> or  <a href='#;'>sign up</a> in order to add to favourites</em>");
	
      }
  });
});
  
