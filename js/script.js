( function( $ ) {
    var offset = $('#principal').offset().top;
    var $meuMenu = $('#principal'); // guardar o elemento na memoria para melhorar performance
    $(document).on('scroll', function () {

        if (offset <= $(window).scrollTop()-100) {
            $meuMenu.addClass('fixar');
            $('.logo').attr("src", "/wp-content/themes/seimidigital/images/logo-small.png");
            $('.logo').css('margin-top','5px');
        } else {
            $meuMenu.removeClass('fixar animated fadeInDown');
            $('.logo').attr("src", "/wp-content/themes/seimidigital/images/logo.png");
            $('.logo').css('margin-top','0px');
        }
    });

	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

  	$(function() {

        $('.videoWrapper').click(function () {
            $('.videoWrapper iframe').css("pointer-events", "auto");
        });

	});
	$( '.btTerms' ).on( 'click', showTerms );
	$( '.btPolitics' ).on( 'click', showPolitics );

	function showPolitics()
	{
		$( '.politics' ).fadeIn();
		$( 'html,body' ).addClass( 'no-scroll' );
		$( '.terms' ).find( '.close' ).on( 'click', closeLegals );
	}


	function showTerms()
	{
		$( '.legals' ).fadeIn();
		$( 'html,body' ).addClass( 'no-scroll' );
		$( '.terms' ).find( '.close' ).on( 'click', closeLegals );
	}

	function closeLegals()
	{
		$( '.terms' ).fadeOut();
		$( 'html,body' ).removeClass( 'no-scroll' );
	}

	$('.input-yn').on('change',function(){
		if($(this).val() == 'Sim'){
			$(".form-data").removeClass('animated fadeInUp');
			$('.form-data').css('display','none');
			$('.form-foto').css('display','block');
			$(".form-foto").addClass('animated fadeInUp');
		}else if($(this).val() == 'Não'){
			$(".form-foto").removeClass('animated fadeInUp');
			$('.form-foto').css('display','none');
			$('.form-data').css('display','block');
			$(".form-data").addClass('animated fadeInUp');
		}
	})

	$('.ref-com').on('mouseenter',function(){
	   $('.e2').attr("class", "animated fadeInUp");
		setTimeout(
		  function() 
		  {
		  	$('.e4').attr("class", "animated fadeInUp");
		  	$('.e5').attr("class", "animated fadeInUp");
		  }, 500);
	});

	$('.ref-apt').on('mouseenter',function(){
	    $('.f1').attr("class", "animated fadeInUp");
		setTimeout(
		  function() 
		  {
		  	$('.f2').attr("class", "animated fadeInUp");
		  	$('.f4').attr("class", "animated fadeInUp");
		  }, 500);
	});

	$('.ref-res').on('mouseenter',function(){
	  	$('.g2').attr("class", "animated fadeInUp");
	  	$('.g3').attr("class", "animated fadeInDown");
	});

	$(window).scroll(function() {
		if ($(this).scrollTop() > 100 ) {
        	$(".anima-a").css('visibility','visible');
        	$(".anima-a").addClass('animated fadeInLeft');
		    $('.a1').attr("class", "animated fadeInUp");
		    $('.a2').attr("class", "animated fadeInUp");
			setTimeout(
			  function() 
			  {
			  	$('.a3').attr("class", "animated fadeInUp");
				setTimeout(
				  function()
				  {
				  	$('.a4').attr("class", "animated fadeIn");
				  }, 250);
			  }, 250);
			setTimeout(
			  function()
			  {
	        	$(".anima-b").css('visibility','visible');
	        	$(".anima-b").addClass('animated fadeInLeft');
			    $('.b1').attr("class", "animated fadeInRight");
			    $('.b2').attr("class", "animated fadeInDown");
				setTimeout(
				  function() 
				  {
				  	$('.b3').attr("class", "animated fadeInUp");
				  }, 500);
				setTimeout(
				  function()
				  {
		        	$(".anima-c").css('visibility','visible');
		        	$(".anima-c").addClass('animated fadeInLeft');
				    $('.c1').attr("class", "animated fadeInLeft");
				    $('.c2').attr("class", "animated fadeInLeft");
					setTimeout(
					  function() 
					  {
					  	$('.c3').attr("class", "animated fadeIn");
						setTimeout(
						  function() 
						  {
						  	$('.c4').attr("class", "animated fadeIn");
							setTimeout(
							  function() 
							  {
							  	$('.c5').attr("class", "animated fadeIn");
								setTimeout(
								  function() 
								  {
								  	$('.c6').attr("class", "animated fadeIn");
								  }, 250);
							  }, 250);
						  }, 250);
					  }, 250);
						setTimeout(
						  function()
						  {
				        	$(".anima-d").css('visibility','visible');
				        	$(".anima-d").addClass('animated fadeInLeft');
						    $('.d1').attr("class", "animated fadeInLeft");
						    $('.d3').attr("class", "animated fadeInLeft");
							setTimeout(
							  function() 
							  {
							  	$('.d2').attr("class", "animated fadeInDown");
							  }, 250);
						  }, 250);
				  }, 250);
			  }, 250);

		}

	});

} )( jQuery );