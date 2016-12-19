 var $ = jQuery.noConflict(); //setting jQuery with wordpress the right way;

jQuery( document ).ready( function( $ ){

	function activeList(){
		//activates navbar first li on page load
			$( 'a[href="#header"]' ).parent().addClass( 'active' );
	};
	activeList();

	function scrollTo(){
		$("a").on('click', function(event) {

	   // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
	      // Prevent default anchor click behavior
	      	event.preventDefault();

	      // Store hash
	      	var hash = this.hash;

	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){
	   
	       // Add hash (#) to URL when done scrolling (default click behavior)
	        //window.location.hash = hash;
	      });
	    }
	  })
	};
	scrollTo();

	function navBar(){
		// Offset for Main Navigation
	    $('#mainNav').affix({
        offset: {
          top: 100
        }
	    });

	  // Scroll Spy
	  	$('body').scrollspy({
	      target: '.scroll',
	    });

	  // mobile-menu open/close
	  	$( '#open-menu').on( 'click', function(){
				$( '#mobile-menu' ).slideDown( 'slow' );
			})
			$( '#close-menu').on( 'click', function(){
				$( '#mobile-menu' ).slideUp( 'slow' );
			})
		// Closes the Responsive Menu on Menu Item Click
	    $('.mobile-menu-list li a').click(function(){ 
	       $( '#close-menu').click();
	    });
	};
	navBar();

	function scrollUp() {
		var  scrollUp = $(".scrollUp-btn");
		
		$(window).scroll(function() {
	    var scroll = $(window).scrollTop();

	    if (scroll >= 100) {
	    	scrollUp.addClass("open");
	    } else {
	    	scrollUp.removeClass("open");
	    }
		});
	};
	scrollUp();

// Typed custom js
	function typedNeeds(){
		$("#needs").typed({
	    strings: [ 'Criar um Website', 'Desenvolver um protótipo'],
	    //stringsElement: $('#typed-strings'),
	    typeSpeed: 30,
	    backSpeed: 30,
	    startDelay: 0,
	    backDelay: 2000,
	    loop: true,
	    contentType: 'html', // or text
	    // defaults to false for infinite loop
	    loopCount: false,
	    showCursor: true,
			cursorChar: "",
	    resetCallback: function() { newTyped(); },
	  });

	  $(".reset").click(function(){
	      $("#typed").typed('reset');
	  });
		function newTyped(){};
	}
	typedNeeds();

});