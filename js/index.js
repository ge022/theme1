$(function () {


  var $window = $(window);
  var $topbar = $('.topbar');
  var $bottombar = $('.bottombar');
  var $main = $("main");
  var $about = $(".about");
  var $footer = $("footer");

  $($window).on('load, resize', function () {

    $($about).css('height', $window.innerHeight);

    if ($($window).width() > 767) {
      $($main).css('margin-bottom', $($footer).css('height'));
    } else {
      $($main).css('margin-bottom', '0px');
    }

  }).trigger('resize');


  var $scroll_to_top = $(".scroll-to-top");
  $($window).scroll(function () {

    var $scroll = $($window).scrollTop();

    if ($window.width() > 992) {
      if ($scroll > 150) {
        $topbar.addClass('topbar-shrink');
        $bottombar.addClass('bottombar-shrink');
      } else {
        $topbar.removeClass('topbar-shrink');
        $bottombar.removeClass('bottombar-shrink');
      }
      if ($scroll >= $window.innerHeight() - 61) {
        $scroll_to_top.addClass("visible");
      } else {
        $scroll_to_top.removeClass("visible");
      }
    }
  }).trigger('scroll');


  $('body').scrollspy({
    target: '.navbar',
    offset: 61
  });

  $(document).on('click', '.navbar-nav .nav-link, .the-company a, .smooth-nav', function (event) {
    $('html, body').stop().animate({
      scrollTop: $($(this).attr('href')).offset().top - 55
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });


  /* Contact form */

  var $modal = $('#myModal');
  var $response = $('.wpcf7-response-output');

  document.addEventListener('wpcf7submit', function (event) {
    $(document).ready(function () {
      $modal.find('.response').text($response.text());
      $modal.modal('show');
    });
  }, false);

});

