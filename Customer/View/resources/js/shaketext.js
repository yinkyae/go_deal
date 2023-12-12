$(document).ready(function () {
    // Function to toggle the shaking effect
    function toggleShake() {
      $('.review').toggleClass('shake');
    }
  
    // Call the toggleShake function every 2 seconds
    setInterval(toggleShake, 2000);
  });