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

    <section class="about">
    <div class="container about-container">

        <!-- Main Grid -->
        <div class="about-grid">
            <!-- ================= CONTENT ================= -->
            <div>

                <!-- Small Heading -->
                <div class="flex items-center gap-3 mb-4">

                    <span class="h-[2px] w-10 bg-amber-500"></span>

                    <span class="text-sm font-semibold uppercase
                                 tracking-[0.25em] text-amber-600">
                       MESSAGE
                    </span>

                </div>


                <!-- Main Heading -->
                <h2 class="text-3xl sm:text-4xl lg:text-5xl
                           font-bold leading-tight text-blue-950">

                  Coordinator's 
                    <span class="text-amber-600">
                        MESSAGE
                    </span>

                </h2>


                <!-- Description -->
                <div class="mt-6 space-y-5 text-slate-600 
                            text-base sm:text-lg leading-8">

                    <p>
                       We are dedicated to delivering high-quality education, with technology at its core.
                        Our department nurtures students' talents, preparing them to tackle the challenges of
                        globalization and fierce competition. Our goal is to equip students with the knowledge, 
                        skills, mindset, and values necessary for a productive and successful life.
                         We strive to maintain 
                        a balance between theoretical learning and practical application,
                        while also fostering logical thinking and strong communication skills.
                    </p>

                    <p>
                        By joining our department, you'll broaden your perspectives, 
                        enhance your personality, and unlock exceptional career opportunities.
                        We guarantee that you will not only gain valuable knowledge
                         but also create lasting memories and meaningful connections that will stay with you forever.
                    </p>
                </div>


                <!-- ================= HIGHLIGHTS ================= -->
                {{-- <div class="grid grid-cols-2 sm:grid-cols-4 
                            gap-4 mt-8 pt-8 border-t border-slate-200">

                    <!-- Item -->
                    <div class="text-center sm:text-left">

                        <div class="text-2xl sm:text-3xl font-bold text-blue-950">
                            4–5
                        </div>

                        <div class="mt-1 text-xs sm:text-sm 
                                    text-slate-500">
                            Ph.D. Scholars
                        </div>

                    </div>


                    <!-- Item -->
                    <div class="text-center sm:text-left">

                        <div class="text-2xl sm:text-3xl font-bold text-blue-950">
                            2003
                        </div>

                        <div class="mt-1 text-xs sm:text-sm 
                                    text-slate-500">
                            MCA Started
                        </div>

                    </div>


                    <!-- Item -->
                    <div class="text-center sm:text-left">

                        <div class="text-2xl sm:text-3xl font-bold text-blue-950">
                            2012
                        </div>

                        <div class="mt-1 text-xs sm:text-sm 
                                    text-slate-500">
                            M.Phil Started
                        </div>

                    </div>


                    <!-- Item -->
                    <div class="text-center sm:text-left">

                        <div class="text-2xl sm:text-3xl font-bold text-blue-950">
                            20+
                        </div>

                        <div class="mt-1 text-xs sm:text-sm 
                                    text-slate-500">
                            Years of Excellence
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- ================= IMAGE ================= -->
            <div class="relative group">

                <!-- Decorative Shape -->
                <div class="absolute -top-5 -left-5 w-24 h-24 
                            border-t-4 border-l-4 border-amber-500 
                            rounded-tl-3xl">
                </div>

                <div class="absolute -bottom-5 -right-5 w-24 h-24 
                            border-b-4 border-r-4 border-blue-900 
                            rounded-br-3xl">
                </div>

                <!-- Image -->
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">

                    <img
                        src="{{ asset('asset/navbar/about.png') }}"
                        alt="Department of Mathematics"
                        class="w-full h-[320px] sm:h-[400px] lg:h-[520px]
                               object-cover
                               transition duration-700
                               group-hover:scale-105"
                    >

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t 
                                from-blue-950/70 via-transparent to-transparent">
                    </div>

                    <!-- Image Bottom Content -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">

                        <span class="text-xs sm:text-sm tracking-[0.25em]
                                     uppercase text-amber-400 font-semibold">
                            Excellence in Education
                        </span>

                        <h3 class="mt-2 text-2xl sm:text-3xl 
                                   font-bold text-white">
                            Department of Mathematics
                        </h3>

                    </div>

                </div>

            </div>
        </div>

        

    </div>
</section>
@endsection
