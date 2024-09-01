jQuery(document).ready(function($) {
  $('.my-slider').unslider({
      autoplay: true,
       arrows: false
})
  if($(window).width() >= '1700'){
    $('.multiple-items').slick({
    infinite: true,
    dots:true,
    autoplay:true,
    slidesToShow: 6,
    slidesToScroll: 6
});
  }
  if($(window).width() < '1700' && $(window).width() >= '1500'){
    $('.multiple-items').slick({
    infinite: true,
    dots:true,
    autoplay:true,
    slidesToShow: 5,
    slidesToScroll: 5
});
  }
  if($(window).width() < '1500' && $(window).width() >= '1250'){
    $('.multiple-items').slick({
    infinite: true,
    dots:true,
    autoplay:true,
    slidesToShow: 4,
    slidesToScroll: 4
});
  }
  if($(window).width() < '1250' && $(window).width() >= '840'){
    $('.multiple-items').slick({
    infinite: true,
    dots:true,
    autoplay:true,
    slidesToShow: 3,
    slidesToScroll: 3
});
  }
  if($(window).width() < '840' && $(window).width() >= '560'){
    $('.multiple-items').slick({
    infinite: true,
    dots:true,
    autoplay:true,
    slidesToShow: 2,
    slidesToScroll: 2
});
  }
  if($(window).width() < '560'){
    $('.multiple-items').slick({
    infinite: true,
    dots:true,
    autoplay:true,
    slidesToShow: 1,
    slidesToScroll: 1
});
  }
  
});