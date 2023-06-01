<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel="icon" type="image/png" href="<?= base_url('asset/')?>front/img/uploads/favicon1.png">
    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('asset/')?>front/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/')?>front/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/')?>front/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/')?>front/css/aos.css">
    <link rel="stylesheet" href="<?= base_url('asset/')?>front/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('asset/')?>front/css/style.css">
    <link rel="stylesheet" href="<?= base_url('asset/')?>front/css/custom.css">

    <title>Beranda | SDN 2 Sidorejo</title>
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="<?= base_url('asset/')?>front/img/uploads/favicon1.png" alt="logo" class="img-fluid preloader-icon"/>
            <div class="loading-bar"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Content Start -->
    <div class="main-wrapper">
        <!-- Header Start -->
        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container-fluid container-xxl d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="<?= base_url('Beranda')?>" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="<?= base_url('asset/')?>front/img/uploads/logo-tjsp.png" alt="logo" class="img-fluid img-logo logo-white">
                        <h4><i class="icon-study"></i>SDN 2 SIDOREJO</h4> 
                    </a>

                    <a class="navbar-toggler position-absolute right-0 border-0 " href="javascript:void(0);" role="button">
                        <span class="far fa-bars"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></span>
                    </a>

                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li class="single-link"><a href="<?= base_url('Beranda')?>" class="nav-link active">Beranda</a></li>
                            <li class="single-link"><a href="<?= base_url('About')?>" class="nav-link">Profil</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Direktori
                                </a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-half">
                                        <div class="dropdown-grid-item">
                                            <h6 class="drop-heading">Direktori</h6>
                                            <a href="<?= base_url('Guru')?>" class="dropdown-link">
                                                <span class="demo-list bg-primary rounded text-white fw-bold">1</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Direktori Guru</div>
                                                    <p>Data Guru SD Negeri 2 Sidorejo</p>
                                                </div>
                                            </a>
                                            <a href="<?= base_url('Siswa')?>" class="dropdown-link">
                                                <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Direktori Siswa</div>
                                                    <p>Data Siswa SD Negeri 2 Sidorejo</p>

                                                </div>
                                            </a>
                                            <a href="<?= base_url('Kelas')?>" class="dropdown-link">
                                                <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Direktori Kelas</div>
                                                    <p>Data Kelas SD Negeri 2 Sidorejo</p>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Akademik
                                </a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-half">
                                        <div class="dropdown-grid-item">
                                            <h6 class="drop-heading">Akademik</h6>
                                            <a href="<?= base_url('Agenda')?>" class="dropdown-link">
                                                <span class="demo-list bg-primary rounded text-white fw-bold">1</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Agenda</div>
                                                    <p>Agenda SDN 2 Sidorejo</p>
                                                </div>
                                            </a>
                                            <a href="<?= base_url('Pengumuman')?>" class="dropdown-link">
                                                <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Pengumuman</div>
                                                    <p>Pengumuman SDN 2 Sidorejo</p>
                                                </div>
                                            </a>
                                            <a href="<?= base_url('Download')?>" class="dropdown-link">
                                                <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Materi</div>
                                                    <p>Materi SDN 2 Sidorejo</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="single-link"><a href="<?= base_url('Galeri')?>" class="nav-link">Galeri</a></li>
                           
                        </ul>
                    </div>

                    
                </div>
            </nav>
        </header>
        <!-- Header End -->

        <!-- Hero Section Start -->
        <section class="hero-section ptb-120 bg-light text-white" style="background: url('<?= base_url('asset/')?>front/img/shape/dot-dot-wave-shape.svg') no-repeat bottom left;">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-xl-5 col-lg-5">
                        <div class="hero-content-wrap text-center text-xl-start text-lg-start mt-5 mt-lg-0 mt-xl-0" data-aos="fade-right">
                            <h1 class="fw-bold display-5 mb-4">SD Negeri 2 <span class="text-primary">Sidorejo</span></h1>
                            <p class="lead">SD NEGERI 2 SIDOREJO adalah salah satu satuan pendidikan dengan jenjang SD di Sidorejo, Kec. Jatisrono, Kab. Wonogiri, Jawa Tengah.</p>

                         
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 mt-5">
                        <div class="hero-img-wrap position-relative" data-aos="fade-left">
                            <img src="<?= base_url('asset/')?>front/img/uploads/background/school-ilustrate.png" alt="Ilustrasi Hero" style="width:80%" class="position-relative img-fluid rounded-custom">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="divider-bottom">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div> -->
        </section>
        <!-- Hero Section End -->

        <!-- Main Content Start -->        
        <!-- Program TJSP Start -->
        <section class="customer-review ptb-100">
            <div class="container">
                <div class="row">
                    <div class="text-center" data-aos="fade-up">
                        <h2 class="">Agenda Sekolah</h2>
                    </div>
                </div>
                <div class="row">
                <?php foreach($agenda as $i):

                    $nama = $i['agenda_nama'];
                    $isi = $i['agenda_deskripsi'];
                    $mulai = date_create($i['agenda_mulai']);					
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="review-info-wrap text-center rounded-custom d-flex flex-column h-100 p-5" data-aos="fade-up" data-aos-delay="50">
                            <img src="<?= base_url('asset/')?>front/img/uploads/background/agenda.png" width="250" alt="<?= $nama ?>" style="width:30%;" class="img-fluid m-auto">
                            <div class="review-info-content mt-2">
                                <h5 class="mb-4"><?= $nama ?></h5>
                            </div>
                            <a href="<?= base_url('Agenda')?>" class="link-with-icon p-0 mt-auto text-decoration-none text-primary">Lihat Agenda 
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
				<?php endforeach; ?>

                </div>
            </div>
        </section>
        <!-- Program TJSP End -->

       

        <!-- RPK Start -->
        <section class="our-integration ptb-70 bg-light position-relative">
            <div class="divider-top">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>

            <div class="container">
                <div class="position-relative w-100">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-heading" data-aos="fade-right">
                                <h4 class="text-primary h5">SDN 2 Sidorejo</h4>
                                <h2>Galeri Foto</h2>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="text-lg-end mb-5 mb-lg-0" data-aos="fade-left">
                                <a href="<?= base_url('Galeri')?>" class="btn btn-primary">Lihat Semua Foto</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="position-relative w-100">
                                <div class="swiper-container rpk-swiper">
                                    <div class="swiper-wrapper">
                                    <?php foreach($galeri as $i):
                                        $judul = $i['galeri_judul'];
                                        $gambar = $i['galeri_gambar'];					
                                    ?>
                                        <div class="swiper-slide position-relative">
                                            <div class="position-relative text-decoration-none connected-app-single border border-2 promo-border-hover mt-4 transition-base bg-white rounded-custom d-block overflow-hidden p-5">
                                                <div class="position-relative connected-app-content">
                                                    <div class="position-relative">
                                                        <img class="img-fluid program-img" src="<?php echo base_url()?>asset/foto/galeri/<?= $gambar?>" alt="<?= $judul ?>" >
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
	                        	<?php endforeach ?>

                                        
                                    </div>
                                </div>
                                <span class="swiper-button-next"></span>
                                <span class="swiper-button-prev"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="divider-bottom div-2">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>
        <!-- RPK End -->

        <!-- Blog Start -->
        <section class="home-blog-section ptb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h2>Pengumuman SDN 2 Sidorejo</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php foreach($pengumuman as $i):
                     $judul = $i['pengumuman_judul'];
                     $desk = $i['pengumuman_deskripsi'];					
                     $tgl = $i['pengumuman_tanggal'];					
                     $author = $i['pengumuman_author'];					
                 ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="50">
                            <div class="article-content p-4">
                                
                                    <h2 class="h5 article-title limit-2-line-text"><?= $judul ?></h2>

                                    <p class="limit-2-line-text"><?= $desk ?></p>
    
                                <div class="d-flex align-items-center pt-4">
                                    <div class="avatar">
                                        <img src="<?= base_url('asset/')?>front/img/uploads/user.png" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                    </div>
                                    <div class="avatar-info">
                                        <h6 class="mb-0 avatar-name"><?= $author ?></h6>
                                        <span class="small fw-medium text-muted"><?=  $tgl ?></span>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                    
                </div>
            </div>
        </section>
        <!-- Blog End -->
        <!-- Main Content End -->

        <!-- Footer Start -->
        <footer class="footer-section position-relative bg-light">
            <div class="divider-top">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
            <!--footer top start-->
            <div class="footer-top footer-light ptb-50">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-12 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <h4>SDN 2 SIDOREJO</h4>
                                </div>
                                <p>SD NEGERI 2 SIDOREJO adalah salah satu satuan pendidikan dengan jenjang SD di Sidorejo, Kec. Jatisrono, Kab. Wonogiri, Jawa Tengah.</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8 mt-4 mt-md-0 mt-lg-0">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Halaman Terkait</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="<?= base_url('Beranda') ?>" class="text-decoration-none">Beranda</a></li>
                                            <li><a href="<?= base_url('Profil') ?>" class="text-decoration-none">Profil</a></li>
                                            <li><a href="<?= base_url('Guru') ?>" class="text-decoration-none">Direktori</a></li>
                                            <li><a href="<?= base_url('Agenda') ?>" class="text-decoration-none">Akademik</a></li>
                                            <li><a href="<?= base_url('Galeri') ?>" class="text-decoration-none">Galeri</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Direktori</h3>

                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="<?= base_url('Guru') ?>" class="text-decoration-none"> Guru</a></li>
                                            <li><a href="<?= base_url('Siswa') ?>" class="text-decoration-none">Siswa</a></li>
                                            <li><a href="<?= base_url('Kelas') ?>" class="text-decoration-none">Kelas</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Hubungi Kami</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li>
                                                <a href="mailto:: sdnduosidorejo@gmail.com" class="contact-list">
                                                    <i class="fad fa-envelope"></i>
                                                    <span>sdnduosidorejo@gmail.com</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="contact-list">
                                                    <i class="fad fa-location-dot"></i>
                                                    <span>Ngoleh, Sidorejo, Kec. Jatisrono, Kab. Wonogiri Prov. Jawa Tengah</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="contact-list">
                                                    <i class="fad fa-phone"></i>
                                                    <span>085329211811</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom footer-light py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">Hak Cipta &copy; 2022 SDN 2 Sidorejo</p>
                            </div>
                        </div>
                        <!-- <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>
        <!-- Footer End -->
    </div>
    <!-- Content End -->

    <!-- JS Scripts -->
    <script src="<?= base_url('asset/')?>front/js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('asset/')?>front/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('asset/')?>front/js/smooth-scroll.polyfills.min.js"></script>
    <script src="<?= base_url('asset/')?>front/js/gumshoe.polyfills.min.js"></script>
    <script src="<?= base_url('asset/')?>front/js/swiper-bundle.min.js"></script>
    <script src="<?= base_url('asset/')?>front/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('asset/')?>front/js/parallax.min.js"></script>
    <script src="<?= base_url('asset/')?>front/js/aos.js"></script>
    <script src="<?= base_url('asset/')?>front/js/app.js"></script>

    <script>
        var swiper = new Swiper(".rpk-swiper", {
        slidesPerView: 1,
        slidesPerGroup: 1,
        speed: 700,
        spaceBetween: 15,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 25,
            },
            1142: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
        },
        // breakpoints: {
        //     320: {
        //         slidesPerView: 1,
        //     },
        //     768: {
        //         spaceBetween: 20,
        //     },
        //     1024: {
        //         slidesPerView: 2,
        //         spaceBetween: 25,
        //     },
        //     1142: {
        //         slidesPerView: 2,
        //         spaceBetween: 30,
        //     },
        // },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>
</body>
</html>