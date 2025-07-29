$(window).scroll(function() {
    // selectors
    var $window = $(window),
        $body = $('body'),
        $panel = $('.panel');
    
    // Change 33% earlier than scroll position so colour is there when you arrive.
    var scroll = $window.scrollTop() + ($window.height() / 3);
  
    $panel.each(function () {
        var $this = $(this);
        
        // if position is within range of this panel.
        if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {
            // Remove all classes on body with color-
            $body.removeClass(function (index, css) {
                return (css.match (/(^|\s)color-\S+/g) || []).join(' ');
            });
             
            // Add class of currently active div
            $body.addClass('color-' + $(this).data('color'));
        }
    });    
  }).scroll(); // Trigger scroll event on page load