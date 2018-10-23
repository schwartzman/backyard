jQuery(document).ready(function($) {
	$h = $('div.accordion h2');

	$('<i/>', {class: 'fa fa-angle-up'}).prependTo($h.first());
	$('<i/>', {class: 'fa fa-angle-down'}).prependTo($h.not(':first'));

	$h.click(function() {
		var $this = $(this);
		$this.children('.fa').toggleClass('fa-angle-up fa-angle-down');
		$this.next('div').slideToggle();
	});
});
