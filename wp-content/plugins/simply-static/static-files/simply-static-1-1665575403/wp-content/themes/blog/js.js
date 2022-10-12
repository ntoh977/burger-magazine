

  $("ul.menu--catigory").on('click', 'li', function () {
    $(this).siblings().removeClass('active');
    $(this).addClass('active');

  });




$(document).ready(function (){
 
  // $(document).ready(function () {

  // $(".slick-next").click(function(e){
  //     // e.preventDefault();
  //     $(".slick-next").not($(this)).removeClass("active_slick");
  //     $(this).toggleClass("active_slick");
  //   });

  $('.slider__top').slick({
    slidesToShow: 4,
    arrows: true,
    dots: false,
    prevArrow: false,
    nextArrow: false,
    // centerMode:true,
    // prevArrow: "<div class='visible-lg slick-prev'><img src='./img/Vector__l.png' ></div>",
    // nextArrow: "<div class='visible-lg slick-next'><img src='./img/Vector__r.png' class='rotate'></div>",
    responsive: [
      {
        breakpoint: 1032,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 836,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 580,
        settings: {
          centerMode: true,
          slidesToShow: 1,
        }
      }
    ],
  });
  //   //     $('.post__slide').slick({
  //   //         slidesToShow: 3,
  //   //         arrows: true,
  //   //         responsive: [
  //   //             {
  //   //                 breakpoint: 836,
  //   //                 settings: {
  //   //                     slidesToShow: 2,
  //   //                 }
  //   //             },
  //   //             {
  //   //                 breakpoint: 580,
  //   //                 settings: {
  //   //                     slidesToShow: 1,
  //   //                 }
  //   //             }
  //   //         ],
  //   //         prevArrow: "<div class='visible-lg slick-prev'><img src='./img/Vector__l.png' ></div>",
  //   //         nextArrow: "<div class='visible-lg slick-next'><img src='./img/Vector__r.png' class='rotate'></div>",
  //   //     });

  //   //     // $('.slider__one').slick({
  //   //     //     cssEase: 'linear',
  //   //     //     arrows: true,
  //   //     //     autoplay: true,
  //   //     //     autoplaySpeed: 2000,
  //   //     //     prevArrow: "<div class='visible-lg slick-prev'><img src='./img/Vector_4.png'></div>",
  //   //     //     nextArrow: "<div class='visible-lg slick-next'><img src='./img/Vector_4.png' class='rotate'></div>",
  //   //     // });
  // });

  // $(document).ready(function () {
  $("#top").hide();
  $(function toTop() {
    $(window).scroll(function () {
      if ($(this).scrollTop() >= 1300) {
        $('#top').fadeIn();
      } else {
        $('#top').fadeOut();
      }
    });

    $('#top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });
  // });


  $("ul.menu--catigory").on('click', 'li', function () {
    $(this).siblings().removeClass('active');
    $(this).addClass('active');

  });


});