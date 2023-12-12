$(document).ready(function(){
  $('#brandSlider').owlCarousel({
      loop: true, // Loop the slider infinitely
      autoplay: true, // Enable auto-play
      autoplayTimeout: 3000, // Auto-play interval in milliseconds
      items: 6, // Number of items to display
      margin: 20 // Space between items
      // Additional options and settings can be added here
  });

  $('#heroSlider').owlCarousel({
    loop: true, // Loop the slider infinitely
    autoplay: true, // Enable auto-play
    autoplayTimeout: 2000, // Auto-play interval in milliseconds
    items: 1, // Number of items to display
    margin: 2 // Space between items
    // Additional options and settings can be added here
});
});
