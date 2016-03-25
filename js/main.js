(function ($) {
  Drupal.behaviors.SiteHeaderSearchToggle = {
    attach: function (context, settings) {
      $('.site-search').hide();
      $('.search-toggle a', context).click(function(event){
      	event.preventDefault();
      	$('.site-search').slideToggle(320);
      });
    }
  };
  
  Drupal.behaviors.OwlCarousel = {
    attach: function(context,settings){
      $(".overview .view-content").owlCarousel({
        loop: true,
        center: true,
        width: 280,
        autoHeight: false,
        responsive:{
          0:{
            items:1
          },
          600:{            
            items:2,
            center: false
          },
          860:{
            items:3
          },
          1120: {
            items:4
          },
          1480:{
            items:5
          },
          2560: {
            items: 8
          }
        }
      });
    }
  };  

  Drupal.behaviors.SiteHeaderMenuToggle = {
    attach: function (context, settings) {
      $('.menu-toggle button', context).click(function(event){
        event.preventDefault();
        $('.primary-menu').slideToggle(420);
      });
    }
  };

  Drupal.behaviors.SiteWaypoints = {
    attach: function(context,settings) {
  	  
      // Back to top button
  	var wayHeader = new Waypoint({
          element: $('.site-header', context)[0],
          offset: '-52px',
          handler: function(direction) {
            $('.top-nav a').slideToggle("fast");
          }
        });

  	// Back to top button
  	var wayTopNav = new Waypoint({
        element: $('.site-footer', context)[0],
        offset: '99%',
        handler: function(direction) {
          $('.top-nav').toggleClass('bottom');
        }
      });
      $('.top-nav',context).click(function(event){
      	$("html, body").animate({ scrollTop: 0 }, 444);
      	return false;
      }); 
    }
  };

})(jQuery);
