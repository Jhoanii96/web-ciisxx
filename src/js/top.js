/* 
    
  AUTOR: 
  JHON ALVARADO ACHATA

*/

(function($){$(function(){$('.p-slide__hero').slick({autoplay:true,autoplaySpeed:5000,centerMode:true,centerPadding:'280px',dots:true,slidesToShow:1,prevArrow:'<button type="button" class="slick-prev"></button>',nextArrow:'<button type="button" class="slick-next"></button>',responsive:[{breakpoint:1500,settings:{centerPadding:'110px',}},{breakpoint:768,settings:{centerMode:false,arrows:false,}},]});$('.p-slide').slick({dots:true,prevArrow:'<button type="button" class="slick-prev"></button>',nextArrow:'<button type="button" class="slick-next"></button>',responsive:[{breakpoint:768,settings:{arrows:false,}},]});$('.p-top__links__list').infiniteslide({'speed':50,'direction':'left','pauseonhover':true,'responsive':false,'clone':3});});})(jQuery);