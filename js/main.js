$("#contact-button").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top
    }, 800);
});

$("#btt").click(function() {
    $('html, body').animate({
        scrollTop: $("#top-bar").offset().top
    }, 800);
});

// $(function () {
//   $('[data-toggle="tooltip"]').tooltip()
// })

// $(".carousel").swipe({
//
//   swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
//
//     if (direction == 'left') $(this).carousel('next');
//     if (direction == 'right') $(this).carousel('prev');
//
//   },
//   allowPageScroll:"vertical"
//
// });
