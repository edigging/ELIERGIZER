$(document).ready(function () {

    $('.head-reg select').select2({minimumResultsForSearch: Infinity});

    var touch = $('#touch-menu');
    var menu = $('.menu');

    $(touch).on('click', function (e) {
        e.preventDefault();
        menu.slideToggle();
    });

    //Hide (Collapse) the toggle containers on load
    $(".togglebox1").hide();

    //Slide up and down on hover
    $(".shopPlace h3").click(function () {
        $(this).toggleClass('activeShop');
        $(this).next(".togglebox1").slideToggle();
    });

    $(window).resize(function () {
        var w = $(window).width();
        if (w > 767 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });

    $(function () {
        $('#lang').styler();
    });

    $(function () {
        $('.countryDeliv .country').styler();
    });
    $('a.fancyImg').fancybox();

    $(function () {

        // store the slider in a local variable
        var $window = $(window),
            flexslider = {vars: {}};

        // tiny helper function to add breakpoints
        function getGridSize() {
            return (window.innerWidth < 600) ? 2 :
                (window.innerWidth < 1200) ? 3 : 4;
        }


        $window.load(function () {
            $('.flexslider2').flexslider({
                animation: "slide",
                animationLoop: true,
                itemWidth: 292.5,
                itemMargin: 0,
                animationSpeed: 1300,
                minItems: getGridSize(), // use function to pull in initial value
                maxItems: getGridSize() // use function to pull in initial value
            });
        });

        // check grid size on resize event
        $window.resize(function () {
            var gridSize = getGridSize();

            flexslider.vars.minItems = gridSize;
            flexslider.vars.maxItems = gridSize;
        });
    }());


    $(function () {
        SyntaxHighlighter.all();
    });

    

});


$(window).load(function () {
    $('.flexslider').flexslider({
        animation: "fade",
        animationSpeed: 1000,
    });
});