var Goosebumps = function(){

	function init() {

		bindUI();
		isScrolledIntoView();
		fadeOutCover();
		createGallery();
		createTestimonials();
		columiser();

	}

	function bindUI() {

		$(window).on('scroll', function(){
			isScrolledIntoView();
			setLogo();
			setMenu();
		});

		$(window).on('resize', function(){
			isScrolledIntoView();
			createTestimonials();
		});

		$('.tag--menu, .close, .burger').on('click', toggleMenu);
		$('.gallery__arrow').on('click', goToNextGalleryItem);
		$('.testimonial__arrow').on('click', goToNextTestimonial);
		$('.calendar__item--active').on('click', showEventInfo);
		$('.event__hide').on('click', hideEventInfo);
		$('.section--hero').on('click', goToContent);

	}

	function columiser() {

		$('.columniser').each(function() {

			var s = $(this).html();

			var middle = Math.floor(s.length / 2);
			var before = s.lastIndexOf('.', middle);
			var after = s.indexOf('.', middle + 1);

			if (middle - before < after - middle) {
			    middle = before;
			} else {
			    middle = after;
			}

			var s1 = s.substr(0, middle);
			var s2 = s.substr(middle + 1);

			$(document.createElement("div")).addClass('grid__col grid__col--2').html(s1).insertBefore($(this));
		    $(document.createElement("div")).addClass('grid__col grid__col--2').html(s2).insertBefore($(this));
		    $(this).detach();

		    $("p:empty").remove();

		});
	}

	function createGallery() {

		$('.gallery').each(function(){

			$(this).children('.gallery__item:not(:first)')
				   .fadeOut(500)
				   .addClass('gallery__item--hidden');

		});

	}

	function createTestimonials() {

		var maxHeight = 0;

		$('.testimonial__quote').each(function(){

			maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();

			console.log($(this).height());

		});


		$('.testimonials').height(maxHeight);

	}

	function fadeOutCover() {

		setTimeout(function(){
			$('.cover').fadeOut(1000);
			setLogo();
		},750);

	}

	function goToContent() {

		var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0) + 10;

		$("html, body").animate({ scrollTop: h },750);

	}

	function goToNextGalleryItem() {

		var direction = $(this).attr('data-direction'),
			thisItem = $(this).closest('.gallery').children('.gallery__item:not(.gallery__item--hidden)'),
			nextItem;

		if(direction === 'next') {

			if (thisItem.next('.gallery__item').length > 0) {

				nextItem = thisItem.next('.gallery__item');

			} else {

				nextItem = $(this).closest('.gallery').children('.gallery__item').first();

			}

		}else{

			if (thisItem.prev('.gallery__item').length > 0) {

				nextItem = thisItem.prev('.gallery__item');

			} else {

				nextItem = $(this).closest('.gallery').children('.gallery__item').last();

			}

		}

		thisItem.fadeOut(500).addClass('gallery__item--hidden');

		setTimeout(function(){
			nextItem.fadeIn(500).removeClass('gallery__item--hidden');
		},500);

	}

	function goToNextTestimonial() {

		var direction = $(this).attr('data-direction'),
			thisItem = $('.testimonial__quote--active'),
			nextItem;

		if(direction === 'next') {

			if (thisItem.next('.testimonial__quote').length > 0) {

				nextItem = thisItem.next('.testimonial__quote');

			} else {

				nextItem = $('.testimonial__quote').first();

			}

		}else{

			if (thisItem.prev('.testimonial__quote').length > 0) {

				nextItem = thisItem.prev('.testimonial__quote');

			} else {

				nextItem = $('.testimonial__quote').last();

			}

		}

		thisItem.removeClass('testimonial__quote--active');
		nextItem.addClass('testimonial__quote--active');

	}

	function hideEventInfo() {

		$('.event__info-wrapper').fadeOut();

	}

	function isScrolledIntoView() {

	    $('.fade').each(function(){

	    	if(!$(this).hasClass('visible')) {

		    	var $elem = $(this);
			    var $window = $(window);

			    var docViewTop = $window.scrollTop();
			    var docViewBottom = docViewTop + $window.height();

			    var elemTop = ($elem.offset().top) - 50;
			    var elemBottom = elemTop + $elem.height();

			    if((( elemTop >= docViewTop) && (elemTop <= docViewBottom)) || ((elemBottom >= docViewTop) && (elemBottom <= docViewBottom))) {
			    	$elem.addClass('visible');
			    }

			}

	    });

	}

	function setLogo() {
   
    	if( $('body').hasClass('front')) {

	    	var introTop = ($('.section--intro').offset().top),
	    		sectionTop = introTop - 250,
	    		scrollPos = $(document).scrollTop() + 70;

	    	if(scrollPos < sectionTop) {

	    		$('.logo-home').attr('class','logo-home logo-home__fixed');

	    	}else if(scrollPos >= sectionTop && scrollPos <= introTop) {

	    		$('.logo-home').attr('class','logo-home logo-home__fixed logo-home__grey');

	    	}else if(scrollPos > introTop) {

				$('.logo-home').attr('class','logo-home logo-home__black');

	    	}

	    }

	}

	function setMenu() {

		var introTop = ($('.section--intro').offset().top),
		    	sectionTop = introTop - 250,
		    	scrollPos = $(document).scrollTop() + 70;

		    if(scrollPos >= sectionTop && scrollPos <= introTop) {

		    	$('.nav').removeClass('nav--active');

		    }else if(scrollPos > introTop){

		    	$('.nav').addClass('nav--active');

		    }

	}

	function showEventInfo() {

		var data = $(this).attr('data-date'),
			x = $(this).attr('data-x'),
			y = $(this).attr('data-y');

		if (x == 'left') {
			$('.event__info-wrapper').css({ 'left':'0'});
		} else {
			$('.event__info-wrapper').css({ 'right':'0'});
		}

		$('.event__info--' + data).fadeIn();

		//if (y == 'top') {
			$('.event__info-wrapper').css({ 'top':'-15px'}).fadeIn();
		//} else {
			//$('.event__info-wrapper').css({ 'bottom':'0'}).fadeIn();
		//}


	}

	function toggleMenu() {

		$('.nav').toggleClass('nav--mobile');

	}

	return init();

}

$(function(){

	var goosebumps = new Goosebumps();

});