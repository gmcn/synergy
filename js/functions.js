( function($) {

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
  }
  window.onload = startMatchHeight;

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

} ) (jQuery);

var body = $('body');
var DURATION = 300;

function setOverlay(cb) {
    var overlay = $('<div class="overlay"></div>');
    overlay.on('click', cb);
    return overlay;
}

(function() {
    var menuOpenBtn = $('.menu-toggle');
    var menuCloseBtn = $('.menu__close');
    var menu = $('.menu');
    var dropdownLinks = menu.find('.__js_menu-dropdown-link');
    var ModifierClass = {
        MENU: 'menu--opened',
        TOGGLE: 'menu-toggle--opened'
    };
    menuOpenBtn.on('click', function() {
        var overlay = setOverlay(closeMenu);
        body.append(overlay);
        menuCloseBtn.on('click', closeMenu);
        menuOpenBtn.addClass(ModifierClass.TOGGLE);
        setTimeout(function() {
            overlay.fadeIn(DURATION);
            menu.addClass(ModifierClass.MENU);
        }, DURATION + 50);
    });
    dropdownLinks.on('click', function(evt) {
        evt.preventDefault();
        $(this).next().find('a').on('click', closeMenu);
        $(this).next().slideToggle(DURATION);
    });

    function closeMenu() {
        menuCloseBtn.off('click', closeMenu);
        menu.removeClass(ModifierClass.MENU);
        var overlay = $('.overlay').fadeOut(DURATION);
        setTimeout(function() {
            menuOpenBtn.removeClass(ModifierClass.TOGGLE);
            overlay.remove();
        }, DURATION + 50);
    }
    $(window).on('resize', function() {
        var windowWidth = $(window).width();
        if (windowWidth >= mobileBreakpoint) {
            closeMenu();
        }
    });
})();

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#31404E",
      "text": "#AAAEB2"
    },
    "button": {
      "background": "#14191F"
    }
  },
  "theme": "edgeless",
  "position": "bottom",
  "static": true,
  "content": {
    "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "data-policy"
  }
});

var mySwiper = new Swiper('.swiper-container', {
   // Optional parameters
   direction: 'vertical',
   loop: true,

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
 })
