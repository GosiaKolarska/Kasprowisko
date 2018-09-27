$(document).ready(function() {
// CALENDAR
    $('.row-calendar:first-child').addClass('active');
        $('.section-calendar .calendar__date .wrapper').on('click', function() {
            $('.row-calendar.active').removeClass('active');
            $(this).parent().parent().addClass('active');
    })

// TICKET: btn toggle
    $('.ticket-toggle:first-child').addClass('active');
        $('.btn-toggle').on('click', function() {
            $('.ticket-toggle.active').removeClass('active');
            $(this).parent().addClass('active');
    })

//TICKET: discount
	$('#select_discount').change(function() {
	var has = $('#select_discount').find(":selected").val();
	$(this).parent().siblings('.ticket__price').text(has);
 });
	$('.ticket__item:nth-child(2) .ticket__price').text('650 PLN');
	$('#select_discount').select2({
    		minimumResultsForSearch: Infinity
    })

// NAV: scroll up/down
    var prev = 0;
    var $window = $(window);
    var nav = $('header');

    $window.on('scroll', function(){
        if ($(window).scrollTop() > 50) {
            $('header').addClass('fixed');
        } else {
            $('header').removeClass('fixed');
        }
        var scrollTop = $window.scrollTop();
        nav.toggleClass('hidden', scrollTop > prev);
        prev = scrollTop;
    });
});

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});