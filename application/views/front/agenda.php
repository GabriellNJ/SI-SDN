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
    <link rel="stylesheet" href="<?= base_url('asset/')?>front/css/aos.css">
    <link rel="stylesheet" href="<?= base_url('asset/')?>front/css/style.css">
    <link rel="stylesheet" href="<?= base_url('asset/')?>front/css/custom.css">

    <title>Agenda | SDN 2 Sidorejo</title>
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
        <header class="main-header w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container-fluid container-xxl d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="index.php" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <h4>SDN 2 SIDOREJO</h4>
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
                    <!-- offcanvas menu start-->
                    <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                        <div class="offcanvas-header d-flex align-items-center mt-4">
                            <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                                <img src="<?= base_url('asset/')?>front/img/uploads/logo-tjsp.png" alt="logo" class="img-fluid img-logo ps-2">
                            </a>
                            <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i class="far fa-close"></i></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                                <li><a href="index.html" class="nav-link">Beranda</a></li>
                                <li><a href="profil.html" class="nav-link">Profil</a></li>
                                <li><a href="program.html" class="nav-link active">Program Kami</a></li>
                                <li><a href="list-perusahaan.html" class="nav-link">Daftar Perusahaan</a></li>
                                <li><a href="berita.html" class="nav-link">Berita</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Rekap
                                    </a>
                                    <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                        <div class="dropdown-grid rounded-custom width-half">
                                            <div class="dropdown-grid-item">
                                                <h6 class="drop-heading">Rekapitulasi TJSP</h6>
                                                <a href="rekap-data.html" class="dropdown-link">
                                                    <span class="demo-list bg-primary rounded text-white fw-bold">1</span>
                                                    <div class="dropdown-info">
                                                        <div class="drop-title">Rekap Data TJSP</div>
                                                        <p>Rekapitulasi Data pada Tahun 2021</p>
                                                    </div>
                                                </a>
                                                <a href="rekap-infografis.html" class="dropdown-link">
                                                    <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                                    <div class="dropdown-info">
                                                        <div class="drop-title">Rekap Infografis</div>
                                                        <p>Rekapitulasi Infografis TJSP</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="registrasi.html" class="nav-link">Registrasi</a></li>
                            </ul>
                        </div>

                    </div> -->
                    <!--offcanvas menu end -->
                </div>
            </nav>
        </header>
        <!-- Header End -->

        <!-- Breadcrumbs Section Start -->
    <section class="breadcrumb-section page-header position-relative overflow-hidden ptb-50">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                            <h2>Agenda</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Beranda</a>
                                </li>
                                <li>Agenda</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="page-banner-image aos-init aos-animate" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <img src="<?= base_url('asset/')?>front/img/uploads/background/school-ilustrate.png" alt="Ilustrasi Hero" style="width:40%" class="position-relative img-fluid rounded-custom">

                            <div class="banner-shape">
                                <img class="img-fluid sm-img" src="<?= base_url('asset/')?>front/img/page-banner/shape.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumbs Section End -->

        <!-- Main Content Start -->
        <section class="feature-tab-section ptb-120">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="section-heading text-center mb-4">
                            <h5 class="h6 text-primary">Agenda</h5>
                            <h2>Agenda Kegiatan SDN 2 Sidorejo</h2>
                        </div>
                    </div>
                </div>
                
                        <div class="tab-content" id="nav-tabContent-2">
                            <div class="tab-pane fade pt-60 active show" id="bina-lingkungan" role="tabpanel">
                                <div class="row">
                                <?php
                                    $no=0;
                                    foreach ($data->result() as $row) :
                                        $judul=$row->agenda_nama;
                                        $deskripsi=$row->agenda_deskripsi;
                                        $mulai=date_create($row->agenda_mulai);        
                                ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card-program border border-2 bg-white rounded-custom" style="height:100%">
                                            <div class="position-relative connected-app-content">
                                                <!-- <img class="img-fluid img-program rounded-custom mb-4" src="<?= base_url('asset/')?>front/img/uploads/kegiatan/kegiatan-1.jpg" alt="integration"> -->

                                                <div class="rpk-desc">
                                                    <div class="h4 text-decoration-none d-block mb-1" ><?= $judul ?></div>
                                                    <p class=" text-muted mb-4"><?= $deskripsi ?></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                    
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="<?= base_url('asset/')?>front/js/aos.js"></script>
    <script src="<?= base_url('asset/')?>front/js/app.js"></script>
</body>
</html>