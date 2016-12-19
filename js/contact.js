var $ = jQuery.noConflict(); //setting jQuery with wordpress the right way;

jQuery( document ).ready(function( $ ){

// form msg sending and animation
	function sendMessage(){
		var $contactForm = $( '#contact-form' );

		$contactForm.submit( function(e){
			e.preventDefault();

			$name = $( this ).find( "input[name='name']" ).val();
			$email = $( this ).find( "input[name='_replyto']" ).val();
			$message = $( this ).find( "textarea[name='message']" ).val();

			$.ajax({
				url: "//formspree.io/delmar.webdev@gmail.com", 
	      method: "POST",
	      data: { name: $name, email: $email, message: $message },
	      dataType: 'json',
	      beforeSend: function() {
					$contactForm.append(
						'<div class="loading flex justify-center align-center"><div class="loading-message">'
						+ '<span>A enviar ... </span><i class="fa fa-cog fa-spin fa-2x"></i>'
						+'</div></div>'
					); // add a loading message
					$( 'body' ).css( 'overflow', 'hidden');
				},
	      success: function( data ) {
	      	alert('A sua mensagem foi enviada. Obrigado por me contactar.');
	      	location.reload(); // reload page on success
	      },
	      error: function( data ) {
	      	$contactForm.find('.loading').remove(); // remove loading message
	      	$( 'body' ).removeAttr( 'style');
	      	alert('Ocorreu um erro, verifique o seu endereço de email por favor, ou contacte-me pelo seguinte email: delmar.webdev@gmail.com');
	      },
			});

			return false;
		});
	}
	sendMessage();	

// form focus state input[type=text]
	function formFocus(){
		$( 'input, textarea' ).focusin( function() {
			var find_id = $( this ).attr( 'name' );
			$( 'body' ).find( '#' + find_id ).addClass( 'focus-text' );
	  });
	  $( 'input, textarea' ).focusout( function() {
			$( '.focus-text' ).removeClass( 'focus-text' );
	  });
	}
	formFocus();

});