$(document).ready(function(){
    $('.slick-track').slick({
      dots: true,
      infinite: true,
      speed: 800,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: true,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            centerMode: true,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 1
          }
        }
      ]
    });
});
//button-search
$("#search_submit").click(function() {
    $("#search_input").toggleClass("open-search");
});
//burger-button
$(".navbar-toggler").click(function() {
    $(".navbar-nav").toggleClass("open-nav");
    $("header").toggleClass("header--bc");
});
//aside-mobile
$('.aside_title-block').click(function () {
  var tx = $(this).parent().find('.aside_main-block');
  if ($(tx).hasClass('open-aside')) {
      $(tx).slideUp(function () {
          $(tx).removeClass('open-aside');
      });
  } else {
      $(tx).slideDown(function () {
          $(tx).addClass('open-aside');
      });
  }
  return false;
});





$(window).scroll(function() {
    $('header').toggleClass('scroll', $(this).scrollTop() > 0);
});
