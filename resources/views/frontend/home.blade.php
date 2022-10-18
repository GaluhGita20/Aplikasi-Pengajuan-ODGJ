@extends('layouts.frontend')

@section('content')


<!-- Header Start -->
<div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0 flex-column-reverse flex-lg-row">
    <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s" style="opacity:0.9;">
        <div
        class="header-bg h-100 d-flex flex-column justify-content-center p-5"
        >
        <h1 class="display-4 text-light mb-5">
            RULPE (Ruang Layanan Pengajuan) ODGJ
        </h1>
        <div class="d-flex align-items-center pt-4 animated slideInDown">
            <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5"
            >Read More</a
            >
            <button
            type="button"
            class="btn-play"
            data-bs-toggle="modal"
            data-src="https://www.youtube.com/embed/g13ml3BmFjk"
            data-bs-target="#videoModal"
            >
            <span></span>
            </button>
            <h6 class="text-white m-0 ms-4 d-none d-sm-block">Watch Video</h6>
        </div>
        </div>
    </div>
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s"  style="opacity:0.4;">
        <div class="owl-carousel header-carousel" style="height:100%; width:100%;">
        <div class="owl-carousel-item" style="height:100%; width:100%;">
            <img class="img-fluid" src="frontend/img/home/banner-c1.jpg" alt="" style="height:100%; width:100%;"/>
        </div>
        <div class="owl-carousel-item">
            <img class="img-fluid" src="frontend/img/home/banner-c3.jpg" alt="" />
        </div>
        <div class="owl-carousel-item">
            <img class="img-fluid" src="frontend/img/home/banner-c2.jpg" alt="" />
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Header End -->

<!-- Video Modal Start -->
<div
    class="modal modal-video fade"
    id="videoModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content rounded-0">
        <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
        ></button>
        </div>
        <div class="modal-body">
        <!-- 16:9 aspect ratio -->
        <div class="ratio ratio-16x9">
            <iframe
            class="embed-responsive-item"
            src=""
            id="video"
            allowfullscreen
            allowscriptaccess="always"
            allow="autoplay"
            ></iframe>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Video Modal End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
    <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <p><span class="text-primary me-2">#</span>Welcome To RULPE ODGJ</p>
        <h1 class="display-5 mb-4">
            Why You Should Know About
            <span class="text-primary">RULPE ODGJ</span>
        </h1>
        <p class="mb-4">
            Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No
            stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo
            nonumy clita sit at, sed sit sanctus dolor eos.
        </p>
        <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Free Car
            Parking
        </h5>
        <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Natural
            Environment
        </h5>
        <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Professional
            Guide & Security
        </h5>
        <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>World Best
            Animals
        </h5>
        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="img-border">
            <img class="img-fluid" src="frontend/img/home/section1.jpg" alt="" />
        </div>
        </div>
    </div>
    </div>
</div>
<!-- About End -->

<!-- Facts Start -->
<div
    class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp"
    data-wow-delay="0.1s">
    <div class="container py-5">
    <div class="row g-4">
        <div
        class="col-md-6 col-lg-3 text-center wow fadeIn"
        data-wow-delay="0.1s"
        >
        <i class="fa fa-user fa-3x text-primary mb-3"></i>
        <h1 class="text-white mb-2" data-toggle="counter-up">0</h1>
        <p class="text-white mb-0">Total Client</p>
        </div>
        <div
        class="col-md-6 col-lg-3 text-center wow fadeIn"
        data-wow-delay="0.3s"
        >
        <i class="fa fa-users fa-3x text-primary mb-3"></i>
        <h1 class="text-white mb-2" data-toggle="counter-up">5</h1>
        <p class="text-white mb-0">Our Workers</p>
        </div>
        <div
        class="col-md-6 col-lg-3 text-center wow fadeIn"
        data-wow-delay="0.5s"
        >
        <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
        <h1 class="text-white mb-2" data-toggle="counter-up">7</h1>
        <p class="text-white mb-0">Partner RSJ</p>
        </div>
        <div
        class="col-md-6 col-lg-3 text-center wow fadeIn"
        data-wow-delay="0.7s"
        >
        <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
        <h1 class="text-white mb-2">LSM</h1>
        <p class="text-white mb-0">Our Partner</p>
        </div>
    </div>
    </div>
</div>
<!-- Facts End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
        <p><span class="text-primary me-2">#</span>Our Services</p>
        <h1 class="display-5 mb-0">
            Special Services For
            <span class="text-primary">Client</span> RULPE ODGJ
        </h1>
        </div>
        <div class="col-lg-6">
        <div
            class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5"
        >
            <i class="fa fa-3x fa-mobile-alt text-white"></i>
            <div class="ms-4">
            <p class="text-white mb-0">Call for more info</p>
            <h2 class="text-white mb-0">+6285 3451 6789</h2>
            </div>
        </div>
        </div>
    </div>
    <div class="row gy-5 gx-4">
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.1s"
        >
        <img class="img-fluid mb-3" src="frontend/img/icon/icon-2.png" alt="Icon" />
        <h5 class="mb-3">Car Parking</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.3s"
        >
        <img class="img-fluid mb-3" src="frontend/img/icon/icon-3.png" alt="Icon" />
        <h5 class="mb-3">Animal Photos</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.5s"
        >
        <img class="img-fluid mb-3" src="frontend/img/icon/icon-4.png" alt="Icon" />
        <h5 class="mb-3">Guide Services</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.7s"
        >
        <img class="img-fluid mb-3" src="frontend/img/icon/icon-5.png" alt="Icon" />
        <h5 class="mb-3">Food & Beverages</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.1s"
        >
        <img class="img-fluid mb-3" src="frontend/img/icon/icon-6.png" alt="Icon" />
        <h5 class="mb-3">Zoo Shopping</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.3s"
        >
        <img class="img-fluid mb-3" src="frontend/img/icon/icon-7.png" alt="Icon" />
        <h5 class="mb-3">Free Hi Speed Wi-Fi</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.5s"
        >
        <img class="img-fluid mb-3" src="frontend/img/icon/icon-8.png" alt="Icon" />
        <h5 class="mb-3">Play Ground</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.7s"
        >
        <img class="img-fluid mb-3" src="frontend/img/icon/icon-9.png" alt="Icon" />
        <h5 class="mb-3">Rest House</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
    </div>
    </div>
</div>
<!-- Service End -->

<!-- Galery Start -->
<div class="container-xxl py-5">
    <div class="container">
    <div
        class="row g-5 mb-5 align-items-end wow fadeInUp"
        data-wow-delay="0.1s"
    >
        <div class="col-lg-6">
        <p><span class="text-primary me-2">#</span>Our Animals</p>
        <h1 class="display-5 mb-0">
            Let`s See Our <span class="text-primary">RULPE ODGJ</span> Awsome
            Activity
        </h1>
        </div>
        <div class="col-lg-6 text-lg-end">
        <a class="btn btn-primary py-3 px-5" href=""
            >Explore More Photo</a
        >
        </div>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-4">
            <div class="col-12">
            <a
                class="animal-item"
                href="frontend/img/home/g1.jpg"
                data-lightbox="rulpe"
            >
                <div class="position-relative">
                <img class="img-fluid" src="frontend/img/home/g1.jpg" alt="" />
                <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Layanan Perawatan</p>
                    <h5 class="text-white mb-0">Rumah Sakit</h5>
                </div>
                </div>
            </a>
            </div>
            <div class="col-12">
            <a
                class="animal-item"
                href="frontend/img/home/g4.jpg"
                data-lightbox="animal"
            >
                <div class="position-relative">
                <img class="img-fluid" src="frontend/img/home/g4.jpg" alt="" />
                <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Konsultasi</p>
                    <h5 class="text-white mb-0">Konsultasi</h5>
                </div>
                </div>
            </a>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="row g-4">
            <div class="col-12">
            <a
                class="animal-item"
                href="frontend/img/home/g5.jpg"
                data-lightbox="animal"
            >
                <div class="position-relative">
                <img class="img-fluid" src="frontend/img/home/g5.jpg" alt="" />
                <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Kunjungan Keluarga</p>
                    <h5 class="text-white mb-0">Kekeluargaan</h5>
                </div>
                </div>
            </a>
            </div>
            <div class="col-12">
            <a
                class="animal-item"
                href="frontend/img/home/g2.jpg"
                data-lightbox="animal"
            >
                <div class="position-relative">
                <img class="img-fluid" src="frontend/img/home/g2.jpg" alt="" />
                <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Peduli</p>
                    <h5 class="text-white mb-0">Kepedulian dan Pendekatan</h5>
                </div>
                </div>
            </a>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="row g-4">
            <div class="col-12">
            <a
                class="animal-item"
                href="frontend/img/home/g3.jpg"
                data-lightbox="animal"
            >
                <div class="position-relative">
                <img class="img-fluid" src="frontend/img/home/g3.jpg" alt="" />
                <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Konsultasi</p>
                    <h5 class="text-white mb-0">Tanya Jawab dengan CS</h5>
                </div>
                </div>
            </a>
            </div>
            <div class="col-12">
            <a
                class="animal-item"
                href="frontend/img/home/g6.jpg"
                data-lightbox="animal"
            >
                <div class="position-relative">
                <img class="img-fluid" src="frontend/img/home/g6.jpg" alt="" />
                <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Dokumentasi</p>
                    <h5 class="text-white mb-0">Dokumentasi</h5>
                </div>
                </div>
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Galery End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
    <h1
        class="display-5 text-center mb-5 wow fadeInUp"
        data-wow-delay="0.1s"
    >
        Our Clients Say!
    </h1>
    <div
        class="owl-carousel testimonial-carousel wow fadeInUp"
        data-wow-delay="0.1s"
    >
        <div class="testimonial-item text-center">
        <img
            class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
            src="{{asset('frontend/img/testimonial-1.jpg')}}"
            style="width: 100px; height: 100px"
        />
        <div class="testimonial-text rounded text-center p-4">
            <p>
            Clita clita tempor justo dolor ipsum amet kasd amet duo justo
            duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
            clita erat magna elitr erat sit sit erat at rebum justo sea
            clita.
            </p>
            <h5 class="mb-1">Patient Name</h5>
            <span class="fst-italic">Profession</span>
        </div>
        </div>
        <div class="testimonial-item text-center">
        <img
            class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
            src="{{asset('frontend/img/testimonial-2.jpg')}}"
            style="width: 100px; height: 100px"
        />
        <div class="testimonial-text rounded text-center p-4">
            <p>
            Clita clita tempor justo dolor ipsum amet kasd amet duo justo
            duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
            clita erat magna elitr erat sit sit erat at rebum justo sea
            clita.
            </p>
            <h5 class="mb-1">Patient Name</h5>
            <span class="fst-italic">Profession</span>
        </div>
        </div>
        <div class="testimonial-item text-center">
        <img
            class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
            src="frontend/img/testimonial-3.jpg"
            style="width: 100px; height: 100px"
        />
        <div class="testimonial-text rounded text-center p-4">
            <p>
            Clita clita tempor justo dolor ipsum amet kasd amet duo justo
            duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
            clita erat magna elitr erat sit sit erat at rebum justo sea
            clita.
            </p>
            <h5 class="mb-1">Patient Name</h5>
            <span class="fst-italic">Profession</span>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection