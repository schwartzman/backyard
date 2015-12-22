/*
 * Bones Scripts File
 * Author: Eddie Machado
*/

jQuery(document).ready(function($) {

$('.nav-toggle').click(function(){
  $('.top-nav').slideToggle(200);
  $(this).toggleClass('fa-bars fa-times');
});

function toggleDrop(target) {
	target.children('.sub-menu').slideToggle(200);
	target.find('i').toggleClass('fa-angle-up fa-angle-down');	
	target.toggleClass('byc-drop-open');
}

var menuPar = $('.nav > li').has('.sub-menu');
menuPar.children('a').append('<i class="subnav-toggle fa fa-angle-down"></i>');

menuPar.click(function(){
	var $this = $(this);
	toggleDrop( $this.siblings('.byc-drop-open') );
	toggleDrop( $this );
});

$('.pix').masonry({
	gutter: 20,
	itemSelector: '.pic'
});

});
