<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FIKRET CURE OFFICIAL WEBSITE</title>
    <meta
        content="{{$about}}}}"
        name="description">
    <meta content="fikretcure,fikret cüre,fikret cure,fikretcüre" name="keywords">
    <meta name="robots" content="index, follow">
    <meta name="author" content="fikretcure">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png?v1" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: DevFolio - v4.10.0
    * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">∮iƙré৳ℭʋré</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto " href="#work">Work</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<div id="hero" class="hero route bg-image" style="background-image: url(storage{{ "/".$hero_bg}})">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
        <div class="table-cell">
            <div class="container">
                <h1 class="hero-title mb-4">I am Fikret CURE</h1>
                <p class="hero-subtitle"><span class="typed"
                                               data-typed-items="Backend, Laravel, Freelancer, Php"></span></p>
            </div>
        </div>
    </div>
</div><!-- End Hero Section -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="storage/{{$about_bg}}" class="img-fluid rounded b-shadow-a"
                                                 alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Name: </span> <span>Fikret CURE</span></p>
                                            <p><span class="title-s">Profile: </span> <span>Backend developer</span>
                                            </p>
                                            <p><span class="title-s">Email: </span> <span>info@fikretcure.dev</span></p>
                                            <p><span class="title-s">Phone: </span> <span>+90 505 068 71 61</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Skill</p>
                                    <span>Laravel</span> <span class="pull-right">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;"
                                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <span>Sql</span> <span class="pull-right">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;"
                                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <span>PHP</span> <span class="pull-right">50%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About me
                                        </h5>
                                    </div>
                                    <p class="lead">{{$about}}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Repositories
                        </h3>

                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($repos as $item)
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="storage/repos/{{$item["name"]}}.jpg" data-gallery="portfolioGallery"
                               class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="storage/repos/{{$item["name"]}}.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">{{$item["name"]}}</h2>
                                        <div class="w-more">
                                            <span
                                                class="w-date">{{\Carbon\Carbon::parse($item["created_at"])->diffForHumans(now()) }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="{{$item["html_url"]}}"> <span class="bi bi-github"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
             style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Send Message Us
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="contact" method="post" role="form"
                                              class="php-email-form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                               placeholder="Your Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                               placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                               id="subject" placeholder="Subject" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5"
                                                                  placeholder="Message" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center my-3">
                                                    <div class="loading">Loading</div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message">Your message has been sent. Thank you!
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <button type="submit"
                                                            class="button button-a button-big button-rouded">Send
                                                        Message
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Get in Touch
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead"> {{$about}}   </p>
                                        <ul class="list-ico">
                                            <li><span class="bi bi-geo-alt"></span> ISTANBUL , TURKEY
                                            </li>
                                            <li><span class="bi bi-phone"></span> +90 505 068 71 61</li>
                                            <li><span class="bi bi-envelope"></span> info@fikretcure.dev</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="https://www.youtube.com/channel/UC_Cqwomu8Pfgzb7qjBE0leQ"><span
                                                        class="ico-circle"><i
                                                            class="bi bi-youtube"></i></span></a></li>
                                            <li><a href="https://www.instagram.com/fikretcuredev/"><span
                                                        class="ico-circle"><i
                                                            class="bi bi-instagram"></i></span></a></li>

                                            <li><a href="https://www.linkedin.com/in/fikretcure/"><span
                                                        class="ico-circle"><i
                                                            class="bi bi-linkedin"></i></span></a></li>
                                            <li><a href="https://github.com/fikretcure"><span class="ico-circle"><i
                                                            class="bi bi-github"></i></span></a></li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright-box">
                    <p class="copyright">&copy; Copyright 2020 <strong>Fikret CURE</strong>. All Rights Reserved</p>
                    <div class="credits">
                        <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                      -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End  Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
