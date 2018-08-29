$(document).ready(function() {


	$('.pagination li').click(function(event) {
			$('.pagination li').removeClass('active');
			$(this).addClass('active');
	});
	$('.back-to-top span').click(function(event) {
		$('html, body').animate({scrollTop: 0}, 800);
	});
	$('.goto-bottom span').click(function(event) {
		//alert('echo');
		$('html, body').animate({scrollTop: 10000}, 1600);
	});

	// Dropdown toggle
	$('.dropdown-toggle').click(function(){
	  $(this).next('.dropdown').toggle(800);
	});

	$(document).click(function(e) {
	  var target = e.target;
	  if (!$(target).is('.dropdown-toggle') && !$(target).parents().is('.dropdown-toggle')) {
	    $('.dropdown').hide(800);
	  }
	});

});
