$(function () {

  /* Accordion collapse animation */
  $('.collapse').on('show.bs.collapse', function () {
    $(this).parent().find('.accordian-card-header').removeClass("collapsed");
  }).on('hide.bs.collapse', function () {
    $(this).parent().find('.accordian-card-header').addClass("collapsed");
  });


});