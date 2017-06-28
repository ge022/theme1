$(function () {

  // For browsers that do not support css height vh
  $(window).on('load, resize', function () {
    $('.about').css('height', window.innerHeight);

    if ($(window).width() > 767) {
      $('main').css('margin-bottom', $('footer').css('height'));
    } else {
      $('main').css('margin-bottom', '0px');
    }

  }).trigger('resize');

  $('body').scrollspy({
    target: '.navbar',
    offset: 61
  });

  $(document).on('click', '.navbar-nav .nav-link, .the-company a, .smooth-nav', function(event) {
    $('html, body').stop().animate({
      scrollTop: $($(this).attr('href')).offset().top - 60
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });

});

