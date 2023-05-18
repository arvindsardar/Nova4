(function ($) {
	jQuery(document).ready(function () {

	// smooth scrolling
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > 250) {
				$('body').addClass('scrolled');
			} else {
				$('body').removeClass('scrolled');
			}
		});

	//show/hide mobile menu
		$('#hamburger-button,.offscreen-menu-container a').click(function(){
			$('#hamburger-button').toggleClass('active');
			$('body').toggleClass('offscreen-menu-active');
		});

	// Mobile Menu - add arrow toggle + expand sub-menu
		$('.offscreen-menu .menu-item-has-children > a').append('<span class="showmore"></span>');
		$('.offscreen-menu .menu-item-has-children > a .showmore').click(function (event) {
			event.preventDefault();
			$(this).parent().next('.sub-menu').slideToggle('slow');
			$(this).toggleClass('open');
		});

	//search button toggle
		$('.nova-searchtoggle-button').click(function(){
			$('#sitesearch-wrapper').slideToggle();
			$('.searchinput').focus();
		});

	//Search - close button
		$('.unsearch').click(function(){
			$('#sitesearch-wrapper').slideToggle();
		});

	}); // end doc ready
})(jQuery); //end compatibility