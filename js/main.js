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
        loop:true,
        center:true,
        margin:10,
        width:280,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:3
          },
          1200:{
            items:6
          }
        }
      });
    }
  };  

	/*
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
	*/

})(jQuery);
