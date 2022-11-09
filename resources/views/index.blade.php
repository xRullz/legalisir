<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-LEGALISIR | SMKN 1 JENPO </title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vendor CSS Files -->
    <link href="assets/homepage/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/homepage/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/homepage/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/homepage/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/homepage/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/homepage/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/homepage/css/style.css" rel="stylesheet">

</head>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <a href="#">SMKN 1 JENANGAN</a>
            </h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
                    <li><a class="nav-link scrollto" href="#about">ABOUT</a></li>
                    <li><a class="nav-link scrollto" href="#contact">CONTACT</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <!-- ======= Header ======= -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 mt-2" data-aos="fade-up" data-aos-delay="200">
                    <h1>LEGALISIR</h1>
                    <form method="post" action="/find-data">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">NISN</label>
                          <input type="text" class="form-control" name="nisn">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Nama Ibu</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="nama_ibu">
                        </div>
                        <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <button type="submit" class="btn-get-started scrollto">
                                <i class="fas fa-sign-in-alt"></i>&nbsp; Submit
                            </button>
                        </div>
                      </form>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://smkpk.ditpsmk.net/themes/frontend/assets/img/hero.png" style="width: 1000px; height: 480px;" class="img-fluid animated" alt="homePage" style="margin-bottom: -2em;">
                    {{-- <img src="assets/homepage/img/hero-img.png" class="img-fluid animated" alt="homePage" style="margin-bottom: -2em;"> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Hero Section ======= -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#b751c2" fill-opacity="1" d="M0,128L34.3,128C68.6,128,137,128,206,133.3C274.3,139,343,149,411,154.7C480,160,549,160,617,133.3C685.7,107,754,53,823,32C891.4,11,960,21,1029,26.7C1097.1,32,1166,32,1234,26.7C1302.9,21,1371,11,1406,5.3L1440,0L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
    
    <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>About Us</h2>
            </div>
            <div class="row content justify-content-center">
                <div class="col-lg-6">
                    <p>
                        Sebuah situs absensi sederhana dan modern yang sangat membantu kehidupan orang banyak melalui teknologi. Absensi monitoring terkoneksi dengan internet sehingga kemampuan memantau data dilakukan dengan realtime. Keunggulan ini memudahkan kinerja guru dalam memproses data kehadiran serta keterlambatan siswa. Selain itu, sinkronisasi jadi lebih mudah karena tersimpan otomatis dengan sistem cloud.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= About Us Section ======= -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact</h2>
            </div>
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Jl. Niken Gandini No. 98, Setono, Kec. Jenangan, Kab. Ponorogo, Jawa Timur</p>
                    </div>
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p> info@smkn1jenpo.sch.id  </p>
                    </div>
                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>	 (0352) 481236 </p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4176028110783!2d111.49960551415514!3d-7.851287480203326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a1b79ef66259%3A0xd6477895faba646d!2sSMKN%201%20Jenangan%20Ponorogo!5e0!3m2!1sid!2sid!4v1666515226658!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Name :</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Input your name ..." required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Email :</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Input your email ..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject :</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Write subject ..." required>
                    </div>
                    <div class="form-group">
                        <label for="name">Message :</label>
                        <textarea class="form-control" name="message" rows="10" placeholder="Write a message ..." required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit">
                            <i class="fas fa-paper-plane"></i> &nbsp; Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ======= Contact Section ======= -->

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span><a href="https://www.instagram.com/stmjponorogo">SMKN 1 JENPO</a></span></strong>
            </div>
            <div class="credits">
                RPL XI B &nbsp; SMKN 1 JENANGAN
            </div>
        </div>
    </footer>
    <!-- ======= Footer ======= -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/homepage/vendor/aos/aos.js"></script>
    <script src="assets/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/homepage/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/homepage/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/homepage/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/homepage/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/homepage/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/homepage/js/main.js"></script>

</body>
</html>