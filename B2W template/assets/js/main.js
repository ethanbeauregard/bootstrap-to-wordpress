$(function () {
  // Cache the window object
  var $window = $(window);

  // Parallax background effect
  $('section[data-type="background"]').each(funtion() {
    var $bgobj = $(this); // assigning the object

    $window.scroll(function() {
      // Scroll the background at var speed 
      // the yPos is a negative becuase we are scrolling it UP

      var yPos = -($window.scrollTop() / $bgobj.data('speed'));

      // Put together the final background position
      var coords = '50% ' + yPos + 'px';

      // Move the background 
      $bgobj.css({ backgroundPosition: coords });
    });
  });
});