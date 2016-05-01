
$(function(){

	// RESPONSIVE +
	if (typeof $.ll_responsive == 'function') {
		$.ll_responsive({
            width: [400, 640, 980, 1350],      //Responzivne rozlisenia, default [240, 320, 640, 980]
            prefix: 'width',                  //Prefix classy, ktora sa bude priradzovat do body, priklad: width-240, width-320... default "width"
            viewport: 'width=device-width',   //Hodnota ktora sa priradi pri inicializacii do <meta name="viewport" content="..." />, default "width=device-width"
				afterResize: function(opt) {}
    	});
    };
	// RESPONSIVE -

	// HEADER SCROLL +
			var documentHeaderTop = $('.page-main #document-header'),
					documentHeader = $('#document-header');

	    $(document).scroll(function(){

	        var wScroll = $(this).scrollTop();

	        if (wScroll < 40 ) {
	            $(documentHeaderTop).addClass('top');
							$(documentHeaderTop).removeClass('scroll');
	        } else {
	            $(documentHeaderTop).removeClass('top');
							$(documentHeaderTop).addClass('scroll');
	        }
	    });
  // HEADER SCROLL -


	// HEADER ITEM SELECTED +
			var menuItem = documentHeader.find('.item.level-1');
			menuItem.on('click', function(){
					menuItem.removeClass('selected');
					$(this).addClass('selected');
			});
	// HEADER ITEM SELECTED -

	// OPTIONS MENU +
			var headerUser = documentHeader.find('.header-user'),
					optionsMenu = headerUser.find('.options-menu');

			headerUser.on('click', function(){
					if ($(this).hasClass('open')) {
						$(this).removeClass('open');
					} else $(this).addClass('open');
			});

			$(document).click(function(event) {
					if ( (!$(event.target).closest(headerUser).length) && (!$(event.target).closest(optionsMenu).length) ) {
							headerUser.removeClass('open');
					}
			});
	// OPTIONS MENU -

	// LOGOUT
			var logout = optionsMenu.find('.logout');
			logout.on('click',function(e){
					(e).preventDefault();
					headerUser.removeClass('loged-in').addClass('loged-out');
					headerUser.removeClass('logout').addClass('login');
					$('body').removeClass('user-loged');
			});

			var login = optionsMenu.find('.login');
			login.on('click',function(e){
					return true;
			});

	// HEADER SEARCH +
			var searchInput = documentHeader.find('.searchInput'),
					headerSearch = documentHeader.find('.header-search');
	// HEADER SEARCH -

	// CARD SETTINGS +
			var card = $('.card'),
					cardSettings = card.find('.card-settings'),
					cardSettingsMenu = card.find('.card-settings-menu');

			var cardClose = cardSettingsMenu.find('.card-close');

			cardSettings.on('click',function(){
					if ($(this).hasClass('open')) {
							$(this).removeClass('open');
							$(this).next().removeClass('open');
					} else {
							cardSettings.removeClass('open');
							cardSettingsMenu.removeClass('open');
							$(this).addClass('open');
							$(this).next().addClass('open');
					}
			});

			$(document).click(function(event) {
					if ( (!$(event.target).closest(cardSettings).length) && (!$(event.target).closest(cardSettingsMenu).length) ) {
							cardSettings.removeClass('open');
							cardSettingsMenu.removeClass('open');
					}
			});

			// active cards
			card.each(function(e){
					if ($(this).is(":visible") && ($(this).attr('id')) ) {
							var cardClass = $(this).attr('id');
							$('.' + cardClass + '-plus-item').hide();
					}
			});

			cardClose.on('click',function(e){
					(e).preventDefault();
					var cardClass = $(this).data("card-class");
					$('#' + cardClass).hide();
					$('.' + cardClass + '-after-msg').show();
					$('.' + cardClass + '-plus-item').show();
			});

			$('.revert-card').on('click',function(e){
					var cardClass = $(this).data("card-class");
					$('#' + cardClass).show();
					$('.' + cardClass + '-after-msg').hide();
			});
	// CARD SETTINGS -

	// SCROLLUP +
			$('.scroll-up .triangle').on('click',function(){
					$("html, body").animate({ scrollTop: 0 }, "slow");
					return false;
			});
	// SCROLLUP -

	// TIP +
	    $('.tip').hover(function(){
	        var title = $(this).attr('title');

					$(this).data('tipText', title).removeAttr('title');
	        $('<span class="tooltip shadow-1"></span>')
	        .text(title)
	        .appendTo(this)
	        .fadeIn('fast')
					.css('display','inline-block');
	    }, function() {
						$(this).attr('title', $(this).data('tipText'));
	          $('.tooltip').remove();
	      });

			$('.tip').click(function(){
					$('.tooltip').remove();
			});
		// TIP -

});

$(window).ready(function() {

	// RIPPLE EFFECT +
			function Ripple() {
				var ripple = $('.ripple');

				$(ripple).on('click', function(e){

						var $div = $('<div/>'),
								btnOffset = $(this).offset(),
								xPos = event.pageX - btnOffset.left,
								yPos = event.pageY - btnOffset.top;

						$div.addClass('ripple-effect');
						var $ripple = $(".ripple-effect");

						$ripple.css("height", $(this).height());
						$ripple.css("width", $(this).height());
						$div
							.css({
								top: yPos - ($ripple.height()/2) - 20,
								left: xPos - ($ripple.width()/2) - 20,
								background: $(this).data("ripple-color")
							})
							.appendTo($(this));

						window.setTimeout(function(){
							$div.remove();
						}, 900);
				});
			}
			Ripple();
	// RIPPLE EFFECT -

	// CARDS PLUS +
			var cardsPlus = $('.cards-plus'),
					cardsPlusBtn = cardsPlus.find('.cards-plus-button'),
					cardsPlusMenu = cardsPlus.find('.cards-plus-menu'),
					pageOverlay = $('.page-overlay');

			$(document).scroll(function(){
					var wScroll = $(this).scrollTop();

					if (!(wScroll > ($(this).height()) - $(window).height() - 60)) {
							cardsPlus.removeClass('bottom');
					} else {
							cardsPlus.addClass('bottom');
					}
			});

			cardsPlusBtn.add(pageOverlay).add(cardsPlusMenu).on('click', function(e){
					(e).preventDefault();
					if ($(cardsPlusBtn).hasClass('open')) {
							cardsPlusBtn.removeClass('open');
							cardsPlusMenu.removeClass('open');
							pageOverlay.hide();
					} else {
							cardsPlusBtn.addClass('open');
							cardsPlusMenu.addClass('open');
							pageOverlay.show();
					}
			});

			var cardsPlusItem = cardsPlusMenu.find('.cards-plus-item');

			cardsPlusItem.on('click',function(){
					var cardClass = $(this).data("card-class");
					$('#' + cardClass).show();
					$('.' + cardClass + '-after-msg').hide();
					$('.' + cardClass + '-plus-item').hide();
			});
	// CARDS PLUS -

	// SHOW MORE NEWS +
			var card = $('.card');
					showMore = card.find('.show-more');

			showMore.on('click', function(){
					var cardContent = $(this).data('card-content');

					$.ajax({
				      url: 'contents/' + cardContent + '.php',
				      success: function(html) {
				        $('.' + cardContent).append(html);
								news = $('#news .item');
								var scrollTopDist = $(document).scrollTop() + 200;
								$("html, body").animate({ scrollTop: scrollTopDist }, "slow");
								newsItemsEase();
								Ripple();
				      }
			    });
			});

			$('.show-more-cast').on('click', function(){

					if ($(this).hasClass('open')) {
							$(this).removeClass('open');
							$('.cast-content').hide();
					} else {
							$(this).addClass('open');
							$('.cast-content').show();
					}
			});
	// SHOW MORE NEWS -

	// SCROLL EASE +
			function newsItemsEase() {
				news = $('#news .item');
				$(document).scroll(function(){
						var wScroll = $(this).scrollTop();

						news.each(function(){
							if (wScroll > (($(this).offset().top) - $(window).height() * 0.8 )) {
									$(this).addClass('is-visible');
							}
						});
				});
			}
			newsItemsEase();
	// SCROLL EASE -

});


$(document).ready(function () {

	var card = $('.card');

	// LOGIN FORM +
			$('input.form').blur(function() {
					var $this = $(this);
					if ($this.val())
						$this.addClass('used');
					else
						$this.removeClass('used');
			});
	// LOGIN FORM -

	// FAB BUTTON +
			var fabWrap = $('.fab-wrap'),
					fabButton = fabWrap.find('.fab-button'),
					pageOverlay = $('.page-overlay'),
					additional = fabWrap.find('.additional');

			fabWrap.on('click',function(){

					if ($(this).hasClass('open')) {
						pageOverlay.hide();
						setTimeout(function(){
								pageOverlay.hide();
								fabWrap.add(fabButton).removeClass('open').removeClass('affirm');
						}, 1000);
					} else {
						pageOverlay.show();
						$(this).add(fabButton).addClass('open');
					}
			});

			pageOverlay.on('click',function(){
					fabWrap.add(fabButton).removeClass('open');
					textWidget.removeClass('is-visible');
					$(this).hide();
			});

			additional.on('click',function(){
					fabButton.addClass('affirm');
					setTimeout(function(){
							pageOverlay.hide();
							fabWrap.add(fabButton).removeClass('open').removeClass('affirm');
					}, 1000);
			});

	// FAB BUTTON -

	// MOVIES RATING +
			var movieFabWrap = $('.movie-fab-wrap'),
					movieFab = movieFabWrap.find('.movie-fab'),
					starIcon = movieFabWrap.find('.icon'),
					additionalMovie = movieFabWrap.find('.additional');

			var myRatingCont = $('.my-rating'),
					myRatingIcon = myRatingCont.find('.icon');

			movieFabWrap.on('click',function(){

					if ($(this).hasClass('open')) {
						pageOverlay.hide();
						setTimeout(function(){
								pageOverlay.hide();
								movieFabWrap.add(movieFab).removeClass('open').removeClass('affirm');
						}, 1000);
					} else {
						pageOverlay.show();
						$(this).add(movieFab).addClass('open');
						starIconHover();

						starIcon.unbind().click(function(){

							iconPos = $(this).data('icon-pos');
							myRatingCont.addClass('is-visible');

							if ( ((iconPos === 1) && (movieFabWrap.attr('data-icon-pos') >= 1))  ) {
									myRatingIcon.removeClass('active');
									starIcon.removeClass('hovered').removeClass('result');
									movieFabWrap.attr('data-icon-pos', 0);
							} else {
										starIcon.removeClass('result');
										$('.' + iconPos).addClass('result');
										movieFab.addClass('affirm');

										setTimeout(function(){
												myRatingIcon.each(function(event){
														$(this).removeClass('active');
														if ((event + 1) <= iconPos ) $(this).addClass('active')
												});
										}, 1300)
								}
						});
					}
			});

			pageOverlay.on('click',function(){
					movieFabWrap.add(movieFab).removeClass('open');
					$(this).hide();
			});

			additionalMovie.on('click',function(){
					movieFab.addClass('affirm');
					setTimeout(function(){
							pageOverlay.hide();
							movieFabWrap.add(movieFab).removeClass('open').removeClass('affirm');
					}, 1000);
			});

			function starIconHover() {
					starIcon.hover(function(){
							iconPos = $(this).data('icon-pos');
							$('.' + iconPos).addClass('hovered');
					}, function(){
									starIcon.removeClass('hovered');
							});
			}

	// MOVIES RATING -

	// TEXT WIDGET +
			var textWidget = $('.text-widget'),
					btnSend = textWidget.find('.send-button'),
					btnBack= textWidget.find('.back-button'),
					pageOverlay = $('.page-overlay'),
					textWidgetToggle = $('.text-widget-toggle');

			textWidgetToggle.unbind().on('click', function(){
					textWidget
							.css({
								top: $(this).offset().top + $(this).height() + 20
							})
							.addClass('is-visible');
					pageOverlay.show();
			});

			btnSend.unbind().on('click', function(){

					btnSend.addClass('sending');
					setTimeout(function(){
							pageOverlay.hide();
							textWidget.removeClass('is-visible');
							$('.text-widget .textarea').val('');
					}, 1000);

					setTimeout(function(){
							btnSend.removeClass('sending');
					}, 3000);
			});

			btnBack.unbind().on('click', function(){
					pageOverlay.hide();
					textWidget.removeClass('is-visible');
			});

	// TEXT WIDGET -

	// SECONDARY MENU +
			var secMenu = $('.sec-menu'),
					secItem = secMenu.find('.sec-item');

			secItem.on('click', function(){

					secItem.removeClass('active');
					$(this).addClass('active');
					card.addClass('hidden');
					var identifier = $(this).attr('id');
					$('.' + identifier).removeClass('hidden');
			});
	// SECONDARY MENU -


	// SLIDERS +
		  var swiper1 = new Swiper('.s1', {
			    direction: 'horizontal',
			    loop: true,
			    speed: 400,
			    spaceBetween: 0,
			    pagination: '.s1-pag',
			    paginationClickable: true,
					autoplay: 3500,
					autoplayDisableOnInteraction: true,
			    grabCursor: true,
			    centeredSlides: true,
			    keyboardControl: true,
					preloadImages: true,
					lazyLoading: true,
					preventClicks: false
		  });

			var swiper2 = new Swiper('.s2', {
			    direction: 'horizontal',
			    loop: true,
			    speed: 400,
			    spaceBetween: 0,
					autoplay: 3500,
			    autoplayDisableOnInteraction: true,
			    grabCursor: true,
					centeredSlides: false,
					preventClicks: false,
					slidesPerView: 2,
		  });

			var swiper3 = new Swiper('.s3', {
			    direction: 'horizontal',
			    loop: true,
			    speed: 400,
			    spaceBetween: 0,
					autoplay: 3500,
			    autoplayDisableOnInteraction: true,
			    grabCursor: true,
					centeredSlides: false,
					preventClicks: false,
					slidesPerView: 2,
		  });

			var swiperPage = new Swiper('.s4', {
			    direction: 'horizontal',
			    loop: true,
			    speed: 400,
			    spaceBetween: 0,
			    grabCursor: true,
					centeredSlides: false,
					preventClicks: false,
		  });
	// SLIDERS +

});
