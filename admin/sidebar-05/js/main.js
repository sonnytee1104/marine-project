(function($) {

    "use strict";

    var fullHeight = function() {
        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function(){
            $('.js-fullheight').css('height', $(window).height());
        });
    };

    // Function to toggle sidebar state
    var toggleSidebarState = function() {
        $('#sidebar').toggleClass('active');
        // Store the state in localStorage
        var sidebarState = $('#sidebar').hasClass('active') ? 'open' : 'closed';
        localStorage.setItem('sidebarState', sidebarState);
    };

    // Check and set the sidebar state on page load
    var storedSidebarState = localStorage.getItem('sidebarState');
    if (storedSidebarState === 'closed') {
        $('#sidebar').removeClass('active');
    }

    // Attach click event handler to toggle sidebar
    $('#sidebarCollapse').on('click', toggleSidebarState);

    // Initial setup
    fullHeight();

})(jQuery);
