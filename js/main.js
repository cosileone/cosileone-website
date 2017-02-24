$("#contact-button").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact-area").offset().top
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
