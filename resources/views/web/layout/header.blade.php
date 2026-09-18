<header class="site-header">
    <div class="top-bar">
        <div class="container top-bar-inner">
            <div class="top-contact">
                <a href="mailto:maths@ranchiuniversity.ac.in">
                    <span class="top-icon">✉</span>
                    dept_math@rediffmail.com
                </a>

                <span class="top-divider"></span>

                <a href="tel:+91 0651-2960019">
                    <span class="top-icon">☎</span>
                    +91 0651-2960019
                </a>

                <span class="top-divider"></span>

                <span class="location">
                    <span class="top-icon">⌖</span>
                    Ranchi University, Ranchi
                </span>

            </div>


            <div class="top-links">

                <a href="#">Alumni</a>
                <a href="#">Notices</a>
                <a href="#">Events</a>
                <a href="#">Gallery</a>

            </div>

        </div>

    </div>


    {{-- ================= MAIN HEADER ================= --}}
    <div class="main-header">

        <div class="container main-header-inner">


            {{-- ================= BRAND ================= --}}
            <a href="/" class="university-brand">

                <div class="logo-box">
                    <img src="{{ asset('asset/logo.png') }}" alt="Ranchi University Logo">
                </div>

                <div class="brand-text">
                    {{-- <h1>RANCHI UNIVERSITY</h1> --}}
                    <h1>DEPARTMENT OF MATHEMATICS</h1>
                    {{-- <div class="brand-line"></div> --}}
                    <h2>

                        <span>Ranchi University</span>
                    </h2>
                </div>
            </a>


            {{-- ================= DESKTOP NAVIGATION ================= --}}
            <nav class="desktop-nav">
                <ul>
                    {{-- HOME --}}
                    <li>
                        <a href="/" class="nav-link active">
                            Home
                        </a>
                    </li>


                    {{-- ABOUT --}}
                    <li>
                        <a href="{{ route('about') }}" class="nav-link">
                            About
                        </a>
                    </li>


                    {{-- ================= Message ================= --}}
                    <li class="nav-dropdown">

                        <button type="button" class="nav-link dropdown-toggle" aria-expanded="false">
                            <span>Message</span>
                            <span class="arrow">⌄</span>
                        </button>

                        <div class="dropdown-menu">
                            <div class="dropdown-links">
                                <a href="{{ route('chancellor') }}">
                                    <span class="menu-icon">↗</span>
                                    <span class="menu-content">
                                        <strong>
                                            Vice-Chancellor
                                        </strong>
                                    </span>
                                    <span class="menu-arrow">→</span>
                                </a>

                                <a href="{{ route('director') }}">
                                    <span class="menu-icon">↗</span>
                                    <span class="menu-content">
                                        <strong>
                                            Director
                                        </strong>
                                </a>

                                <a href="{{ route('ordinator') }}">
                                    <span class="menu-icon">↗</span>
                                    <span class="menu-content">
                                        <strong>
                                            Co-Ordinator
                                        </strong>
                                </a>
                            </div>
                        </div>
                    </li>

                    {{-- FACULTY --}}
                    <li>
                        <a href="{{ route('faculty') }}" class="nav-link">
                            Faculty
                        </a>
                    </li>

                    <li>
                        <a href="{{route('university')}}" class="nav-link">
                            University
                        </a>
                    </li>

                    <li class="nav-dropdown">
                        <button type="button" class="nav-link dropdown-toggle" aria-expanded="false">
                            <span>More</span>
                            <span class="arrow">⌄</span>
                        </button>
                        <div class="dropdown-menu">
                            <div class="dropdown-links">
                                <a href="#">
                                    <span class="menu-icon">↗</span>
                                    <span class="menu-content">
                                        <strong>
                                            Alumni
                                        </strong>
                                    </span>
                                    <span class="menu-arrow">→</span>
                                </a>


                                <a href="#">
                                    <span class="menu-icon">↗</span>
                                    <span class="menu-content">
                                        <strong>
                                            Calender
                                        </strong>
                                    </span>
                                    <span class="menu-arrow">→</span>
                                </a>

                                <a href="{{ asset('asset/MCA(4Sem)CBCSSyllabus (1).pdf') }}"
                         class="nav-link" target="_blank">
                                    <span class="menu-icon">↗</span>
                                    <span class="menu-content">
                                        <strong>
                                            Syllabus
                                        </strong>
                                    </span>
                                    <span class="menu-arrow">→</span>
                                </a>


                                <a href="{{ route('gallery') }}">
                                    <span class="menu-icon">↗</span>
                                    <span class="menu-content">
                                        <strong>
                                            Gallery
                                        </strong>
                                    </span>
                                    <span class="menu-arrow">→</span>
                                </a>


                                <a href="#">
                                    <span class="menu-icon">↗</span>
                                    <span class="menu-content">
                                        <strong>
                                            Admission
                                        </strong>
                                    </span>
                                    <span class="menu-arrow">→</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    {{-- CONTACT --}}
                    <li>
                        <a href="{{ route('contact') }}" class="nav-link">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>

            {{-- ================= MOBILE BUTTON ================= --}}
            <button type="button" class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>

            </button>
        </div>
    </div>


    {{-- ================= MOBILE MENU ================= --}}
    <div class="mobile-menu" id="mobileMenu">
        <nav>
            <a href="/" class="mobile-link active">
                Home
            </a>
            <a href="#" class="mobile-link">
                About
            </a>

            {{-- MOBILE ACADEMICS --}}
            <div class="mobile-dropdown">
                <button type="button" class="mobile-dropdown-toggle">
                    <span>Message</span>
                    <span class="mobile-arrow">
                        ⌄
                    </span>

                </button>


                <div class="mobile-submenu">
                    <a href="{{ route('chancellor') }}">
                        vice-Chancellor
                    </a>
                    <a href="{{ route('director') }}">
                        Director
                    </a>
                    <a href="{{ route('ordinator') }}">
                        Co-Ordinator
                    </a>
                </div>
            </div>

            <a href="{{ route('faculty') }}" class="mobile-link">
                Faculty
            </a>

            <a href="{{route('university') }}" class="mobile-link">
                University
            </a>

            {{-- MOBILE RESOURCES --}}
            <div class="mobile-dropdown">

                <button type="button" class="mobile-dropdown-toggle">
                    <span>More</span>
                    <span class="mobile-arrow">
                        ⌄
                    </span>

                </button>


                <div class="mobile-submenu">

                    <a href="#">
                        Alumni
                    </a>

                    <a href="#">
                        Calender
                    </a>

                    <a href="{{ route('gallery') }}">
                        Gallery
                    </a>

                    <a href="{{ asset('asset/MCA(4Sem)CBCSSyllabus (1).pdf') }}"
                         class="nav-link" target="_blank">
                        Syllabus
                    </a>

                    <a href="#">
                        Admission
                    </a>

                </div>

            </div>

            <a href="{{ route('contact') }}" class="mobile-link">
                Contact
            </a>
        </nav>
    </div>
</header>
