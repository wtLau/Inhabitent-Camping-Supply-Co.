(function($) {
   $('.search-field').hide();
   $('.fa-search').on('click', function(event) {
      event.preventDefault();
      $('.search-field').toggle('slow');
    })

   $(document).on('click', function(event) {
    if(! $('.search-field').is(event.target) ) {
      $('.search-field').hide('slow');
    }
   });
})(jQuery);