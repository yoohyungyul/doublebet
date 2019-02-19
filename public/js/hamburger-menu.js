$(function(){
	var menuwidth  = 280; // pixel value for sliding menu width
	var menuspeed  = 300; // milliseconds for sliding menu animation time
	var $bdy       = $('body');
	var $container = $('#pgcontainer');
	var $burger    = $('#hamburgermenu');
	var negwidth   = "-"+menuwidth+"px";
	var poswidth   = menuwidth+"px";

	$('.menubtn').on('click',function(e){
		if($bdy.hasClass('openmenu')) {
			jsAnimateMenu('close');
		} else {
			jsAnimateMenu('open');
		}
		$('.menu_bi').show();
		$('.menu_close').show();
	});

	$('.overlay').on('click', function(e){
		if($bdy.hasClass('openmenu')) {
			jsAnimateMenu('close');
		}
	});

	$('.link').on('click', function(e){

		if($bdy.hasClass('openmenu')) {
			jsAnimateMenu('close');
			
		}
		e.preventDefault();
		
	});

	$('.menu_close').on('click',function(e){
		 $(this).hide();
		 $('.menu_bi').hide();
		 if($bdy.hasClass('openmenu')) {
			jsAnimateMenu('close');
		}
	});        
  
	function jsAnimateMenu(tog) {
		if(tog == 'open') {
			$bdy.addClass('openmenu');
			$('.menubtn').addClass('close')				
			$container.animate({marginRight: negwidth, marginLeft: poswidth}, menuspeed);
			$burger.animate({width: poswidth}, menuspeed);
			$('.overlay').animate({left: poswidth}, menuspeed);
		}
		
		if(tog == 'close') {
			$bdy.removeClass('openmenu');
			$('.menubtn').removeClass('close')
			$container.animate({marginRight: "0", marginLeft: "0"}, menuspeed);
			$burger.animate({width: "0"}, menuspeed);
			$('.overlay').animate({left: "0"}, menuspeed);
		}
	}  
});