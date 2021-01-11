jQuery(document).ready(function($) {
	$('.mobile_menu_button').click(function(){
		$('.mobile_menu_hide').removeClass('animate__backOutLeft');
		$('.mobile_menu_hide').css('display','flex');
		$('.mobile_menu_hide').css('width','100%');
	});
	$('#close_menu').click(function(event) {
		$('.mobile_menu_hide').addClass('animate__backOutLeft');
		setTimeout(function() {
			$('.mobile_menu_hide').css('display','none');
		}, 1000);
	});
	$('.close_menu_over').click(function(event) {
		$('.mobile_menu_hide').addClass('animate__backOutLeft');
		setTimeout(function() {
			$('.mobile_menu_hide').css('display','none');
		}, 1000);
	});
	
});
