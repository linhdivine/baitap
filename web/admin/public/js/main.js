$(document).ready(function() {

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
  $( ".button" ).click(function() {
    $( ".button" ).addClass( "onclic", 250, validate);
  });

  function validate() {
    setTimeout(function() {
      $( ".button" ).removeClass( "onclic" );
      $( ".button" ).addClass( "validate", 450, callback );
    }, 2250 );
  }
    function callback() {
      setTimeout(function() {
        $( ".button" ).removeClass( "validate" );
      }, 1250 );
    }
  $('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },
  {
    duration: 10000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });

  
  });


   });