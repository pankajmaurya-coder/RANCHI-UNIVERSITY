<header>
    <div class="top-header bg-[var(--primary)] text-white">
        <div class="container">

            <div class="header-top-wrapper flex min-h-[70px] items-center justify-between gap-8">

                {{-- Logo --}}
                <div class="flex items-center gap-3">
                    <img src="{{ asset('asset/logo.png') }}" alt="Ranchi University Logo"
                        class="h-11 w-auto object-contain">
                    <div>
                        <h1 class="text-lg font-semibold tracking-wide">
                            RANCHI UNIVERSITY
                        </h1>
                        <p class="mt-0.5 text-[9px] uppercase tracking-[0.15em] text-white/60">
                            DEPARTMENT OF MATHEMATICS & AND MCA APPLICATIONS
                        </p>
                    </div>

                </div>


                {{-- Navigation --}}
                <nav>

                    <ul class="navbar flex items-center gap-7">

                        <li>
                            <a href="#" class="header-link">
                                Faculty
                            </a>
                        </li>

                        <li>
                            <a href="#" class="header-link">
                                Research
                            </a>
                        </li>

                        <li>
                            <a href="#" class="header-link">
                                Admission
                            </a>
                        </li>

                        <li>
                            <a href="#" class="header-link">
                                Portal
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="header-login">
                                Login
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
