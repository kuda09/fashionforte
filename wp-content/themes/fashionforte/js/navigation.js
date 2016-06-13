$(document).ready(function () {


    var $menuButton = $(".menu-toggle");
    var $siteNavigation = $("#site-navigation");
    var $standardArticle = $('article.standard-article');
    var $searchButton = $('.searchHeader a');
    var $searchContainer = $('.searchHeader .searchContainter');
    var $searchClose = $('.searchHeader .searchContainter span.close');

    $menuButton.on("click", function (e) {

        var $this = $(this);
        e.preventDefault();

        if($siteNavigation.hasClass("toggled")) {

            $siteNavigation.removeClass("toggled")
            $this.attr("aria-expanded", "false");
            $siteNavigation.attr("aria-expanded", "false");
            return;
        };

        $siteNavigation.addClass("toggled");
        $this.attr("aria-expanded", "true");
        $siteNavigation.attr("aria-expanded", "true");



    });

    $searchButton.on("click", function (e) {

        e.preventDefault();

        $searchContainer.addClass('active');
        $searchButton.hide();

    });

    $searchClose.on("click", function (e) {

        e.preventDefault();

        $searchContainer.removeClass('active');
        $searchButton.show();

    });

    var disableHoverFadeOnMobileDevices = function () {

        var $windowWidth = $(document).width();

        if($windowWidth <= 768) {

            $standardArticle.find(".exclusive-title").addClass("active");
        }

    }

    disableHoverFadeOnMobileDevices();

    $siteNavigation.find(".page_item_has_children").on("click", function (e) {

        e.preventDefault();

        var $this = $(this);

        $this.find(".children").toggleClass("active");

    });

    $standardArticle.on("mouseenter", function (e) {



        var $this = $(this);

        $this.find(".exclusive-title").addClass("active");

    });

    $standardArticle.on("mouseleave", function (e) {

        var $this = $(this);

        $this.find(".exclusive-title").removeClass("active");

    });
    
    

});
