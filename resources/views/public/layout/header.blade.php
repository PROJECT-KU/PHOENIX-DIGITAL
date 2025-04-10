<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('global/assets/img/faviconphoenix.png') }}" rel="icon">
    <link href="{{ asset('global/assets/img/faviconphoenix.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('global/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('global/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('global/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('global/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('global/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('global/assets/css/main.css') }}" rel="stylesheet">

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('global/assets/img/logophoenix.png') }}" style="height: 60px; max-height: 100%;">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li style="background-color: #DAA520;"><a href="#promo">Promo Hari Ini</a></li>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="#statistik">Pembeli</a></li>
                    <li><a href="#produk">Produk Kami</a></li>
                    <li><a href="#faq">Bantuan</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li> -->
                    <li><a href="#kontak">Hubungi Kami Sekarang!</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    @yield('konten')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ asset('global/assets/img/logophoenix.png') }}" style="height: 60px; max-height: 100%;">
                    </a>
                    <div class="footer-contact pt-3">
                        <!-- <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p> -->
                        <p class="mt-3"><strong>Phone:</strong> <span><a href="https://wa.me/6289505967995" target="_blank">+62 895-0596-7995</a></span></p>
                        <p><strong>Email:</strong> <span><a href="mailto:phoenixdigitalwarehouse@gmail.com">phoenixdigitalwarehouse@gmail.com</a></span></p>
                    </div>
                    <!-- <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div> -->
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Tautan Berguna</h4>
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#promo">Promo Hari ini!</a></li>
                        <li><a href="#tentang">Tentang Kami</a></li>
                        <li><a href="#produk">Produk Kami</a></li>
                        <li><a href="#faq">Bantuan</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><a href="#">Akun Scopus Lisensi + Scopus Ai</a></li>
                        <li><a href="#">Grammarly Premium</a></li>
                        <li><a href="#">Scispace</a></li>
                        <li><a href="#">Quillbot</a></li>
                        <li><a href="#">Deepl Pro</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Ikuti Perjalanan Kami</h4>
                    <p>Jangan lewatkan promo spesial & info akun premium terbaru! Langganan sekarang, gratis!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Phoenix Digital Warehouse</strong> <span id="current-year"></span> - All Rights Reserved</p>
        </div>

        <script>
            // Menampilkan tahun otomatis
            document.getElementById("current-year").textContent = new Date().getFullYear();
        </script>

    </footer>

    <!-- Tombol WhatsApp -->
    <a href="https://wa.me/6289505967995" target="_blank" id="whatsapp-button" class="whatsapp-float d-flex align-items-center justify-content-center">
        <i class="bi bi-whatsapp"></i>
    </a>

    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #25D366;
            /* hijau WA */
            color: white;
            /* ikon putih */
            border-radius: 50%;
            font-size: 24px;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: 0.3s ease;
        }

        .whatsapp-float:hover {
            background-color: #1ebe5d;
            /* hijau gelap saat hover */
            color: white;
            /* pastikan ikon tetap putih saat hover */
        }

        .whatsapp-float i {
            color: white;
            /* pastikan icon juga putih */
        }
    </style>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('global/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('global/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('global/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('global/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('global/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('global/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('global/assets/js/main.js') }}"></script>

</body>