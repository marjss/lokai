$(document).ready(function() {
			
   

   $('.nav-left').click(function() {
        $('#sidebar-wrapper').toggleClass('active');
    });

  $('.closeIcon').click(function() {
        $('#sidebar-wrapper').removeClass('active');
        $(".homePage").toggleClass("toggled");
        $(".pagewrap1").toggleClass("toggled");
        $('.menutext').toggleClass('menu-hide');
         $('.menuToggle').toggleClass('CloseIcon');
    });

  var windowHeight = $(window).height();
    if ($(window).width() < 768) {
        $('.banner').css('height', windowHeight);
        $('.footer-wrap-clone').html($('.footer-wrap').html());
       
    } else {
      $('#pagepiling').pagepiling({
      menu: '#menu',
      anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7'],
      //sectionsColor: ['#bfda00', '#2ebe21', '#2C3E50', '#51bec4'],
    
      navigation: {
         'position': 'right',
         'tooltips': ['Welcome', 'Helping Veterans', 'Source', 'Directly from', 'Directly from', 'Composition', 'Thank you']
      },   
      
   });
    }
				
});