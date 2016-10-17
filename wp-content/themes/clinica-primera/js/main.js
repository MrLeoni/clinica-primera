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
  
  // Parallax Efect
  $('.parallax').each(function(){
  	var $obj = $(this);
  	$(window).scroll(function() {
  		var yPos = -($(window).scrollTop() / $obj.data('speed')); 
  		var bgpos = '50% '+ yPos + 'px';
  		$obj.css('background-position', bgpos );
  	}); 
  });
  
  // Toggle active class on topic title in FAQ page
  function faqToggleClass() {
    var menu = $('.panel-title a');
    menu.click(function () {
      menu.not(this).removeClass('faq-active');
      $(this).toggleClass('faq-active');
    });
  }
  faqToggleClass();
  
  // Home Slider args
  $(".home-slider").bxSlider({
    mode: "fade",
    pagerCustom: ".custom-pager",
    responsive: true,
    controls: false,
    auto: true,
    speed: 800,
    pause: 8000,
    autoHover: true,
  });
  
});