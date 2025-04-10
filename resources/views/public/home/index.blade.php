@extends('public.layout.header')

@section('title')
Beranda | Phoenix Digital
@stop

@section('konten')
<main class="main">

    <!--================== HEADER ==================-->
    <section id="hero" class="hero section dark-background">
        <img src="{{ asset('global/assets/img/hero-bg-2.jpg') }}" alt="" class="hero-bg">
        <div class="container">
            <div class="row gy-4 justify-content-between">
                <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('global/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>

                <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
                    <h1>Butuh Akun Premium? <span>Dapatkan Sekarang dengan Harga Gila-Gilaan!</span></h1>
                    <p>Paket lengkap untuk kebutuhan riset, tugas, dan produktivitas. Dijamin aktif atau uang kembali.</p>
                    <div class="d-flex">
                        <a href="https://wa.me/6289505967995?text=Halo%20kak%2C%20saya%20tertarik%20dengan%20promo%20akun%20premium.%20Boleh%20minta%20info%20lebih%20lanjut%3F" target="_blank" class="btn-get-started">
                            Cek Promo Hari Ini!
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3"></use>
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0"></use>
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9"></use>
            </g>
        </svg>
    </section>
    <!--================== END ==================-->

    <!--================== PRODUK ==================-->
    <section id="promo" class="pricing section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Promo Akun Premium</h2>
            <div><span>Super Murah,</span> <span class="description-title">Langsung Aktif & Terjamin Legal</span></div>
        </div>
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-item">
                        <h3>Paket Silaturahmi Hemat</h3>
                        <p class="description">
                            🎁 Paket spesial 1 bulan penuh! <br>Berisi <strong>Scopus Lisensi + Scopus AI + DeepL Pro</strong>.
                            Sempurna untuk mempercepat riset, translate jurnal, dan eksplorasi literatur ilmiah.
                            <br>💡 Harga hemat, manfaat maksimal!
                        </p>
                        <h4 style="font-size: 1.5rem; margin-bottom: 10px; margin-top:50px;">
                            <span style="background-color: #ffeb3b; color: #d32f2f; padding: 2px 6px; border-radius: 5px; font-size: 0.9rem; font-weight: bold;">
                                PROMO HARI INI!
                            </span><br><br>
                            <span style="text-decoration: line-through; color: #b71c1c;"><sup>Rp</sup>250.000</span>
                            &nbsp;
                            <sup style="color: #388e3c;">Rp</sup>
                            <span style="color: #388e3c; font-weight: bold; font-size: 30px;">180.000</span>
                            <span style="font-size: 0.9rem;">/ bulan</span>
                        </h4>
                        <a href="https://wa.me/6289505967995?text=Halo%2C%20saya%20tertarik%20dengan%20*Paket%20Silaturahmi%20Hemat*%20(Scopus%20Lisensi%2C%20Scopus%20AI%2C%20DeepL)%20selama%201%20bulan.%20Masih%20tersedia%3F" class="cta-btn" target="_blank">
                            Pesan Sekarang!
                        </a>
                        <p style="font-size: 1.1rem; margin-bottom: 10px;">
                            🎉 *Jangan lewatkan kesempatan terbatas ini!* Promo bisa berakhir kapan saja.
                        </p>
                        <!-- <p class="text-center small">No credit card required</p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Voluptate id voluptas qui sed aperiam rerum</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Iure nihil dolores recusandae odit voluptatibus</span></li>
                        </ul> -->
                    </div>
                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pricing-item featured">
                        <p class="popular">Popular</p>
                        <h3>Paket Spesial Terbatas</h3>
                        <p class="description">
                            🔐 Akses 6 bulan tanpa batas! <br> Berisi <strong>Scopus Lisensi + Scopus AI + SciSpace Pro</strong>
                            <br>🧠 Rancang, teliti, dan susun jurnal ilmiah dengan lebih cepat & akurat.
                            <br>⚡ Cocok untuk dosen, peneliti, dan mahasiswa akhir yang butuh solusi efisien.
                        </p>
                        <h4 style="font-size: 1.5rem; margin-bottom: 10px; margin-top:30px;">
                            <span style="background-color: #ffeb3b; color: #d32f2f; padding: 2px 6px; border-radius: 5px; font-size: 0.9rem; font-weight: bold;">
                                PROMO HARI INI!
                            </span><br><br>
                            <span style="text-decoration: line-through; color: #b71c1c;"><sup>Rp</sup>650.000</span>
                            &nbsp;
                            <sup style="color: #388e3c;">Rp</sup>
                            <span style="color: #388e3c; font-weight: bold; font-size: 30px;">300.000</span>
                            <span style="font-size: 0.9rem;">/ 6 bulan</span>
                        </h4>
                        <a href="https://wa.me/6289505967995?text=Halo%2C%20saya%20tertarik%20dengan%20*Paket%20Spesial%20Terbatas*%20(Scopus%20Lisensi%2C%20Scopus%20AI%2C%20SciSpace%20Pro)%20selama%206%20bulan.%20Masih%20tersedia%3F"
                            class="cta-btn" target="_blank">
                            Pesan Sekarang!
                        </a>
                        <p style="font-size: 1.1rem; margin-bottom: 10px;">
                            🎉 *Jangan lewatkan kesempatan terbatas ini!* Promo bisa berakhir kapan saja.
                        </p>
                        <!-- <p class="text-center small">No credit card required</p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            <li><i class="bi bi-check"></i> <span>Voluptate id voluptas qui sed aperiam rerum</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Iure nihil dolores recusandae odit voluptatibus</span></li>
                        </ul> -->
                    </div>
                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pricing-item">
                        <h3>Paket Sultan Edu</h3>
                        <p class="description">
                            🚀 Boost produktivitas akademik kamu ke level tertinggi! <br>
                            Akses 1 tahun ke <strong>Scopus Lisensi + Scopus AI + Grammarly Premium</strong> <br>
                            🎁 Bonus eksklusif: <strong>Gratis SciSpace 1 bulan</strong> untuk bantu baca & pahami jurnal internasional. <br>
                            📚 Efisiensi maksimal, hasil optimal!
                        </p>
                        <h4 style="font-size: 1.5rem; margin-bottom: 10px;">
                            <span style="background-color: #ffeb3b; color: #d32f2f; padding: 2px 6px; border-radius: 5px; font-size: 0.9rem; font-weight: bold;">
                                PROMO HARI INI!
                            </span><br><br>
                            <span style="text-decoration: line-through; color: #b71c1c;"><sup>Rp</sup>900.000</span>
                            &nbsp;
                            <sup style="color: #388e3c;">Rp</sup>
                            <span style="color: #388e3c; font-weight: bold; font-size: 30px;">600.000</span>
                            <span style="font-size: 0.9rem;">/ tahun</span>
                        </h4>
                        <a href="https://wa.me/6289505967995?text=Halo%2C%20saya%20tertarik%20dengan%20*Paket%20Sultan%20Edu*%20(Scopus%20Lisensi%2C%20Scopus%20AI%2C%20Grammarly%20Premium%20%2B%20Bonus%20SciSpace%201%20bulan)%20selama%201%20tahun.%20Boleh%20info%20lebih%20lanjut%3F"
                            class="cta-btn" target="_blank">
                            Pesan Sekarang!
                        </a>
                        <p style="font-size: 1.1rem; margin-bottom: 10px;">
                            🎉 *Jangan lewatkan kesempatan terbatas ini!* Promo bisa berakhir kapan saja.
                        </p>
                        <!-- <p class="text-center small">No credit card required</p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            <li><i class="bi bi-check"></i> <span>Voluptate id voluptas qui sed aperiam rerum</span></li>
                            <li><i class="bi bi-check"></i> <span>Iure nihil dolores recusandae odit voluptatibus</span></li>
                        </ul> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== MENGAPA MEMILIH KAMI ==================-->
    <section id="tentang" class="about section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <div class="col-xl-5 content" style="margin-top: -50px;">
                    <h3>Mengapa Memilih Kami?</h3>
                    <h2>Solusi Akun Premium Terpercaya, Terjangkau, & Terjamin</h2>
                    <p>
                        Kami hadir sebagai partner digital terbaik untuk mahasiswa, dosen, dan peneliti. Dengan harga yang bersahabat dan kualitas premium, kami telah dipercaya oleh ribuan pengguna di seluruh Indonesia.
                        <br>
                        Pilih kami, dan rasakan kemudahan dalam riset & penulisan ilmiah tanpa hambatan!
                    </p>
                </div>

                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-chat-dots-fill"></i>
                                <h3>Respon Cepat 24/7</h3>
                                <p>
                                    Tim support kami siap membantu kapan pun Anda butuh. Konsultasi, bantuan teknis, atau pertanyaan seputar akun premium—kami hadir 24 jam setiap hari.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-tags-fill"></i>
                                <h3>Harga Terjangkau</h3>
                                <p>
                                    Nikmati akses ke akun premium berkualitas dengan harga yang bersahabat di kantong. Solusi hemat untuk mahasiswa, dosen, hingga profesional.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-star-fill"></i>
                                <h3>Kualitas Terjamin</h3>
                                <p>
                                    Kami hanya menyediakan akun premium original dan legal dengan performa terbaik. Dapatkan pengalaman penggunaan yang lancar, aman, dan terpercaya.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h3>Pemesanan Instan</h3>
                                <p>
                                    Proses pemesanan cepat dan praktis! Tanpa ribet, tanpa antre – akun langsung dikirim ke WhatsApp Anda setelah pembayaran. Hemat waktu, langsung pakai!
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== STATISTIK PEMBELI ==================-->
    <section id="statistik" class="stats section light-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 text-center">

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-emoji-smile" style="font-size: 2.5rem; color: #ffc107;"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="3501" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Pelanggan Puas</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-box-seam" style="font-size: 2.5rem; color: #0d6efd;"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="8059" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Paket Terjual</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-headset" style="font-size: 2.5rem; color: #28a745;"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="25989" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jam Layanan Aktif</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <!-- Bintang kecil 10px -->
                    <div class="rating-stars mb-1">
                        <i class="bi bi-star-fill" style="font-size: 10px; color: #fd7e14;"></i>
                        <i class="bi bi-star-fill" style="font-size: 10px; color: #fd7e14;"></i>
                        <i class="bi bi-star-fill" style="font-size: 10px; color: #fd7e14;"></i>
                        <i class="bi bi-star-fill" style="font-size: 10px; color: #fd7e14;"></i>
                        <i class="bi bi-star-half" style="font-size: 10px; color: #fd7e14;"></i>
                    </div>

                    <!-- Angka rating -->
                    <div class="stats-item">
                        <span data-purecounter-start="0.0" data-purecounter-end="4.9" data-purecounter-duration="1" class="purecounter" data-purecounter-decimals="1"></span>
                        <p>Rating Kepuasan</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== PRODUK ==================-->
    <section id="produk" class="features section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Promo Akun Premium Terlaris</h2>
            <div><span>Diskon Besar-besaran,</span> <span class="description-title">Akun Resmi, Langsung Aktif, & Legal</span></div>
        </div>

        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="features-item">
                        <i class="bi bi-journal-text" style="color: #ffbb2c;"></i>
                        <h3><a href="#" class="stretched-link">Scopus Lisensi + Scopus AI</a></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="features-item">
                        <i class="bi bi-spellcheck" style="color: #5578ff;"></i>
                        <h3><a href="#" class="stretched-link">Grammarly Premium</a></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="features-item">
                        <i class="bi bi-chat-dots" style="color: #e80368;"></i>
                        <h3><a href="#" class="stretched-link">ChatGPT Premium</a></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="features-item">
                        <i class="bi bi-lightbulb" style="color: #e361ff;"></i>
                        <h3><a href="#" class="stretched-link">SciSpace AI</a></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="features-item">
                        <i class="bi bi-translate" style="color: #47aeff;"></i>
                        <h3><a href="#" class="stretched-link">DeepL Pro</a></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="features-item">
                        <i class="bi bi-pencil-square" style="color: #ffa76e;"></i>
                        <h3><a href="#" class="stretched-link">QuillBot Premium</a></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="features-item">
                        <i class="bi bi-graph-up-arrow" style="color: #11dbcf;"></i>
                        <h3><a href="#" class="stretched-link">Scite.ai</a></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="features-item">
                        <i class="bi bi-bar-chart-fill" style="color: #4233ff;"></i>
                        <h3><a href="#" class="stretched-link">Gamma AI</a></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="features-item">
                        <i class="bi bi-shield-check" style="color: #b2904f;"></i>
                        <h3><a href="#" class="stretched-link">Turnitin</a></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
                    <div class="features-item">
                        <i class="bi bi-file-earmark-text" style="color: #b20969;"></i>
                        <h3><a href="#" class="stretched-link">Paperpal</a></h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
                    <div class="features-item">
                        <i class="bi bi-windows" style="color: #ff5828;"></i>
                        <h3><a href="#" class="stretched-link">Lisensi MS Office</a></h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== DETAIL ==================-->
    <!-- <section id="details" class="details section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Details</h2>
            <div><span>Check Our</span> <span class="description-title">Details</span></div>
        </div>

        <div class="container">
            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('global/assets/img/details-1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i><span> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                        <li><i class="bi bi-check"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                        <li><i class="bi bi-check"></i> <span>Ullam est qui quos consequatur eos accusamus.</span></li>
                    </ul>
                </div>
            </div>

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('global/assets/img/details-2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Corporis temporibus maiores provident</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                    <img src="{{ asset('global/assets/img/details-3.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                    <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                        <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                        <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad fugiat</span>.</li>
                    </ul>
                </div>
            </div>

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="{{ asset('global/assets/img/details-4.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

        </div>
    </section> -->
    <!--================== END ==================-->

    <!--================== GALLEERY ==================-->
    <!-- <section id="gallery" class="gallery section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Gallery</h2>
            <div><span>Check Our</span> <span class="description-title">Gallery</span></div>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('global/assets/img/gallery/gallery-1.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('global/assets/img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('global/assets/img/gallery/gallery-2.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('global/assets/img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('global/assets/img/gallery/gallery-3.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('global/assets/img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('global/assets/img/gallery/gallery-4.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('global/assets/img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('global/assets/img/gallery/gallery-5.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('global/assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('global/assets/img/gallery/gallery-6.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('global/assets/img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('global/assets/img/gallery/gallery-7.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('global/assets/img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('global/assets/img/gallery/gallery-8.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('global/assets/img/gallery/gallery-8.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!--================== END ==================-->

    <!--================== TESTIMONI ==================-->
    <!-- <section id="testimonials" class="testimonials section dark-background">
        <img src="{{ asset('global/assets/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt="">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        }
                    }
                </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('global/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('global/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('global/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('global/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('global/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section> -->
    <!--================== END ==================-->

    <!--================== TEAM ==================-->
    <!-- <section id="team" class="team section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <div><span>Check Our</span> <span class="description-title">Team</span></div>
        </div>

        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('global/assets/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('global/assets/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('global/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!--================== END ==================-->

    <!--================== FAQ ==================-->
    <section id="faq" class="faq section light-background">
        <div class="container-fluid">
            <div class="row gy-4">
                <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                    <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                        <h3><span>Pertanyaan yang </span><strong>Sering Diajukan</strong></h3>
                        <p>
                            Berikut adalah beberapa pertanyaan umum dari pelanggan kami. Jika masih ada yang ingin ditanyakan, jangan ragu untuk menghubungi kami.
                        </p>
                    </div>

                    <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-item faq-active">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah akun ready stock?</h3>
                            <div class="faq-content">
                                <p>Ya, semua produk yang tertera di katalog kami adalah ready stock dan siap untuk langsung dikirim setelah pemesanan dilakukan.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Berapa lama pengiriman setelah pemesanan?</h3>
                            <div class="faq-content">
                                <p>Setelah pembayaran dikonfirmasi, pesanan akan langsung kami proses dan kirim di hari yang sama atau maksimal 1x24 jam (hari kerja).</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah akun ini terpercaya dan aman?</h3>
                            <div class="faq-content">
                                <p>Tentu saja! Kami sudah melayani ribuan pelanggan dengan rating kepuasan tinggi. Semua transaksi dijamin aman dan informasi pelanggan dijaga kerahasiaannya.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Bagaimana jika akun error atau tidak bisa digunakan?</h3>
                            <div class="faq-content">
                                <p>Jika terjadi kendala pada akun yang Anda terima, kami siap bantu! Silakan langsung hubungi tim support kami untuk panduan solusi atau penggantian.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah support tersedia 24 jam?</h3>
                            <div class="faq-content">
                                <p>Ya! Tim support kami siap membantu Anda 24/7. Kapan pun Anda butuh bantuan, langsung hubungi kami melalui chat yang tersedia.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2">
                    <img src="{{ asset('global/assets/img/faq.jpg') }}" class="img-fluid" alt="FAQ Image" data-aos="zoom-in" data-aos-delay="100">
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== KONTAK ==================-->
    <section id="kontak" class="contact section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Hubungi Kami</h2>
            <div><span>Pesan Sekarang,</span> <span class="description-title">Respon Cepat & Ramah 24/7</span></div>
        </div>

        <div class="container" data-aos="fade" data-aos-delay="100">
            <div class="row gy-4">

                <div class="col-lg-4">
                    <!-- <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div> -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-whatsapp flex-shrink-0"></i>
                        <div>
                            <h3>Chat via WhatsApp</h3>
                            <p><a href="https://wa.me/6289505967995" target="_blank">+62 895-0596-7995</a></p>
                        </div>
                    </div>

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p><a href="mailto:phoenixdigitalwarehouse@gmail.com">phoenixdigitalwarehouse@gmail.com</a></p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="https://formspree.io/f/xkgjkvry?language=id" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit">Kirim Pesan</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

</main>

<!--================== SWEET ALERT KIRIM PESAN KONTAK ==================-->
<script>
    const form = document.querySelector(".php-email-form");

    form.addEventListener("submit", async function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: "POST",
                body: formData,
                headers: {
                    Accept: "application/json"
                },
            });

            if (response.ok) {
                form.reset();
                Swal.fire({
                    icon: "success",
                    title: "Pesan Terkirim!",
                    text: "Terima kasih, kami akan segera membalas.",
                    confirmButtonColor: "#3085d6",
                });
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Oops!",
                    text: "Terjadi kesalahan saat mengirim pesan.",
                });
            }
        } catch (error) {
            Swal.fire({
                icon: "error",
                title: "Gagal!",
                text: "Silakan coba lagi nanti.",
            });
        }
    });
</script>
<!--================== END ==================-->

@stop