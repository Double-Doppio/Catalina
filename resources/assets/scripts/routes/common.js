export default {
  init() {
    // JavaScript to be fired on all pages

    // Active Menu Item
    console.log($('.navigation li a').attr('href'));
    console.log(window.location.pathname);

    $('.navigation li a').each( function(){

      var url = document.createElement('a');

      url.href = $(this).attr('href');

      if (url.href == window.location.href) {
        $(this).addClass("menu-active");
      }

    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
