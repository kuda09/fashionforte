/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function () {
    var container, button, menu, links, subMenus, i, len;

    container = document.getElementById('site-navigation');
    if (!container) {
        return;
    }

    button = container.querySelector('.menu-toggle');
    if ('undefined' === typeof button) {
        return;
    }

    menu = container.getElementsByTagName('ul')[0];

    // Hide menu toggle button if menu is empty and return early.
    if ('undefined' === typeof menu) {
        button.style.display = 'none';
        return;
    }

    menu.setAttribute('aria-expanded', 'false');
    if (-1 === menu.className.indexOf('nav-menu')) {
        menu.className += ' nav-menu';
    }

    // button.onclick = function (e) {
    //
    //     e.preventDefault();
    //     if (-1 !== container.className.indexOf('toggled')) {
    //         container.className = container.className.replace(' toggled', '');
    //         button.setAttribute('aria-expanded', 'false');
    //         menu.setAttribute('aria-expanded', 'false');
    //     } else {
    //         container.className += ' toggled';
    //         button.setAttribute('aria-expanded', 'true');
    //         menu.setAttribute('aria-expanded', 'true');
    //     }
    // };

    // Get all the link elements within the menu.
    links = menu.getElementsByTagName('a');
    subMenus = menu.getElementsByTagName('ul');

    // Set menu items with submenus to aria-haspopup="true".
    for (i = 0, len = subMenus.length; i < len; i++) {
        subMenus[i].parentNode.setAttribute('aria-haspopup', 'true');
    }

    // Each time a menu link is focused or blurred, toggle focus.
    for (i = 0, len = links.length; i < len; i++) {
        links[i].addEventListener('focus', toggleFocus, true);
        links[i].addEventListener('blur', toggleFocus, true);
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while (-1 === self.className.indexOf('nav-menu')) {

            // On li elements toggle the class .focus.
            if ('li' === self.tagName.toLowerCase()) {
                if (-1 !== self.className.indexOf('focus')) {
                    self.className = self.className.replace(' focus', '');
                } else {
                    self.className += ' focus';
                }
            }

            self = self.parentElement;
        }
    }


})();

$(document).ready(function () {
    $('.articles-slide').slick({
        speed: 500,
        autoscroll: true
    });

    var $menuButton = $(".menu-toggle");
    var $siteNavigation = $("#site-navigation");
    var $standardArticle = $('article.standard-article');


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

    })

    $standardArticle.on("mouseleave", function (e) {

        var $this = $(this);

        $this.find(".exclusive-title").removeClass("active");

    })

});
