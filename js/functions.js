( function($) {

  $("#block-1 div.wp-block-group__inner-container:contains(' '), #block-1 div.wp-block-group__inner-container:empty").closest('#block-1').hide();
  $("#block-2 div.wp-block-group__inner-container:contains(' '), #block-2 div.wp-block-group__inner-container:empty").closest('#block-2').hide();
  $("#block-4 div.wp-block-group__inner-container:contains(' '), #block-3 div.wp-block-group__inner-container:empty").closest('#block-3').hide();
  $("#block-4 div.wp-block-group__inner-container:contains(' '), #block-4 div.wp-block-group__inner-container:empty").closest('#block-4').hide();

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.section-testimonials__testimonial').matchHeight();
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
    $(window).on('load', function() {
        var select = $('.__js_filter-select');
        var filterItem = $('.filter__item');
        var filterItemAll = $('.filter__item[data-filter="*"]');
        var filterActiveClass = 'filter__item--active';
        var grid = $('.__js_gallery-filter').isotope({
            // itemSelector: '.works__item',
            layoutMode: 'packery',
            packery: {
                gutter: 0
            },
        });
        var grid2 = $('.__js_news-list-filter').isotope({
            itemSelector: '.__js_news-list-item',
            layoutMode: 'packery',
            packery: {
                gutter: 0
            },
        });

        var grid3 = $('.__js_projects-list-filter').isotope({
            itemSelector: '.__js_projects-list-item',
            layoutMode: 'packery',
            packery: {
                gutter: 0
            },
        });




        setTimeout(function() {
            $('.masonry').isotope({
                itemSelector: '.masonry-item',
                layoutMode: 'packery'
            });
        }, 100);


        select.on('change', function() {
            var value = select.val();
            var filterValue = value !== '*' ? '.__js_' + value : value;
            if (value !== '*') {
                var filterValue = '.__js_' + value;
                filterItem.removeClass(filterActiveClass);
            } else {
                filterItemAll.addClass(filterActiveClass);
                var filterValue = value;
            }
            grid.isotope({
                filter: filterValue
            });
        });

        filterItem.on('click', function() {
            var filterValue = $(this).attr('data-filter');
            $(this).addClass(filterActiveClass).siblings().removeClass(filterActiveClass);
            grid.isotope({
                filter: filterValue
            });
            grid2.isotope({
                filter: filterValue
            });
            if ($('.__js_news-list-filter') && $('.__js_news-list-filter').length > 0) {
                var destination = $('.__js_news-list-filter').offset().top - 200;
                $('html').animate({
                    scrollTop: destination
                }, 1100);
            }
        });

    });
})();

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

var heroSwiper = new Swiper('.heroSwiper', {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var testswiper = new Swiper('._js_testimonials', {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 90,
          },
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });




      var relatedSwiper = new Swiper('._js_relatedSwiper', {
              slidesPerView: 1,
              spaceBetween: 20,
              loop: true,
              breakpoints: {
                640: {
                  slidesPerView: 1,
                  spaceBetween: 20,
                },
                768: {
                  slidesPerView: 2,
                  spaceBetween: 20,
                },
                1024: {
                  slidesPerView: 4,
                  spaceBetween: 30,
                },
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
            });


    var caseswiper = new Swiper('._js_case-study', {

        grid: {
          rows: 2,
        },


        // centeredSlides: true,
        // loop: true,


        breakpoints: {
          640: {
            slidesPerView: 2.18,
          },
          768: {
            slidesPerView: 2.18,
          },
          1024: {
            slidesPerView: 3.18,
          },
          1500: {
            slidesPerView: 4.18,
          },
        },


        spaceBetween: 30,

        navigation: {
          nextEl: ".swiper-button-next",
          // prevEl: ".swiper-button-prev",
        },


        scrollbar: {
          el: ".swiper-scrollbar",
          hide: false,
        }
    });


    var csgallery = new Swiper("._js_cs-gallery", {
      slidesPerView: 2,
        spaceBetween: 0,
        loop: true,

        breakpoints: {
          640: {

          },
          1024: {
            slidesPerView: 3,
          },
          1500: {
            slidesPerView: 4,
          },
        },


        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#F6C93B",
      "text": "#000"
    },
    "button": {
      "background": "#fff"
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
 });

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
