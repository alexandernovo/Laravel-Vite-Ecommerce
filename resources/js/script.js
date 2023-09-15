// JavaScript (jQuery)
import $ from 'jquery';

$(document).ready(function () {
    $('#menu-button').on('click', function (event) {
        event.stopPropagation(); // Prevents the click event from propagating to the document
        $('#menu-content').toggleClass('hidden'); // Toggle the 'hidden' class on the menu
    });

    // Add a click event listener to the document to close the menu when clicking outside of it
    $(document).on('click', function (event) {
        // Check if the target of the click event is not a descendant of the #menu-content element
        if (!$(event.target).closest('#menu-content').length && !$(event.target).is('#menu-content')) {
            $('#menu-content').addClass('hidden'); // Hide the menu if the click was outside of it
        }
    });
});
