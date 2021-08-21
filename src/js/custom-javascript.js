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

    $('.portfolio-cats a').on('click', function (e) {
	e.preventDefault();
	$cat = this.hash.substr(1);
	$('.portfolio-cats a').removeClass('active');
	$(this).addClass('active');
	if ($cat == 'all') {
	    $('.portfolio .col-6').fadeIn();
	} else {
	    $('.portfolio .col-6').hide('slow');
	    $('.portfolio .' + $cat).fadeIn();
	}
    });

}(jQuery);
