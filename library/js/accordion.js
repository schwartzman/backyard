jQuery(document).ready(function($) {
	$h = $('div.accordion h2');

	$('<i/>', {class: 'fa fa-angle-down'}).prependTo($h);

	$h.click(function() {
		var $this = $(this);
		$this.children('.fa').toggleClass('fa-angle-up fa-angle-down');
		$this.next('div').slideToggle();
	});
});
