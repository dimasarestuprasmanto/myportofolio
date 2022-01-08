<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Personal Portfolio Website - HTML, CSS & Vanilla Javascript</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include 'header.php'; ?>

    <section class="main" id="main">
        <?php include 'main.php'; ?>
    </section>

    <section class="about" id="about">
        <?php include 'about.php'; ?>
    </section>

    <section class="skills" id="skills">
        <?php include 'skills.php'; ?>
    </section>

    <section class="work" id="work">
        <?php include 'work.php'; ?>
    </section>

    <section class="services" id="services">
        <?php include 'serti.php'; ?>
    </section>

    <section class="contact" id="contact">
        <?php include 'contact.php'; ?>
    </section>

    <footer class="footer">
        <span class="footer-title">Dimas Arestu Prasmanto</span>
        <p>Copyright @2021 <a href="#">Coding Snow</a>. All Rights Reserved.</p>
    </footer>

    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade bg-color" id="potensi" tabindex="-1" aria-labelledby="potensi" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-lg-down">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Title-->
                                <h5 class="text-secondary text-uppercase mb-3">
                                    Sistem Informasi dan Monitoring Potensi Penjualan Sales PT. ICON+ Region Jawa Barat
                                </h5>
                                <!-- Icon Divider-->
                                <!-- Portfolio Modal - Image-->
                                <div class="wrapper">
                                    <div class="carousel owl-carousel">
                                        <img src="assets/images/project1/img_1.png" alt="">
                                        <img src="assets/images/project1/img_2.png" alt="">
                                        <img src="assets/images/project1/img_3.png" alt="">
                                        <img src="assets/images/project1/img_4.png" alt="">
                                    </div>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Befungsi untuk mengawasi atau memonitoring potensi penjualan yang dilakukan sales. Dibangun menggunakan Laravel, VueJS dan MySQL sebagai databasenya. Terdapat dua hak akses yaitu Admin dan Sales.</p>
                                <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close
                                </a>
                                &nbsp;
                                <a class="btn btn-md btn-primary " href="https://potensi.arisumardi.my.id" target="_blank">
                                    <i class="fas fa-play fa-fw"></i>
                                    Live Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade bg-color" id="masjid" tabindex="-1" aria-labelledby="masjid" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-lg-down">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Title-->
                                <h5 class="text-secondary text-uppercase mb-3">
                                    SISTEM LAYANAN PENGADUAN PASIEN PUSKESMAS KECAMATAN X
                                </h5>
                                <!-- Icon Divider-->
                                <!-- Portfolio Modal - Image-->
                                <div class="wrapper">
                                    <div class="carousel owl-carousel">
                                        <img src="assets/images/project2/img_1.png" alt="">
                                        <img src="assets/images/project2/img_2.png" alt="">
                                        <img src="assets/images/project2/img_3.png" alt="">
                                        <img src="assets/images/project2/img_4.png" alt="">
                                    </div>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Merupakan sebuah website layanan pengaduan pasien kepada Puskesmas. Dibuat menggunakan HTML, BootStrap, PHP dan MySQL sebagai databasenya. Terdapat tiga hak akses yaitu Admin, Petugas dan Masyarakat.</p>
                                <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close
                                </a>
                                &nbsp;
                                <a class="btn btn-md btn-primary " href="https://potensi.arisumardi.my.id" target="_blank">
                                    <i class="fas fa-play fa-fw"></i>
                                    Live Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade bg-color" id="primus" tabindex="-1" aria-labelledby="primus" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-lg-down">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Title-->
                                <h5 class="text-secondary text-uppercase mb-3">
                                    Supply Chain Management Primus Teknik
                                </h5>
                                <!-- Icon Divider-->
                                <!-- Portfolio Modal - Image-->
                                <div class="wrapper">
                                    <div class="carousel owl-carousel">
                                        <img src="assets/images/project3/img_1.png" alt="">
                                        <img src="assets/images/project3/img_2.png" alt="">
                                        <img src="assets/images/project3/img_3.png" alt="">
                                        <img src="assets/images/project3/img_4.png" alt="">
                                        <img src="assets/images/project3/img_5.png" alt="">
                                        <img src="assets/images/project3/img_6.png" alt="">
                                    </div>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Merupakan sebuah sistem yang berfungsi untuk mengatur penjadwalan produksi dan juga menghubungkan flow perusahaan dari hulu ke hilir di bangun menggunakan HTML, BootStrap, PHP dan MySQL sebagai databasenya. terdapat 5 akses yaitu admin, marketing, ppic, mechanical, purchasing dan warehouse</p>
                                <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close
                                </a>
                                &nbsp;
                                <a class="btn btn-md btn-primary " href="https://potensi.arisumardi.my.id" target="_blank">
                                    <i class="fas fa-play fa-fw"></i>
                                    Live Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade bg-color" id="toko-online" tabindex="-1" aria-labelledby="primus" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-lg-down">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- Portfolio Modal - Title-->
                                <h5 class="text-secondary text-uppercase mb-3">
                                    Supply Chain Management Primus Teknik
                                </h5>
                                <!-- Icon Divider-->
                                <!-- Portfolio Modal - Image-->
                                <div class="wrapper">
                                    <div class="carousel owl-carousel">
                                        <img src="assets/images/project4/img_1.png" alt="">
                                        <img src="assets/images/project4/img_2.png" alt="">
                                        <img src="assets/images/project4/img_3.png" alt="">
                                        <img src="assets/images/project4/img_4.png" alt="">
                                        <img src="assets/images/project4/img_5.png" alt="">
                                        <img src="assets/images/project4/img_6.png" alt="">
                                    </div>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Sebuah toko online yang dibagi 2 akses user dan admin, user bisa tanpa login untuk melihat barang yang dijual tapi perlu login untuk melakukan order barang dan pesanan user akan masuk ke admin jika sudah mengisis data alamat dan melakukan check out, di bangun menggunakan Codegiter 4 dan Mysql</p>
                                <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close
                                </a>
                                &nbsp;
                                <a class="btn btn-md btn-primary " href="https://potensi.arisumardi.my.id" target="_blank">
                                    <i class="fas fa-play fa-fw"></i>
                                    Live Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/script.js" charset="utf-8"></script>

</body>

</html>