(function($) {
   $('.search-field').hide();
   $('.fa-search').on('click', function(event) {
      event.preventDefault();
      event.stopPropagation();
      $('.search-field').toggle('slow');
    })

   $(document).on('click', function(event) {
    if(! $('.search-field').is(event.target) ) {
      $('.search-field').hide('slow');
    }
   });

   $(window).on('scroll', function() {
      var scrollPosition = $(window).scrollTop();
      var heroHeight = $('#post-38').height();
      if(scrollPosition > heroHeight) {
        $('#site-navigation').show();
        $('#site-navigation').addClass('active');
        $('#site-navigation').addClass('main-navigation-dark');
        $('#site-navigation').removeClass('main-navigation');
      } else if ( scrollPosition ==0 ) {
        $('#site-navigation').show();
        $('#site-navigation').removeClass('active');
        $('#site-navigation').addClass('main-navigation');
        $('#site-navigation').removeClass('main-navigation-dark');        
      } else {
        $('#site-navigation').hide();
      }

   })
})(jQuery);