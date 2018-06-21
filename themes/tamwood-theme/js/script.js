(function($) {
    var $menuToggle = $('.menu-toggle');
    var $mainNavigation = $('.main-navigation-mobile');
    var $hamburgerMenu = $('.hamburger');
    var $subMenuToggle = $('.menu-item-has-children a');
    var $subMenu = $('.sub-menu');
    var $searchToggle = $('.search-icon');
    var $searchBar = $('.search-field');
    var $sectionNav = $('.section-navigation-option');
    var $backButton = $('.back-button');
  
    $menuToggle.on('click', function(evt) {
        evt.preventDefault();
        $mainNavigation.toggleClass('toggled');
        $hamburgerMenu.toggleClass('is-active');
        $subMenuToggle.removeClass('selected');
        $subMenu.removeClass('show');
    });
  
    /**
     * Accordion Menus
     */
    $subMenuToggle.on('click', function() {
        //evt.preventDefault();
        // $subMenuToggle.removeClass('selected');
        toggleState($(this), 'selected');
        toggleState($(this).next($subMenu), 'show');
        // $subMenuToggle.toggleClass('test');
    });

    /**
     * Search Bar
     */
    $searchToggle.on('click', function(evt) {
        evt.preventDefault();
        toggleState($searchBar, 'reveal');
    });

    $sectionNav.on('click', function(evt) {
        evt.preventDefault();
        // $('.program-heading').prepend('<button class="back-button">Back</button>');
        if ($(this).hasClass('option-1')) {
            $('.program-section').addClass('hidden');
            toggleState($('.courses'), 'hidden');
        } else if ($(this).hasClass('option-2')) {
            $('.program-section').addClass('hidden');
            toggleState($('.requirements'), 'hidden');
        } else if ($(this).hasClass('option-3')) {
            $('.program-section').addClass('hidden');
            toggleState($('.start-dates'), 'hidden');
        } else if ($(this).hasClass('option-4')) {
            $('.program-section').addClass('hidden');
            toggleState($('.program-fees'), 'hidden');
        } else if ($(this).hasClass('option-5')) {
            $('.program-section').addClass('hidden');
            toggleState($('.certificates-and-hiring-partners'), 'hidden');
        }
    });
    $backButton.on('click', function() {
        // evt.preventDefault();
        // $backButton.addClass('hidden');
        $('.program-overview').removeClass('hidden');
        $('.program-nav').removeClass('hidden');
        $('.details').removeClass('hidden');
    });
  
    function toggleState(elem, className) {
        if (!elem.hasClass(className)) {
            elem.addClass(className);
            elem.focus();
        } else {
            elem.removeClass(className);
        }
    }
    
  })(jQuery);
  