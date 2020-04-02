export default {
  init() {
    jQuery('.faq-item .title-block').on('click', function(){
      jQuery(this).parent().toggleClass('open');
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
