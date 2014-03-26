// JavaScript Document
// For Linking From Within fertility.html to links on the samepage

$(function(){
	$('#other_menu a, #footer_other a').click(function(){		
		var slide_number = $(this).attr('href')[$(this).attr('href').length - 1]
		$('#slider').data('AnythingSlider').gotoPage(slide_number, true);
		$(window).scrollTop(170);
	});
})