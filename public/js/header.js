document.addEventListener("DOMContentLoaded", () => {

    /* =====================================================
       MOBILE MAIN MENU
    ===================================================== */

    const menuToggle =
        document.getElementById("menuToggle");

    const mobileMenu =
        document.getElementById("mobileMenu");


    if (menuToggle && mobileMenu) {

        menuToggle.addEventListener("click", () => {

            const isOpen =
                menuToggle.classList.toggle("active");

            mobileMenu.classList.toggle("open");

            menuToggle.setAttribute(
                "aria-expanded",
                isOpen
            );

        });

    }



    /* =====================================================
       MOBILE DROPDOWNS
    ===================================================== */

    const mobileDropdowns =
        document.querySelectorAll(
            ".mobile-dropdown"
        );


    mobileDropdowns.forEach((dropdown) => {

        const button =
            dropdown.querySelector(
                ".mobile-dropdown-toggle"
            );


        button.addEventListener("click", () => {

            const isOpen =
                dropdown.classList.contains("open");


            /* Close all other dropdowns */

            mobileDropdowns.forEach((item) => {

                if (item !== dropdown) {

                    item.classList.remove("open");

                }

            });


            /* Toggle current dropdown */

            dropdown.classList.toggle(
                "open",
                !isOpen
            );

        });

    });



    /* =====================================================
       DESKTOP DROPDOWN CLICK
       Only useful if keyboard / touch is involved.
    ===================================================== */

    const desktopDropdowns =
        document.querySelectorAll(
            ".desktop-nav .nav-dropdown"
        );


    desktopDropdowns.forEach((dropdown) => {

        const button =
            dropdown.querySelector(
                ".dropdown-toggle"
            );


        button.addEventListener("click", (event) => {

            /*
             Desktop par hover primary behavior hai.
             Click functionality sirf <= 1050px
             par active hogi.
            */

            if (window.innerWidth <= 1050) {

                event.preventDefault();

                const isOpen =
                    dropdown.classList.contains("open");


                desktopDropdowns.forEach((item) => {

                    item.classList.remove("open");

                });


                dropdown.classList.toggle(
                    "open",
                    !isOpen
                );

            }

        });

    });



    /* =====================================================
       CLOSE MOBILE MENU AFTER LINK CLICK
    ===================================================== */

    const mobileLinks =
        document.querySelectorAll(
            ".mobile-menu a"
        );


    mobileLinks.forEach((link) => {

        link.addEventListener("click", () => {

            if (menuToggle) {

                menuToggle.classList.remove(
                    "active"
                );

                menuToggle.setAttribute(
                    "aria-expanded",
                    "false"
                );

            }


            if (mobileMenu) {

                mobileMenu.classList.remove(
                    "open"
                );

            }

        });

    });



    /* =====================================================
       ESC KEY
    ===================================================== */

    document.addEventListener(
        "keydown",
        (event) => {

            if (event.key !== "Escape") {
                return;
            }


            /* Close mobile menu */

            if (mobileMenu) {

                mobileMenu.classList.remove(
                    "open"
                );

            }


            if (menuToggle) {

                menuToggle.classList.remove(
                    "active"
                );

                menuToggle.setAttribute(
                    "aria-expanded",
                    "false"
                );

            }


            /* Close desktop dropdowns */

            desktopDropdowns.forEach((dropdown) => {

                dropdown.classList.remove(
                    "open"
                );

            });

        }
    );

});