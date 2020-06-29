export default {
  init() {

    // init Isotope
    var $grid = jQuery('.grid').isotope({
      itemSelector: '.grid-item',
    });

    $grid.imagesLoaded().progress( function() {
      $grid.isotope('layout');
    });

    var initShow = 9; //number of items loaded on init & onclick load more button
    var counter = initShow; //counter for load more button
    var iso = jQuery('.grid').data('isotope'); // get Isotope instance

    loadMore(initShow); //execute function onload

    function loadMore(toShow) {
      jQuery('.grid').find(".hidden").removeClass("hidden");

      var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item) {
        return item.element;
      });
      jQuery(hiddenElems).addClass('hidden');
      jQuery('.grid').isotope('layout');

      //when no more to load, hide show more button
      if (hiddenElems.length == 0) {
        jQuery("#load-more").hide();
      } else {
        jQuery("#load-more").show();
      };

    }

    // //append load more button
    jQuery('.grid').after('<div class="flex flex-row align-center">'+
        '<a id="load-more" class="w-full md:w-1/3 mx-auto bg-green text-white text-lg roboto-light py-3 px-4 cursor-pointer category-filter text-center" href="#">Show more</a>'+
        '</div>');

    //when load more button clicked
    jQuery("#load-more").click(function(e) {
      if (jQuery('#filters').data('clicked')) {
        //when filter button clicked, set initial value for counter
        counter = initShow;
        jQuery('#filters').data('clicked', false);
      } else {
        counter = counter;
      };

      counter = counter + initShow;

      loadMore(counter);
      e.preventDefault();
    });

    //when filter button clicked
    jQuery("#filters").click(function() {
      $(this).data('clicked', true);

      loadMore(initShow);
    });

    jQuery('.show-all').on('click', function(e){
      jQuery('.grid').isotope({ filter: '*' });
      e.preventDefault();
      loadMore(counter);
      jQuery('.filter-dropdown').removeClass('open').slideUp();
    });

    jQuery('.filter-item').on('click', function(e){
      e.preventDefault();
      var category = jQuery(this).data('category');
      jQuery('.grid').isotope({ filter: '.'+category });
      loadMore(counter);
      jQuery('.filter-dropdown').removeClass('open').slideUp();
    });

    jQuery('.grid-item').hover(function(){
      jQuery(this).find('.news-item-text').css('box-shadow', '0 2px 4px 0 rgba(0, 0, 0, 0.50)');
    }, function(){
      jQuery(this).find('.news-item-text').css('box-shadow', '0 5px 10px 0 rgba(0, 0, 0, 0.10)');
    });

  },
};
