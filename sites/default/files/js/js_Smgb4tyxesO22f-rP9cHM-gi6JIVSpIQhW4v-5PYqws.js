;
var Goosebumps = function(){

	function init() {

		bindUI();
		checkMacChrome();
		isScrolledIntoView();
		fadeOutCover();
		createGallery();
		columiser();
		sizeIframe();
		
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
			resizeIframe();
		});

		$('.tag--menu, .close, .burger').on('click', toggleMenu);
		$('.gallery__arrow').on('click', goToNextGalleryItem);
		$('.testimonial__arrow').on('click', goToNextTestimonial);
		$('.calendar__item--active').on('click', showEventInfo);
		$('.event__hide').on('click', hideEventInfo);
		$('.section--hero').on('click', goToContent);

		setTimeout(function(){
			createTestimonials();
		},1000);

	}

	function checkMacChrome() {

		var isChromium = window.chrome,
		    winNav = window.navigator,
		    vendorName = winNav.vendor,
		    isOpera = winNav.userAgent.indexOf("OPR") > -1,
		    isIEedge = winNav.userAgent.indexOf("Edge") > -1,
		    safari = winNav.userAgent.indexOf("Safari") > -1,
		    mac = winNav.platform.toUpperCase().indexOf('MAC'),
		    ios = /iPhone|iPad|iPod/i.test(navigator.userAgent),
		    android = /Android/i.test(navigator.userAgent);

		// Check to see if user is using certain browsers... I know, very stupid but there is a ridiculous bug that effects line-height with this specific font on specific browsers

		if( mac >=0 || ios == true || android == true ) {
		
			$('.calendar__item').addClass('calendar__item--strange');

		}
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

			var s1 = s.substr(0, middle) + '.</p>';
			var s2 = '<p>' + s.substr(middle + 1);

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

			maxHeight = maxHeight + 15;

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

		var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0) + 40;

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

				nextItem = thisItem.closest('.gallery').children('.gallery__item').first();

			}

		}else{

			if (thisItem.prev('.gallery__item').length > 0) {

				nextItem = thisItem.prev('.gallery__item');

			} else {

				nextItem = thisItem.closest('.gallery').children('.gallery__item').last();

			}

		}

		thisItem.fadeOut(500).addClass('gallery__item--hidden');

		var nextItemSRC = nextItem.children().children('.person__image').attr('data-src');

		if(nextItemSRC !== '') {
			nextItem.children().children('.person__image').attr('src',nextItemSRC).attr('data-src','');
		}

		setTimeout(function(){
			nextItem.fadeIn(500).removeClass('gallery__item--hidden');
		},500);

	}

	function goToNextTestimonial() {

		var direction = $(this).attr('data-direction'),
			thisQuote = $('.testimonial__quote--active'),
			nextQuote,
			thisByline = $('.testimonial__byline--active'),
			nextByline;

		if(direction === 'next') {

			if (thisQuote.next('.testimonial__quote').length > 0) {

				nextQuote = thisQuote.next('.testimonial__quote');
				nextByline = thisByline.next('.testimonial__byline');

			} else {

				nextQuote = $('.testimonial__quote').first();
				nextByline = $('.testimonial__byline').first();

			}

		}else{

			if (thisQuote.prev('.testimonial__quote').length > 0) {

				nextQuote = thisQuote.prev('.testimonial__quote');
				nextByline = thisByline.prev('.testimonial__byline');

			} else {

				nextQuote = $('.testimonial__quote').last();
				nextByline = $('.testimonial__byline').last();

			}

		}

		thisQuote.removeClass('testimonial__quote--active');
		nextQuote.addClass('testimonial__quote--active');
		thisByline.removeClass('testimonial__byline--active');
		nextByline.addClass('testimonial__byline--active');

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

	function resizeIframe() {

		$('iframe').each(function() {
			var _this = this;
			setTimeout(function(){
		    	_this.style.height =
		    	_this.contentWindow.document.body.offsetHeight + 'px';
		    },250);
		});

	}

	function setLogo() {
   
    	if( $('body').hasClass('front')) {

	    	var introTop = ($('.section--intro').offset().top),
	    		sectionTop = introTop - 250,
	    		scrollPos = $(document).scrollTop() + 40;

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

		if( $('.section--intro').length > 0 ) {

			var introTop = ($('.section--intro').offset().top),
			    	sectionTop = introTop - 250,
			    	scrollPos = $(document).scrollTop() + 40,
			    	logoPos = $('.logo-main').height() + 75;

			    if(scrollPos >= sectionTop && scrollPos <= introTop) {

			    	$('.nav').removeClass('nav--active');

			    }else if(scrollPos > introTop){

			    	$('.nav').addClass('nav--active');

			    }

			    if(scrollPos >= logoPos) {
			    	$('.logo--small').addClass('logo--active');
			    } else {
			    	$('.logo--small').removeClass('logo--active');
			    }

			}

	}

	function sizeIframe() {

		$('.connected-iframe').load(function() {
			var _this = this;
			setTimeout(function(){
		    	_this.style.height =
		    	_this.contentWindow.document.body.offsetHeight + 'px';
		    },1000);
		});

		$('.news-iframe').load(function() {
		    this.style.height =
		    this.contentWindow.document.body.offsetHeight + 'px';
		});

	}

	function showEventInfo() {

		var data = $(this).attr('data-date');

		$('.event__info').fadeOut();
		$('.event__info--' + data).fadeIn();
		$('.event__info-wrapper').fadeIn();

	}

	function toggleMenu() {

		$('.nav').toggleClass('nav--mobile');

	}

	return init();

}

$(function(){

	var goosebumps = new Goosebumps();

});;
