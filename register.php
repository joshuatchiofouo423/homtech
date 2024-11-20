<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Homtech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/stylen.css" rel="stylesheet">



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php
    include('topbar.php');
    ?>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <?php
        include('navbar.php');
        ?>


    </div>
    <!-- Navbar & Carousel End -->

    <div class="container-fluid bg-primary py-5 intership" style="margin-bottom: 90px;height:100vh;  background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(../hometechsolution/img/intership.jpg) center center no-repeat !important;
    background-size: cover;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Intership</h1>
            </div>
        </div>
    </div>
    </div>





    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request an Internship</h5>
                        <h1 class="mb-0">Looking to Start Your IT Career with Hands-On Experience? Join Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Mentorship & Support</h5>
                        </div>
                    </div>
                    <p class="mb-4">At HomTech, we believe in fostering the next generation of IT professionals. Our internship program provides a unique opportunity to gain practical experience, improve technical skills, and work with our experienced team on real-world projects. Whether you’re a student or a recent graduate, join us to kickstart your career in the IT industry.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Contact Us for Any Inquiries</h5>
                            <h4 class="text-primary mb-0">+237 6 93 31 44 34</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form id="registrationForm" action="register_email.php" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" id="name">
                                    <div class="error-message" id="nameError"></div>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" id="email">
                                    <div class="error-message" id="emailError"></div>
                                </div>
                                <div class="col-12">
                                    <input type="number" name="phone" class="form-control bg-light border-0" placeholder="Your phone number" style="height: 55px;" id="phone">
                                    <div class="error-message" id="phoneError"></div>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="school" class="form-control bg-light border-0" placeholder="Your school name" style="height: 55px;" id="school">
                                    <div class="error-message" id="schoolError"></div>
                                </div>
                                <div class="col-12">
                                    <select name="speciality" class="form-select bg-light border-0" style="height: 55px;" id="speciality">
                                        <option selected>Select A Speciality</option>
                                        <option value="Custom Software Development">Custom Software Development</option>
                                        <option value="Cybersecurity Solutions">Cybersecurity Solutions</option>
                                        <option value="Cloud Infrastructure">Cloud Infrastructure</option>
                                        <option value="IT Consulting">IT Consulting</option>
                                    </select>
                                    <div class="error-message" id="specialityError"></div>
                                </div>
                                <div class="col-12 position-relative">
                                    <span class="custom-placeholder">CV</span>
                                    <input type="file" name="cv" class="form-control file-input bg-light border-0" id="cv">
                                    <div class="error-message" id="cvError"></div>
                                </div>
                                <div class="col-12 position-relative">
                                    <span class="custom-placeholder">Lettre de motivation</span>
                                    <input type="file" name="cover_letter" class="form-control file-input bg-light border-0" id="cover_letter">
                                    <div class="error-message" id="coverLetterError"></div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark w-100 py-3" id="submitBtn">Subscribe Now</button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote End -->



    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/newsletter.png" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                    <h1 class="text-white mb-4">Let's subscribe the newsletter</h1>
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <?php
    include('footer.php')
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/core.min.js"></script>
    <script src="js/man.js"></script>
    <script src="js/script.js"></script>
    <script src="js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>