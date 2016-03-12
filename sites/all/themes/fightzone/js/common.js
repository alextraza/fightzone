$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};



	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

    /*
    $(window).scroll(function() {
        var top = $(document).scrollTop();
        if (top >= 210) {
            $('aside').addClass('stiky');
            $('aside').width($('.sidebar').width());
        } else {
            $('aside').removeClass('stiky');
        }
    });
    */

    h = $('#content');
    m = $('.main');
    if (m.height() < h.height()) {
        m.height(h.height());
    }

    $('#edit-search-block-form--2').attr("placeholder", "Поиск...");
    $('#edit-name').attr("placeholder", "Введите имя...");

    date = new Date();
    $('#copy-date').text(date.getFullYear());
    

    $('.preloader').fadeOut();
});
