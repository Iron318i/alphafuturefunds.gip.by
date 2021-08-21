+function ($) {
    $('body').append('<div id="toTop" class="btn">&nbsp</div>');
    $(window).scroll(function () {
	if ($(this).scrollTop() != 0) {
	    $('#toTop').fadeIn();
	} else {
	    $('#toTop').fadeOut();
	}
    });
    $('#toTop').click(function () {
	$("html, body").animate({scrollTop: 0}, 600);
	return false;
    });

    $('.instructors-cats a').on('click', function (e) {
	e.preventDefault();
	$cat = this.hash.substr(1);
	$('.instructors-cats a').removeClass('active');
	$(this).addClass('active');
	if ($cat == 'all') {
	    $('#instructors .col-md-4').fadeIn();
	} else {
	    $('#instructors .col-md-4').hide();
	    $('#instructors .' + $cat).fadeIn();
	}
    });

    $('.owl-carousel.gallery').owlCarousel({
	responsiveClass: true,
	dots: true,
	nav: false,
	items: 1
    });

}(jQuery);
