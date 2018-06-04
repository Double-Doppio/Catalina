export default {
  init() {
    // JavaScript to be fired on all pages

    // Active Menu Item

    $('.navigation li a').each( function() {

      var url = document.createElement('a');

      url.href = $(this).attr('href');

      if (url.href == window.location.href) {
        $(this).addClass("menu-active");
      }

    });

    $('.join').on('click', function () {

      if($('.join').hasClass('join-active')) {

        $('.join-modal').slideUp();
        $('.join').removeClass('join-active');

      } else {
        $('.join-modal').slideDown().css('display','flex');
        $('.join').addClass('join-active');

      }
    });

    $(document).on('click', '.btn-group', function () {
      // CHECK TO SEE IF MENU OPEN CLASS EXISTS
      var isMenuOpen = Boolean($(this).has('.menu-open')[0]);
      var isMenuClose = Boolean($(this).has('.menu-close')[0]);
      if(isMenuOpen){
        $(this).find('i').removeClass('fa-bars menu-open').addClass('fa-times menu-close');
        $('.mobile-drop').slideDown().css('display','flex');
      }
      if(isMenuClose) {
        $(this).find('i').removeClass('fa-times menu-close').addClass('fa-bars menu-open');
        $('.mobile-drop').slideUp();
      }

    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
