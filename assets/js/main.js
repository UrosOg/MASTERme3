document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
    
    e.preventDefault();
    
    document.querySelector(this.getAttribute("href"))
    .scrollIntoView({
    behavior:"smooth"
    });
    
    });
    });


!(function($) {
 "use strict";
/*------------------------------------------------------------------------
 Init AOS
------------------------------------------------------------------------*/      
  function aos_init() {
    AOS.init({
      duration: 1000,
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

})(jQuery);