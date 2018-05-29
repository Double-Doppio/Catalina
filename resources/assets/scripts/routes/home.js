export default {
  init() {
    // JavaScript to be fired on the home page
    $(document).ready(function() {
      if ($.cookie('contribute') == null) {
          $('.contribute-modal').css("display", "flex");
          $.cookie('contribute', 30);
      }
    });

    $('.close-contribute').on("click", function(){
      $('.contribute-modal').fadeOut();
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
