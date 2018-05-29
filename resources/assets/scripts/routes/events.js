export default {
  init() {
    // JavaScript to be fired on the events page
    
    $(".info-display").on("click", function() {
      $(this).closest(".section-event").find(".event-info").slideToggle();
    });

  },
  finalize() {
    // JavaScript to be fired on the events page, after the init JS
  },
};
