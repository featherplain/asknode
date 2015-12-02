(function($) {
  $(document).ready(function(){
    // *************************************************
    // Initialize Foundation
    // *************************************************
    if(typeof $.prototype.foundation === 'function') {
      $(document).foundation();
    }
    // *************************************************
    // Global navigation
    // *************************************************
    // mobile
    var mobileNav = {
      init: function() {
        // toggle global navigation
        var $toggleBtn   = $('.btnMenuTrigger');
        var $toggledMenu = $('.gNav');

        $toggleBtn.on('click', function(e) {
          e.preventDefault();

          $toggleBtn.toggleClass('gNav--is-active');
          $toggledMenu.toggleClass('gNav--is-active');

        });
        // add button that display child menu items
        $('#gNav').find('.gMenu__item--has-child > a').after('<button class="btnSlideMenu"></button>');

        // toggle submenu items.
        var $dropDownToggle = $('#gNav').find('.btnSlideMenu');

        $dropDownToggle.on('click', function(e) {
          $(this).siblings('.js-dropdown').slideToggle();
        });
      }
    };
    mobileNav.init();
    // pc
    var dropdown = {
      init: function() {
        var $dropdown = $('.gMenu__item--has-child');

        $dropdown.hover(function() {
          $('>.js-dropdown', this).slideDown();
        },
        function() {
          $('>.js-dropdown', this).slideUp();
        });
      }
    };
    dropdown.init();
  });
})(jQuery);
