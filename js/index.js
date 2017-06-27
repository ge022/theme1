$(function () {

  // For browsers that do not support css height vh
  $(window).on('load resize', function () {
    $('.about').css('height', window.innerHeight);
  });

  $('body').scrollspy({
    target: '.navbar',
    offset: 60
  });

  $(document).on('click', '.navbar-nav .nav-link, .the-company a, .smooth-nav', function(event) {
    $('html, body').stop().animate({
      scrollTop: $($(this).attr('href')).offset().top - 59
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });

});

