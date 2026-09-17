

<footer class="university-footer">

    <div class="footer-bg" aria-hidden="true">
        <img
            src="{{ asset('asset/footer.webp') }}"
            alt=""
        >
    </div>

    {{-- Dark glass overlay --}}
    <div class="footer-bg-overlay"></div>


    <div class="container footer-container">


        {{-- =================================================
            TOP FOOTER
        ================================================= --}}

        <div class="footer-top">


            {{-- =============================================
                LEFT : QUICK LINKS
            ============================================== --}}

            <div class="footer-column footer-navigation">

                <div class="footer-section-title">

                    <span></span>

                    <h3>
                        QUICK LINKS
                    </h3>

                </div>


                <div class="footer-link-grid">

                    <nav class="footer-link-list">

                        <a href="/">
                            Home
                        </a>

                        <a href="#">
                            About University
                        </a>

                        <a href="#">
                            Academics
                        </a>

                        <a href="#">
                            Faculty
                        </a>

                        <a href="#">
                            Research
                        </a>

                    </nav>


                    <nav class="footer-link-list">

                        <a href="#">
                            Students
                        </a>

                        <a href="#">
                            Notices
                        </a>

                        <a href="#">
                            Events
                        </a>

                        <a href="#">
                            Gallery
                        </a>

                        <a href="#">
                            Contact
                        </a>

                    </nav>

                </div>

            </div>



            {{-- =============================================
                CENTER : UNIVERSITY BRAND
            ============================================== --}}

            <div class="footer-brand">


                <div class="footer-logo-wrap">

                    <div class="footer-logo-ring">

                        <img
                            src="{{ asset('asset/logo.png') }}"
                            alt="Ranchi University Logo"
                        >

                    </div>

                </div>


                <h2>
                    RANCHI UNIVERSITY
                </h2>


                <div class="footer-brand-divider">

                    <span></span>
                    <i></i>
                    <span></span>

                </div>


                <p class="footer-department">
                    DEPARTMENT OF MATHEMATICS
                    <b>&amp;</b>
                    MCA APPLICATIONS
                </p>


                <p class="footer-motto">
                    Knowledge · Excellence · Innovation
                </p>

            </div>



            {{-- =============================================
                RIGHT : CONTACT
            ============================================== --}}

            <div class="footer-column footer-contact">


                {{-- Office --}}

                <div class="footer-contact-item">

                    <div class="footer-contact-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                        >
                            <rect
                                x="3"
                                y="4"
                                width="18"
                                height="17"
                                rx="2"
                            />

                            <path d="M8 2v4"/>
                            <path d="M16 2v4"/>
                            <path d="M3 10h18"/>
                            <path d="M8 14h.01"/>
                            <path d="M12 14h.01"/>
                            <path d="M16 14h.01"/>
                        </svg>

                    </div>


                    <div>

                        <span>
                            OFFICE HOURS
                        </span>

                        <p>
                            Monday – Saturday
                        </p>

                        <small>
                            10:00 AM – 5:00 PM
                        </small>

                    </div>

                </div>



                {{-- Email --}}

                <div class="footer-contact-item">

                    <div class="footer-contact-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                        >
                            <rect
                                x="3"
                                y="5"
                                width="18"
                                height="14"
                                rx="2"
                            />

                            <path d="m3 7 9 6 9-6"/>

                        </svg>

                    </div>


                    <div>

                        <span>
                            EMAIL
                        </span>

                        <a href="mailto:maths@ranchiuniversity.ac.in">
                            maths@ranchiuniversity.ac.in
                        </a>

                    </div>

                </div>



                {{-- Location --}}

                <div class="footer-contact-item">

                    <div class="footer-contact-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                        >
                            <path
                                d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"
                            />

                            <circle
                                cx="12"
                                cy="10"
                                r="2.5"
                            />

                        </svg>

                    </div>


                    <div>

                        <span>
                            CAMPUS
                        </span>

                        <p>
                            Ranchi University
                        </p>

                        <small>
                            Ranchi, Jharkhand
                        </small>

                    </div>

                </div>

            </div>


        </div>



        {{-- =================================================
            DECORATIVE DIVIDER
        ================================================= --}}

        <div class="footer-divider">

            <span></span>

            <i></i>

            <span></span>

        </div>



        {{-- =================================================
            MIDDLE FOOTER
        ================================================= --}}

        <div class="footer-middle">


            {{-- Social --}}

            <div class="footer-social">

                <span class="social-label">
                    FOLLOW US
                </span>


                <a href="#" aria-label="Facebook">
                    f
                </a>

                <a href="#" aria-label="Instagram">
                    ◎
                </a>

                <a href="#" aria-label="LinkedIn">
                    in
                </a>

                <a href="#" aria-label="YouTube">
                    ▶
                </a>

            </div>



            {{-- Motto --}}

            <div class="footer-quote">

                <span></span>

                <p>
                    EMPOWERING MINDS · ENRICHING LIVES
                </p>

                <span></span>

            </div>



            {{-- Back to top --}}

            <a
                href="#"
                class="footer-top-button"
                aria-label="Back to top"
            >

                <span>
                    ↑
                </span>

                TOP

            </a>

        </div>



        {{-- =================================================
            COPYRIGHT
        ================================================= --}}

        <div class="footer-bottom">


            <p>
                © {{ date('Y') }}
                <strong>Ranchi University</strong>.
                All Rights Reserved.
            </p>


            <div class="footer-bottom-links">

                <a href="#">
                    Privacy Policy
                </a>

                <span></span>

                <a href="#">
                    Terms &amp; Conditions
                </a>

            </div>


            <p class="footer-credit">
                Department of Mathematics &amp; MCA Applications
            </p>

        </div>


    </div>

</footer>