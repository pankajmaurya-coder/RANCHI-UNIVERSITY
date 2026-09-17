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
    GALLERY SECTION
========================================================= --}}

<section class="gallery-section" id="gallery">

    <div class="container">

        {{-- ================= HEADER ================= --}}
        <div class="gallery-header">

            <div class="gallery-heading">

                <div class="section-eyebrow">
                    <span></span>
                    Our Gallery
                </div>

                <h2>
                    Campus <span>Moments</span>
                </h2>

                <p>
                    Explore memorable moments, academic activities,
                    events and highlights from the Department.
                </p>

            </div>

            <div class="gallery-count">
                <strong>12</strong>
                <span>Moments<br>Captured</span>
            </div>

        </div>


        {{-- ================= GALLERY GRID ================= --}}
        <div class="gallery-grid">

            @for ($i = 1; $i <= 12; $i++)

                <a
                    href="{{ asset('asset/gallery/im' . $i . '.png') }}"
                    class="gallery-item"
                    data-index="{{ $i - 1 }}"
                >

                    <img
                        src="{{ asset('asset/gallery/im' . $i . '.png') }}"
                        alt="Department Gallery Image {{ $i }}"
                        loading="lazy"
                    >

                    <div class="gallery-overlay">

                        <div class="gallery-view">
                            <span>View</span>
                            <b>↗</b>
                        </div>

                        <span class="gallery-number">
                            {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                        </span>

                    </div>

                </a>

            @endfor

        </div>

    </div>

</section>


{{-- =========================================================
    GALLERY LIGHTBOX
========================================================= --}}

<div class="gallery-lightbox" id="galleryLightbox">

    <button
        type="button"
        class="gallery-close"
        id="galleryClose"
        aria-label="Close gallery"
    >
        ×
    </button>


    <button
        type="button"
        class="gallery-nav gallery-prev"
        id="galleryPrev"
        aria-label="Previous image"
    >
        ←
    </button>


    <div class="gallery-lightbox-content">

        <img
            src=""
            alt="Gallery Preview"
            id="galleryPreview"
        >

        <div class="gallery-caption">

            <span id="galleryCurrent">01</span>

            <div class="gallery-progress">
                <span id="galleryProgress"></span>
            </div>

            <span id="galleryTotal">12</span>

        </div>

    </div>


    <button
        type="button"
        class="gallery-nav gallery-next"
        id="galleryNext"
        aria-label="Next image"
    >
        →
    </button>

</div>
@endsection
<script>

    /* =========================================================
   GALLERY LIGHTBOX
========================================================= */

document.addEventListener("DOMContentLoaded", () => {

    const items = document.querySelectorAll(".gallery-item");

    const lightbox = document.querySelector("#galleryLightbox");
    const preview = document.querySelector("#galleryPreview");

    const closeBtn = document.querySelector("#galleryClose");
    const prevBtn = document.querySelector("#galleryPrev");
    const nextBtn = document.querySelector("#galleryNext");

    const currentNumber = document.querySelector("#galleryCurrent");
    const totalNumber = document.querySelector("#galleryTotal");
    const progress = document.querySelector("#galleryProgress");


    if (!items.length || !lightbox) return;


    /* =========================
       IMAGE DATA
    ========================== */

    const images = [...items].map(item => ({
        src: item.getAttribute("href"),
        alt: item.querySelector("img")?.getAttribute("alt") || "Gallery Image"
    }));


    let currentIndex = 0;


    totalNumber.textContent = String(images.length).padStart(2, "0");


    /* =========================
       OPEN
    ========================== */

    function openGallery(index) {

        currentIndex = index;

        updateImage();

        lightbox.classList.add("active");

        document.body.style.overflow = "hidden";
    }


    /* =========================
       UPDATE IMAGE
    ========================== */

    function updateImage() {

        const image = images[currentIndex];

        preview.src = image.src;
        preview.alt = image.alt;

        currentNumber.textContent =
            String(currentIndex + 1).padStart(2, "0");

        progress.style.width =
            `${((currentIndex + 1) / images.length) * 100}%`;
    }


    /* =========================
       CLOSE
    ========================== */

    function closeGallery() {

        lightbox.classList.remove("active");

        document.body.style.overflow = "";

        /*
         * Image remove karne ki zarurat nahi.
         * Next time same image immediately open hogi.
         */
    }


    /* =========================
       NEXT
    ========================== */

    function nextImage() {

        currentIndex++;

        if (currentIndex >= images.length) {
            currentIndex = 0;
        }

        updateImage();
    }


    /* =========================
       PREVIOUS
    ========================== */

    function previousImage() {

        currentIndex--;

        if (currentIndex < 0) {
            currentIndex = images.length - 1;
        }

        updateImage();
    }


    /* =========================
       CLICK GALLERY ITEM
    ========================== */

    items.forEach((item, index) => {

        item.addEventListener("click", event => {

            event.preventDefault();

            openGallery(index);

        });

    });


    /* =========================
       BUTTONS
    ========================== */

    closeBtn.addEventListener("click", closeGallery);

    nextBtn.addEventListener("click", nextImage);

    prevBtn.addEventListener("click", previousImage);


    /* =========================
       BACKDROP CLICK
    ========================== */

    lightbox.addEventListener("click", event => {

        if (event.target === lightbox) {
            closeGallery();
        }

    });

    document.addEventListener("keydown", event => {
        if (!lightbox.classList.contains("active")) return;

        if (event.key === "Escape") {
            closeGallery();
        }

        if (event.key === "ArrowRight") {
            nextImage();
        }

        if (event.key === "ArrowLeft") {
            previousImage();
        }
    });
});
</script>