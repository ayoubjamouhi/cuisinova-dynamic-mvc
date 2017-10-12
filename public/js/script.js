$(document).ready(function(){

	$(".center-menu-li-1").mouseenter(function(){
		$('.center-menu-ul-1').show();
	}).mouseleave(function(){
		$('.center-menu-ul-1').hide();		
	});	

	$(".center-menu-ul-1").mouseenter(function(){
		$('.center-menu-ul-1').show();
	}).mouseleave(function(){
		$('.center-menu-ul-1').hide();		
	});	
	////
	$(".center-menu-li-2").mouseenter(function(){
		$('.center-menu-ul-2').show();
	}).mouseleave(function(){
		$('.center-menu-ul-2').hide();		
	});	

	$(".center-menu-ul-2").mouseenter(function(){
		$('.center-menu-ul-2').show();
	}).mouseleave(function(){
		$('.center-menu-ul-2').hide();		
	});	
	////
	$(".center-menu-li-3").mouseenter(function(){
		$('.center-menu-ul-3').show();
	}).mouseleave(function(){
		$('.center-menu-ul-3').hide();		
	});	

	$(".center-menu-ul-3").mouseenter(function(){
		$('.center-menu-ul-3').show();
	}).mouseleave(function(){
		$('.center-menu-ul-3').hide();		
	});				

	////

	/*$(".top-header > .menu1 > .right-menu > .fa-align-justify").click(function(){
		$(".top-header > .menu-hidden").slideDown();
		$('.top-header > .menu1 > .right-menu > .fa-align-justify').removeClass('fa-align-justify').addClass('fa-times');
	});*/
	
	// live function 
	$( document).on( "click", ".fa-align-justify", function() {
		$(".top-header > .menu-hidden").slideDown();
		$('.top-header > .menu1 > .right-menu > .fa-align-justify').removeClass('fa-align-justify').addClass('fa-times');
	});
	
	$( document ).on( "click", ".fa-times", function() {
		$(".top-header > .menu-hidden").slideUp();
		$('.top-header > .menu1 > .right-menu > .fa-times').removeClass('fa-times').addClass('fa-align-justify');
	});

	/* Textarea editor */
	$(function() {
  		$('textarea#froala-editor').froalaEditor()
	});
});

