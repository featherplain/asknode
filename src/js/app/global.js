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
          console.log('click');
          e.preventDefault();

          $toggleBtn.toggleClass('gNav--is-active');
          $toggledMenu.toggleClass('gNav--is-active');

        });
        // add button that display child menu items
        $('#js-nav').find('.menu-item-has-children > a').after('<button class="btnSlideMenu"></button>');

        // toggle submenu items.
        var $dropDownToggle = $('#js-nav').find('.btnSlideMenu');

        $dropDownToggle.on('click', function(e) {
          $(this).siblings('.sub-menu').slideToggle();
        });
      }
    };
    mobileNav.init();
    // pc
    var dropdown = {
      init: function() {
        var $dropdown = $('.menu-item-has-children');
        var notHover = true;

        var action = $(window).width() > 640 ? 'hover' : 'click';

        $dropdown.on(action, function() {
          if(notHover) {
            $(this).find('>.sub-menu').fadeIn(260);
            notHover = false;
          } else {
            $(this).find('>.sub-menu').fadeOut(260);
            notHover = true;
          }
        }).bind(this);
      }
    };
    dropdown.init();
  });
})(jQuery);
