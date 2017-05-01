$(document).ready(function() {
    new WOW().init();
    /*$('#carousel').carousel({
        interval: 100
    });*/
    /*$('#carousel').carousel();*/

    $("[data-fancybox]").fancybox({
        image : {
            // Wait for images to load before displaying
            // Requires predefined image dimensions
            // If 'auto' - will zoom in thumbnail if 'width' and 'height' attributes are found
            preload : "auto",
            // Protect an image from downloading by right-click
            protect : true
        },
        thumbs : {
            showOnStart   : true, // Display thumbnails on opening
            hideOnClosing : true   // Hide thumbnail grid when closing animation starts
        }
    });
    $('#loader-wrapper').hide();
});

//$('.parallax').parallax({imageSrc: '../images/11.jpg'});

