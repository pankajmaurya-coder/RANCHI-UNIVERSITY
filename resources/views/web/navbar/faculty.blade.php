@extends('web.layout.app')
@section('title', 'about')

@stack('style')
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

@section('content')
    <section class="hero py-5">
        <img src="{{ asset('asset/image/back.png') }}" alt="About Ranchi Women's College" class="hero-image">

        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-content">
                    <div class="hero-title">
                        <h1>Mathematics Shape</h1>
                        <h1>A Better Tomorrow</h1>
                        <img src="{{ asset('asset/divider/divider3.png') }}" class="divider">
                    </div>
                    <div class="content">
                        <p>
                            Nurturing analytical minds through quality education,
                            research, and innovation. Explore the beauty of logic,
                            discover new possibilities,
                            and be part of a community that values curiosity and excellence.
                        </p>
                    </div>
                </div>

                <div class="image">
                    <img src="{{ asset('asset/image/girl.png') }}" alt="About Ranchi Women's College"
                        class="hero-over-image">
                </div>
            </div>
        </div>
    </section>

{{-- =========================================================
    FACULTY PROFILES
========================================================= --}}

<section class="faculty-section" id="faculty">

    <div class="container">

        {{-- Section Header --}}
        <div class="faculty-header">

            <div class="faculty-heading">

                <div class="section-eyebrow">
                    <span></span>
                    Our Faculty
                </div>

                <h2>
                    Faculty <span>Profiles</span>
                </h2>

                <p>
                    Meet the dedicated academic team committed to teaching,
                    research and the development of future professionals.
                </p>

            </div>

            <div class="faculty-count">
                <strong>05</strong>

                <span>
                    Faculty<br>
                    Members
                </span>
            </div>

        </div>


        {{-- Faculty Grid --}}
        <div class="faculty-grid">


            {{-- Faculty 01 --}}
            <article class="faculty-card">

                <div class="faculty-card-top">

                    <span class="faculty-number">01</span>

                    <div class="faculty-photo">
                        <img
                            src="{{ asset('asset/navbar/faculty/swagata.png') }}"
                            alt="Miss. Swagata Ghosh"
                        >
                    </div>

                    <div class="faculty-info">

                        <h3>Miss. Swagata Ghosh</h3>

                        <span class="faculty-line"></span>

                        <p class="faculty-qualification">
                            MCA, M.Sc., Ph.D. (Pursuing)
                        </p>

                        <div class="faculty-interest">
                            <small>Area of Interest</small>
                            <p>Programming, GIS, Spatial Data Mining</p>
                        </div>

                    </div>

                </div>

                <div class="faculty-footer">
                    <span>Faculty</span>
                    <a href="#">View Profile <b>→</b></a>
                </div>

            </article>


            {{-- Faculty 02 --}}
            <article class="faculty-card">

                <div class="faculty-card-top">

                    <span class="faculty-number">02</span>

                    <div class="faculty-photo">
                        <img
                            src="{{ asset('asset/navbar/faculty/nazia.png') }}"
                            alt="Miss. Nazia Hasan"
                        >
                    </div>

                    <div class="faculty-info">

                        <h3>Miss. Nazia Hasan</h3>

                        <span class="faculty-line"></span>

                        <p class="faculty-qualification">
                            M.Sc. (IT)
                        </p>

                        <div class="faculty-interest">
                            <small>Area of Interest</small>
                            <p>Networking, Artificial Intelligence</p>
                        </div>

                    </div>

                </div>

                <div class="faculty-footer">
                    <span>Faculty</span>
                    <a href="#">View Profile <b>→</b></a>
                </div>

            </article>


            {{-- Faculty 03 --}}
            <article class="faculty-card">

                <div class="faculty-card-top">

                    <span class="faculty-number">03</span>

                    <div class="faculty-photo">
                        <img
                            src="{{ asset('asset/navbar/faculty/ashim.png') }}"
                            alt="Mr. Ashim Sarkar"
                        >
                    </div>

                    <div class="faculty-info">

                        <h3>Mr. Ashim Sarkar</h3>

                        <span class="faculty-line"></span>

                        <p class="faculty-qualification">
                            M.C.A., M.Tech (CSE)
                        </p>

                        <div class="faculty-interest">
                            <small>Area of Interest</small>
                            <p>Java, C#, S/W Engineering, Python</p>
                        </div>

                    </div>

                </div>

                <div class="faculty-footer">
                    <span>Faculty</span>
                    <a href="#">View Profile <b>→</b></a>
                </div>

            </article>


            {{-- Faculty 04 --}}
            <article class="faculty-card">

                <div class="faculty-card-top">

                    <span class="faculty-number">04</span>

                    <div class="faculty-photo">
                        <img
                            src="{{ asset('asset/navbar/faculty/anupam.png') }}"
                            alt="Mr. Anupam Gupta"
                        >
                    </div>

                    <div class="faculty-info">

                        <h3>Mr. Anupam Gupta</h3>

                        <span class="faculty-line"></span>

                        <p class="faculty-qualification">
                            MCA
                        </p>

                        <div class="faculty-interest">
                            <small>Area of Interest</small>
                            <p>C#, ASP.Net, DBMS</p>
                        </div>

                    </div>

                </div>

                <div class="faculty-footer">
                    <span>Faculty</span>
                    <a href="#">View Profile <b>→</b></a>
                </div>

            </article>


            {{-- Faculty 05 --}}
            <article class="faculty-card">

                <div class="faculty-card-top">

                    <span class="faculty-number">05</span>

                    <div class="faculty-photo">
                        <img
                            src="{{ asset('asset/navbar/faculty/mithilesh.png') }}"
                            alt="Dr. Mithilesh Kumar Pandey"
                        >
                    </div>

                    <div class="faculty-info">

                        <h3>Dr. Mithilesh Kumar Pandey</h3>

                        <span class="faculty-line"></span>

                        <p class="faculty-qualification">
                            MCA, M.Tech (CSE), Ph.D. (Computer Application)
                        </p>

                        <div class="faculty-interest">
                            <small>Area of Interest</small>
                            <p>Machine Learning</p>
                        </div>

                    </div>

                </div>

                <div class="faculty-footer">
                    <span>Faculty</span>
                    <a href="#">View Profile <b>→</b></a>
                </div>

            </article>


        </div>

    </div>

</section>
    

@endsection
