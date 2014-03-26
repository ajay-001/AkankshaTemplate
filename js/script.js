// JavaScript Document

$(function(){
	$('.nav_item').hover(function(){
			$(this).find('ul').fadeIn(500);
		},
		function(){
			$(this).find('ul').fadeOut(500);
		});
})