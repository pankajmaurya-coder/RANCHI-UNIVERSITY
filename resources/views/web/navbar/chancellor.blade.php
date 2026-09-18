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

<section class="vc-section">
    <div class="container">
        <div class="vc-layout">
            <aside class="vc-sidebar">
                <div class="vc-profile">
                    <div class="vc-image">
                        <img
                            src="{{ asset('asset/navbar/faculty/vc.png') }}"
                            alt="Vice-Chancellor, Ranchi University"
                        >
                    </div>

                    <div class="vc-profile-content">
                        <span class="vc-label">Vice-Chancellor</span>

                        <h2>
                            Ranchi University
                        </h2>

                        <span class="vc-line"></span>
                    </div>

                </div>


                {{-- Quote --}}
                <div class="vc-quote">

                    <span class="vc-quote-mark">“</span>

                    <p>
                        A University stands for humanism, for tolerance,
                        for reason, for the adventure of ideas and for
                        the search for truth.
                    </p>

                    <strong>
                        — Pandit Jawaharlal Nehru
                    </strong>

                </div>


                {{-- Key Values --}}
                <div class="vc-values">

                    <div class="vc-value">
                        <span>01</span>
                        <div>
                            <strong>Knowledge</strong>
                            <small>Learning for a better future</small>
                        </div>
                    </div>

                    <div class="vc-value">
                        <span>02</span>
                        <div>
                            <strong>Research</strong>
                            <small>Creating meaningful knowledge</small>
                        </div>
                    </div>

                    <div class="vc-value">
                        <span>03</span>
                        <div>
                            <strong>Innovation</strong>
                            <small>Preparing for tomorrow</small>
                        </div>
                    </div>

                    <div class="vc-value">
                        <span>04</span>
                        <div>
                            <strong>Empowerment</strong>
                            <small>Building a stronger society</small>
                        </div>
                    </div>

                </div>

            </aside>


            {{-- ================= RIGHT COLUMN ================= --}}
            <article class="vc-content">

                <div class="section-eyebrow">
                    <span></span>
                    Vice-Chancellor's Desk
                </div>

                <h1 class="vc-title">
                    A Message of
                    <span>Vision, Knowledge &amp; Progress</span>
                </h1>


                {{-- Introduction --}}
                <div class="vc-intro">
                    University means an institution of higher learning
                    with teaching and research facilities consisting of
                    at least one graduate college and professional college
                    that award master's degrees and doctoral degrees as
                    well as an undergraduate division that awards
                    bachelor's degrees.
                </div>


                <div class="content">

                    <p>
                        University means an institution of higher learning
                        with teaching and research facilities targeted to
                        achieving knowledge generation capabilities amongst
                        the students, blending passion, reason and courage
                        in personal commitment to the ideals of society.
                        Pandit Jawaharlal Nehru has rightly said:
                    </p>


                    <blockquote>
                        “A University stands for humanism, for tolerance,
                        for reason, for the adventure of ideas and for the
                        search for truth. It stands for the onward march
                        of the human race towards even higher objectives,
                        if the Universities discharge their duties
                        adequately, then, it is well with the Nation
                        and the People.”
                    </blockquote>


                    <p>
                        In order to meet these objectives, Ranchi University
                        was established on July 12, 1960. Emergence of this
                        University was in fact a historic event in the sense
                        that it heralded a new era in the realm of higher
                        education catering to the needs of the people of
                        Jharkhand.
                    </p>


                    <p>
                        There are 8 faculties, 23 University departments,
                        15 constituent and 12 affiliated colleges,
                        3 autonomous colleges, 1 medical college,
                        2 psychiatry institutes, 4 technical institutes
                        and 1 law college followed by Adult Continuing
                        Education and Extension Department and Academic
                        Staff College.
                    </p>


                    <p>
                        As recognition to women empowerment Ranchi University
                        established 8 colleges exclusively meant for girls
                        and the remaining colleges are also co-educational
                        in nature. Recent addition of Women Studies Centre
                        at Ranchi Women's College is another step in this
                        direction.
                    </p>


                    <p>
                        The University offers a wide range of academic
                        programmes at both undergraduate and postgraduate
                        levels including doctorate programmes in all the
                        branches of basic sciences, allied sciences,
                        medical and engineering sciences, social sciences,
                        humanities and commerce.
                    </p>


                    <p>
                        In addition, the University Departments and Colleges
                        impart add-on certificate, diploma, advanced diploma
                        and PG Diploma courses. Besides regular courses,
                        the University offers several professional
                        self-financing courses such as MCA, MBA,
                        M.Sc. (Electronics &amp; Communication) and
                        PG Diploma in Medicinal Plants.
                    </p>


                    <p>
                        In pursuit of India Vision 2020, the University
                        envisions opening more job-oriented professional
                        courses under the self-financing scheme in
                        Management Science, Information Technology,
                        Biotechnology, Bio-informatics, Biophysics,
                        Biochemistry, Physical Education and Sports
                        Sciences, Archaeology &amp; Museology, Food
                        Processing &amp; Bakery, Nursing, Disaster and
                        Human Resource Management, Microbiology,
                        Information and Library Science, Environmental
                        Studies, Mass Communication, Public Administration,
                        Social Work and Rural Development.
                    </p>


                    <p>
                        The University has already launched Parents Teachers
                        Meet in the Colleges and University Departments to
                        ensure regular attendance of students in classrooms
                        and hence their well-being. E-journals have also
                        been made available through INFLIBNET to students,
                        scholars and teachers, with connectivity extended
                        to University Departments.
                    </p>


                    <p>
                        ISRO-sponsored EDUSAT facilities have been installed
                        at Ranchi Women's College to bring home the concept
                        of Virtual Interactive Classrooms. Significant
                        progress has also been achieved in the direction
                        of campus networking.
                    </p>


                    <p>
                        Dear recipient of degrees, I am very pleased to share
                        with you that the different programmes of Ranchi
                        University seek to address the new realities of the
                        changing academic and business scenario of the world,
                        while leveraging your natural talents and interests.
                    </p>


                    <p>
                        We emphasize developing your problem-solving abilities
                        and decision-making skills. Faculty teams work with
                        students and mentor them to enhance their capacity
                        to work effectively with other people and develop a
                        mindset that will help them deal confidently with
                        complex situations.
                    </p>


                    <p>
                        Indeed, we aim at the development of the total
                        personality of the student. Your academic success
                        is what this new State of Jharkhand needs at this
                        critical phase of its development.
                    </p>


                    <p>
                        I hope that the seed of inquiry that has been planted
                        in each of you will grow throughout — a lifelong
                        commitment to learning. In the months and years ahead,
                        our doors will be open to welcome each of you back
                        to the University to update your skills and knowledge
                        or to follow other paths of personal development.
                    </p>


                    <p>
                        In pursuit of India Vision 2020, we plan to elevate
                        our faculty, improve our graduate and undergraduate
                        programmes, strengthen the arts, commerce and science
                        courses, further strengthen our technical and
                        professional education, diversify and globalize our
                        university community, improve our libraries and
                        access to information technology.
                    </p>


                    <p>
                        We wish to enrich our campus, build stronger ties
                        to society, increase our endowment, improve our
                        governance, and better serve the State of Jharkhand
                        and the nation.
                    </p>

                </div>
            </article>

        </div>

    </div>
</section>

@endsection
