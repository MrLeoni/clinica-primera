$(document).ready(function() {
  
  // Show & Hide mobile menu navigation
  $(".mobile-btn").click(function() {
    // Add ".mobile-active" class when menu is open
    var mobileBtn = $(".mobile-btn");
    mobileBtn.toggleClass(" mobile-active");
    
    // Open and close menu
    var menu = $("#main-nav");
    menu.slideToggle(500);
    
    // Change the arrow direction when menu is open and when is closed
    var icon = $(".mobile-btn i");
    if (icon.hasClass("ion-ios-arrow-down")) {
      icon.removeClass("ion-ios-arrow-down"),
      icon.addClass("ion-ios-arrow-up")
    } else {
      icon.removeClass("ion-ios-arrow-up"),
      icon.addClass("ion-ios-arrow-down")
    }
  });
  
});