/* ============================================================
   BOOKIM ADMIN
   Sidebar + Light Theme
   ============================================================ */

(function () {

    'use strict';


    /* ========================================================
       ELEMENTS
       ======================================================== */

    var shell = document.querySelector('.admin-shell');

    var sidebar =
        document.querySelector('.admin-sidebar');

    var sidebarToggle =
        document.querySelector('[data-sidebar-toggle]');

    var sidebarClose =
        document.querySelector('[data-sidebar-close]');

    var backdrop =
        document.querySelector('.sidebar-backdrop');


    /* ========================================================
       FORCE LIGHT MODE
       ======================================================== */

    var root = document.documentElement;

    /* Remove any old dark-theme setting */

    root.removeAttribute('data-theme');

    document.body.removeAttribute('data-theme');


    /* Remove old saved theme */

    try {
        localStorage.removeItem('bookim-admin-theme');
    } catch (error) {
        // localStorage may be unavailable
    }


    /* Remove old theme toggle */

    var themeButtons =
        document.querySelectorAll('[data-theme-toggle]');

    themeButtons.forEach(function (button) {
        button.remove();
    });


    /* ========================================================
       SIDEBAR OPEN
       ======================================================== */

    function openSidebar() {

        if (!shell) {
            return;
        }

        shell.classList.add('sidebar-open');

        if (sidebarToggle) {
            sidebarToggle.setAttribute(
                'aria-expanded',
                'true'
            );
        }

        document.body.style.overflow = 'hidden';
    }


    /* ========================================================
       SIDEBAR CLOSE
       ======================================================== */

    function closeSidebar() {

        if (!shell) {
            return;
        }

        shell.classList.remove('sidebar-open');

        if (sidebarToggle) {
            sidebarToggle.setAttribute(
                'aria-expanded',
                'false'
            );
        }

        document.body.style.overflow = '';
    }


    /* ========================================================
       TOGGLE SIDEBAR
       ======================================================== */

    if (sidebarToggle) {

        sidebarToggle.addEventListener(
            'click',
            function () {

                if (
                    shell &&
                    shell.classList.contains('sidebar-open')
                ) {

                    closeSidebar();

                } else {

                    openSidebar();

                }

            }
        );

    }


    /* ========================================================
       CLOSE BUTTON
       ======================================================== */

    if (sidebarClose) {

        sidebarClose.addEventListener(
            'click',
            closeSidebar
        );

    }


    /* ========================================================
       BACKDROP CLICK
       ======================================================== */

    if (backdrop) {

        backdrop.addEventListener(
            'click',
            closeSidebar
        );

    }


    /* ========================================================
       CLOSE AFTER NAVIGATION
       ======================================================== */

    var navLinks =
        document.querySelectorAll(
            '.admin-sidebar .nav-link'
        );


    navLinks.forEach(function (link) {

        link.addEventListener(
            'click',
            function () {

                if (window.innerWidth <= 991.98) {

                    closeSidebar();

                }

            }
        );

    });


    /* ========================================================
       ESCAPE KEY
       ======================================================== */

    document.addEventListener(
        'keydown',
        function (event) {

            if (event.key === 'Escape') {

                closeSidebar();

            }

        }
    );


    /* ========================================================
       WINDOW RESIZE
       ======================================================== */

    window.addEventListener(
        'resize',
        function () {

            if (window.innerWidth > 991.98) {

                closeSidebar();

            }

        }
    );


    /* ========================================================
       PROTECT LIGHT THEME
       ======================================================== */

    /*
       If an old script still tries to put
       data-theme="dark" on <html>, immediately remove it.
    */

    if (window.MutationObserver) {

        var observer =
            new MutationObserver(
                function () {

                    if (
                        root.getAttribute('data-theme')
                        === 'dark'
                    ) {

                        root.removeAttribute(
                            'data-theme'
                        );

                    }

                }
            );


        observer.observe(
            root,
            {
                attributes: true,
                attributeFilter: ['data-theme']
            }
        );

    }


    /* ========================================================
       INITIAL STATE
       ======================================================== */

    closeSidebar();


})();
