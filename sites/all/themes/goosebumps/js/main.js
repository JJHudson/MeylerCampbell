var Goosebumps = function(){

	function init() {

		bindUI();
		isScrolledIntoView();
		fadeOutCover();
		createGallery();
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
		});

		//$('.columniser').columnize({ columns: 2 });

		$('.tag--menu, .close, .burger').on('click', toggleMenu);
		$('.gallery__arrow').on('click', goToNextGalleryItem);
		$('.calendar__item--active').on('click', showEventInfo);
		$('.event__hide').on('click', hideEventInfo);
		$('.alumni-faq__question').on('click', toggleFaqs);

	}

	function columiser() {

		$('.columniser').each(function() {


			var splitChar = ". ";
		    var wordsSplit = $(this).html().split(splitChar);
		    var wordsCount = wordsSplit.length;
		    var half = Math.floor(wordsCount / 2);
		    var leftText = "";
		    var rightText = "";
		    for(var index = 0; index < wordsCount; index++){
		          if(index > half){
		               leftText += wordsSplit[index]+" ";
		          }else{
		               rightText += wordsSplit[index]+". ";
		          }
		    }
		    $(document.createElement("div")).addClass('columniser__col columniser__col--left').html(rightText).insertBefore($(this));
		    $(document.createElement("div")).addClass('columniser__col columniser__col--right').html(leftText).insertBefore($(this));
		    $(this).detach();

			// var textLength = $(this).html().length;
			// 	first = $(this).html().substring(0, textLength / 2),
			// 	second = $(this).html().substring(textLength / 2, textLength);


			// $(this).html('<div class="columniser__col columniser__col--left">'+first+'</div><div class="columniser__col columniser__col--right">'+second+'</div>')

		});
	}

	function createGallery() {

		$('.gallery').each(function(){

			$(this).children('.gallery__item:not(:first)')
				   .fadeOut(500)
				   .addClass('gallery__item--hidden');

		});

	}

	function fadeOutCover() {

		setTimeout(function(){
			$('.cover').fadeOut(1000);
			setLogo();
		},750);

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

	function toggleFaqs() {

		// if( !$(this).hasClass('alumni-faq__question--active') ) {

		// 	$('.alumni-faq__answer').slideUp();
		// 	$('.alumni-faq__arrow').removeClass('alumni-faq__arrow--active');
		// 	$('.alumni-faq__question').removeClass('alumni-faq__question--active');

		// 	$(this).addClass('alumni-faq__question--active');
		// 	$(this).siblings('.alumni-faq__answer').slideDown();
		// 	$(this).children('.alumni-faq__arrow').addClass('alumni-faq__arrow--active');

		// }else {

		// 	$('.alumni-faq__answer').slideUp();
		// 	$('.alumni-faq__arrow').removeClass('alumni-faq__arrow--active');
		// 	$('.alumni-faq__question').removeClass('alumni-faq__question--active');

		// }

	}

	function toggleMenu() {

		$('.nav').toggleClass('nav--mobile');

	}

	return init();

}

$(function(){

	var goosebumps = new Goosebumps();

});