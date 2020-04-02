import AOS from 'aos';
import Swiper from 'swiper/js/swiper.js';
import '@fancyapps/fancybox';
import imagesLoaded from 'imagesloaded';

export default {
  init() {

      jQuery('.navbar-burger').on('click', function () {
          var mobilemenu = jQuery('#mobile-menu');
          if (mobilemenu.hasClass('flex')) {
              mobilemenu.removeClass('flex').addClass('hidden');
          } else {
              mobilemenu.removeClass('hidden').addClass('flex');
          }
      });

      if (jQuery(window).width() < 1024) {

          jQuery('.dropdown-item').on('click', function (e) {
              var navbar_dropdown = jQuery('.navbar-dropdown');
              navbar_dropdown.hide();
              if (jQuery(this).next(navbar_dropdown).hasClass('open')) {
                  jQuery(this).next(navbar_dropdown).removeClass('open').css('display', 'none');
              } else {
                  jQuery(this).next(navbar_dropdown).addClass('open').animate({'left': 0}).css('display', 'block');
              }
              e.preventDefault();
          });

      } else {

          jQuery('.has-dropdown').hover(function() {
              var navbar_dropdown = jQuery('.navbar-dropdown');
              navbar_dropdown.hide();
              jQuery(this).find(navbar_dropdown).show();
          }, function(){
              var navbar_dropdown = jQuery('.navbar-dropdown');
              navbar_dropdown.hide();
          });

      }

      jQuery('.menu-back').on('click', function (e) {
          var navbar_dropdown = jQuery('.navbar-dropdown');
          navbar_dropdown.removeClass('open').animate({'left': '1000px'});
          e.preventDefault();
      });

      jQuery('.category-filter').on('click', function (e) {
          var filter_dropdown = jQuery('.filter-dropdown');
          var filter_arrow = jQuery('.filter-arrow');
          if (filter_dropdown.hasClass('open')) {
              filter_dropdown.removeClass('open').slideUp();
              jQuery('.filter-arrow-down').removeClass('hidden');
              jQuery('.filter-arrow-up').addClass('hidden');
          } else {
              filter_dropdown.addClass('open').slideDown();
              jQuery('.filter-arrow-up').removeClass('hidden');
              jQuery('.filter-arrow-down').addClass('hidden');
          }
          e.preventDefault();
      });

      jQuery('.table-title').on('click', function (e) {
          var table_dropdown = jQuery(this).next('.table-dropdown');
          var table_arrow_down = jQuery(this).find('.table-arrow-down');
          var table_arrow_up = jQuery(this).find('.table-arrow-up');
          if (table_dropdown.hasClass('flex')) {
              table_dropdown.removeClass('flex').addClass('hidden');
              table_arrow_down.removeClass('hidden');
              table_arrow_up.addClass('hidden');
              jQuery(this).addClass('mb-4');
          } else {
              table_dropdown.addClass('flex').removeClass('hidden');
              table_arrow_up.removeClass('hidden');
              table_arrow_down.addClass('hidden');
              jQuery(this).removeClass('mb-4');
          }
          e.preventDefault();
      });

      var mySwiper = new Swiper ('.swiper-container', {
          // Optional parameters
          direction: 'horizontal',
          slidesPerView: 4,
          resistanceRatio: 0,
          // If we need pagination
          pagination: {
              el: '.swiper-pagination',
          },

          // Navigation arrows
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },

          // And if we need scrollbar
          scrollbar: {
              el: '.swiper-scrollbar',
          },
          breakpoints: {
              767: {
                slidesPerView: 3,
              },
              1024:{
                  noSwiping: true,
                  allowSlidePrev: false,
                  allowSlideNext: false
              }
          },
      });

      jQuery('.sub-form').on('click', function(e){
          var subform = jQuery('.subscription-form');
          e.preventDefault();
          if (subform.hasClass('hidden')){
              subform.removeClass('hidden').addClass('flex');
          } else {
              subform.removeClass('flex').addClass('hidden');
          }
      });

      jQuery('.social-media').hover(function(){
          jQuery(this).find('.icon-hover').removeClass('hidden');
          jQuery(this).find('.icon').addClass('hidden');
      }, function(){
          jQuery(this).find('.icon').removeClass('hidden');
          jQuery(this).find('.icon-hover').addClass('hidden');
      });

      jQuery('[type="text"]').on('click',function(){
          jQuery(this).next('._error').hide();
      });

      jQuery('body').on('click', '._error',function(){
          jQuery(this).hide();
          jQuery(this).prev('input').focus();
      });

      var i = 1;
      var arr = [1,2,3,4,5,6,7];
      var info = jQuery('.info-'+i);

      jQuery.each(arr, function(i) {
          jQuery('.info-'+i).hover(function(){
              jQuery('.ig').not(this).removeClass('block').addClass('hidden');
              jQuery('#info-'+i).removeClass('hidden').addClass('block');
          }, function(){
              jQuery('.ig').not(this).removeClass('block');
          });
          jQuery('.info-'+i).on('click', function(e){
              jQuery('.info-text-'+i).removeClass('hidden').addClass('block');
              jQuery('.info-text-'+i).siblings().removeClass('block').addClass('hidden');
              e.preventDefault();
          });
      });

      jQuery('.video-wrap').on('click',function(e){
          e.preventDefault();
          if (jQuery(this).find('img').hasClass('hidden')){
              jQuery(this).find('img').removeClass('hidden');
              jQuery(this).find('div').addClass('hidden');
          } else {
              jQuery(this).find('div').removeClass('hidden');
              jQuery(this).find('img').addClass('hidden');
          }
      });


      var root = new RegExp(location.host);

      jQuery('a').each(function(){

          if(root.test(jQuery(this).attr('href'))){
              jQuery(this).addClass('local');
          }
          else{
              // a link that does not contain the current host
              var url = jQuery(this).attr('href');
              //console.log(url);
              if( typeof url === 'string' && url.length > 1)
              {
                  jQuery(this).attr('target', '_blank');
              }
          }
      });

      jQuery('.video-warning-container').on('click', function(){
          jQuery(this).hide();
      });

      // var $groupSelection = jQuery('.video-warning-container, .video-warning');
      //
      // $groupSelection.on('click', function(e){
      //     $groupSelection.each(function(){
      //         jQuery(this).hide();
      //     });
      // });

  },
  finalize() {

      //flexibility(document.body);
      AOS.init();

  },
};
