<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Homtech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <script src="https://cdn.cinetpay.com/seamless/main.js"></script>

    <script>
        function checkout() {
            CinetPay.setConfig({
                apikey: '1699058657673644f810eab8.63504493', //   YOUR APIKEY
                site_id: '5883081', //YOUR_SITE_ID
                notify_url: 'http://localhost/homtech-master/homtech-master/checkout.php?p=2700',
                mode: 'PRODUCTION'
            });
            CinetPay.getCheckout({
                transaction_id: Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
                amount: 27000,
                currency: 'XAF',
                channels: 'ALL',
                description: 'Test de paiement',
                //Fournir ces variables pour le paiements par carte bancaire
                customer_name: "Joe", //Le nom du client
                customer_surname: "Down", //Le prenom du client
                customer_email: "down@test.com", //l'email du client
                customer_phone_number: "679561615", //l'email du client
                customer_address: "BP 0024", //addresse du client
                customer_city: "Antananarivo", // La ville du client
                customer_country: "CM", // le code ISO du pays
                customer_state: "CM", // le code ISO l'état
                customer_zip_code: "06510", // code postal

            });
            CinetPay.waitResponse(function(data) {
                if (data.status == "REFUSED") {
                    if (alert("Votre paiement a échoué")) {
                        window.location.reload();
                    }
                } else if (data.status == "ACCEPTED") {
                    if (alert("Votre paiement a été effectué avec succès")) {
                        window.location.reload();
                    }
                }
            });
            CinetPay.onError(function(data) {
                console.log(data);
            });
        }

        function checkouts() {
            CinetPay.setConfig({
                apikey: '1699058657673644f810eab8.63504493', //   YOUR APIKEY
                site_id: '5883081', //YOUR_SITE_ID
                notify_url: 'http://localhost/homtech-master/homtech-master/checkout.php?p=2700',
                mode: 'PRODUCTION'
            });
            CinetPay.getCheckout({
                transaction_id: Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
                amount: 140000,
                currency: 'XAF',
                channels: 'ALL',
                description: 'Test de paiement',
                //Fournir ces variables pour le paiements par carte bancaire
                customer_name: "Joe", //Le nom du client
                customer_surname: "Down", //Le prenom du client
                customer_email: "down@test.com", //l'email du client
                customer_phone_number: "679561615", //l'email du client
                customer_address: "BP 0024", //addresse du client
                customer_city: "Antananarivo", // La ville du client
                customer_country: "CM", // le code ISO du pays
                customer_state: "CM", // le code ISO l'état
                customer_zip_code: "06510", // code postal

            });
            CinetPay.waitResponse(function(data) {
                if (data.status == "REFUSED") {
                    if (alert("Votre paiement a échoué")) {
                        window.location.reload();
                    }
                } else if (data.status == "ACCEPTED") {
                    if (alert("Votre paiement a été effectué avec succès")) {
                        window.location.reload();
                    }
                }
            });
            CinetPay.onError(function(data) {
                console.log(data);
            });
        }

        function checkoutt() {
            CinetPay.setConfig({
                apikey: '1699058657673644f810eab8.63504493', //   YOUR APIKEY
                site_id: '5883081', //YOUR_SITE_ID
                notify_url: 'http://localhost/homtech-master/homtech-master/checkout.php?p=2700',
                mode: 'PRODUCTION'
            });
            CinetPay.getCheckout({
                transaction_id: Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
                amount: 40000,
                currency: 'XAF',
                channels: 'ALL',
                description: 'Test de paiement',
                //Fournir ces variables pour le paiements par carte bancaire
                customer_name: "Joe", //Le nom du client
                customer_surname: "Down", //Le prenom du client
                customer_email: "down@test.com", //l'email du client
                customer_phone_number: "679561615", //l'email du client
                customer_address: "BP 0024", //addresse du client
                customer_city: "Antananarivo", // La ville du client
                customer_country: "CM", // le code ISO du pays
                customer_state: "CM", // le code ISO l'état
                customer_zip_code: "06510", // code postal

            });
            CinetPay.waitResponse(function(data) {
                if (data.status == "REFUSED") {
                    if (alert("Votre paiement a échoué")) {
                        window.location.reload();
                    }
                } else if (data.status == "ACCEPTED") {
                    if (alert("Votre paiement a été effectué avec succès")) {
                        window.location.reload();
                    }
                }
            });
            CinetPay.onError(function(data) {
                console.log(data);
            });
        }
    </script>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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

    <?php
    if (isset($_SESSION['email_sent']) && $_SESSION['email_sent'] === true) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Inscription réussie',
            text: 'Votre inscription a bien été envoyée.',
            showConfirmButton: false,
            timer: 1500
        });
    </script>";
        unset($_SESSION['email_sent']); // Supprimer la variable de session après l'affichage
    }
    ?>

    <?php
    if (isset($_SESSION['contact_sent']) && $_SESSION['contact_sent'] === true) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Message envoyé',
            text: 'Votre message a bien été envoyé.',
            showConfirmButton: false,
            timer: 1500
        });
    </script>";
        unset($_SESSION['contact_sent']); // Supprimer la variable de session après l'affichage
    }
    ?>


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

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/banner-1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                            <a href="blog.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Intership</a>
                            <a href="contact.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="img/banner-2.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                            <a href="blog.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Intership</a>
                            <a href="contact.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <!-- <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Last students for Intership</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">100</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">5</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">The Best IT Solution With 3 Years of Experiences</h1>
                    </div>
                    <p class="mb-4">At HomTech, we specialize in delivering cutting-edge technology solutions to help businesses thrive in a digital world. Our team is dedicated to transforming ideas into powerful, scalable digital products that drive growth, efficiency, and competitive advantage. Whether you're looking for robust software development, IT consulting, or secure infrastructure solutions, HomTech has the expertise to meet your unique needs.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call for your quote</h5>
                            <h4 class="text-primary mb-0">+237 6 93 31 44 34

                            </h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/three.png" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">We Are Here to Accelerate Your Digital Transformation</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Leading Technology Solutions</h4>
                            <p class="mb-0">Our solutions are designed with the latest innovations in mind to keep your business ahead of the competition.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Recognized Excellence</h4>
                            <p class="mb-0">HomTech has received numerous awards for our excellence in IT services and customer satisfaction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Skilled IT Professionals</h4>
                            <p class="mb-0">Our team of experts brings extensive experience in software, cybersecurity, and IT consulting to deliver outstanding results.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Client Support</h4>
                            <p class="mb-0">We offer round-the-clock support to ensure your business stays up and running smoothly at all times.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Start -->


    <!-- Pricing Plan Start -->
    <div class="container-xxl py-5" id="pricing">
        <div class="container py-5 px-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">Pricing Plan</h5>
                <h1 class="mb-5">Choose Your Plan</h1>
            </div>
            <div class="tab-class text-center pricing wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center bg-primary-gradient rounded-pill mb-5">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="pill" href="#tab-1">Monthly</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="pill" href="#tab-2">Yearly</button>
                    </li>
                </ul>
                <div class="tab-content text-start">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="bg-light rounded">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">Moins HIGH</h4>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top" style="font-size: 22px; line-height: 45px;">FCFA</small>27 000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/3 mois</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>Publicités Facebook ou Instagram</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Touchés plus de 5000 personnes</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Création de visuel 1</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Reciblage</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Rapport d’activités automatique</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Validité de la publicité 04 Jours</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Accompagnement 2H par jour</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <a onclick="checkout()" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Contactez nous sur whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="bg-light rounded">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">HIGH</h4>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top" style="font-size: 22px; line-height: 45px;">FCFA</small>40 000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/3 mois</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>Publicités Facebook ou Instagram</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Touchés plus de 10 000 personnes</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Création de visuel 2</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Reciblage</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Rapport d’activités automatique</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Validité de la publicité 07 Jours</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Accompagnement 3H par jour</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <a onclick="checkoutt()" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Contactez nous sur whatsapp</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-light rounded border">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">Trop HIGH</h4>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top" style="font-size: 22px; line-height: 45px;">FCFA</small>140 000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/3 mois</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>Publicités : FB, Instagram, LinkedIn.</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Gestion de la communauté</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Stratégie digitale</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Veille concurrentielle</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Elaboration d’un calendrier éditorial</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <!-- <div class="d-flex justify-content-between mb-2"><span>Animation des pages sociale</span><i class="fa fa-check text-primary-gradient pt-1"></i></div> -->
                                        <!-- <div class="d-flex justify-content-between mb-2"><span>Elaboration d’un calendrier éditorial</span><i class="fa fa-check text-primary-gradient pt-1"></i></div> -->
                                        <!-- <div class="d-flex justify-content-between mb-2"><span>Animation des pages sociale</span><i class="fa fa-check text-primary-gradient pt-1"></i></div> -->
                                        <div class="d-flex justify-content-between mb-2"><span>Photos Corporate</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Sponsorisation des posts </span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <!-- <div class="d-flex justify-content-between mb-2"><span>Création des pages sociales</span><i class="fa fa-check text-primary-gradient pt-1"></i></div> -->
                                        <!-- <div class="d-flex justify-content-between mb-2"><span>Offres disponibles à partir d’une souscription de 03 mois</span><i class="fa fa-check text-primary-gradient pt-1"></i></div> -->
                                        <a onclick="checkouts()" class="btn btn-secondary-gradient rounded-pill py-2 px-4 mt-4">Contactez nous sur whatsapp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade p-0">
                    <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="bg-light rounded">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">Moins HIGH</h4>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top" style="font-size: 22px; line-height: 45px;">FCFA</small>27 000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/3 mois</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>Publicités Facebook ou Instagram</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Touchés plus de 5000 personnes</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Création de visuel 1</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Reciblage</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Rapport d’activités automatique</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Validité de la publicité 04 Jours</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Accompagnement 2H par jour</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <a onclick="checkout()" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Contactez nous sur whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="bg-light rounded">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">HIGH</h4>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top" style="font-size: 22px; line-height: 45px;">FCFA</small>40 000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/3 mois</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>Publicités Facebook ou Instagram</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Touchés plus de 10 000 personnes</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Création de visuel 2</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Reciblage</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Rapport d’activités automatique</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Validité de la publicité 07 Jours</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Accompagnement 3H par jour</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <a onclick="checkoutt()" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Contactez nous sur whatsapp</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-light rounded border">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">Trop HIGH</h4>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top" style="font-size: 22px; line-height: 45px;">FCFA</small>140 000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/3 mois</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>Publicités : FB, Instagram, LinkedIn.</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Gestion de la communauté</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Stratégie digitale</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Veille concurrentielle</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Elaboration d’un calendrier éditorial</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <!-- <div class="d-flex justify-content-between mb-2"><span>Animation des pages sociale</span><i class="fa fa-check text-primary-gradient pt-1"></i></div> -->
                                        <!-- <div class="d-flex justify-content-between mb-2"><span>Elaboration d’un calendrier éditorial</span><i class="fa fa-check text-primary-gradient pt-1"></i></div> -->
                                        <!-- <div class="d-flex justify-content-between mb-2"><span>Animation des pages sociale</span><i class="fa fa-check text-primary-gradient pt-1"></i></div> -->
                                        <div class="d-flex justify-content-between mb-2"><span>Photos Corporate</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Sponsorisation des posts </span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <!-- <div class="d-flex justify-content-between mb-2"><span>Création des pages sociales</span><i class="fa fa-check text-primary-gradient pt-1"></i></div> -->
                                        <!-- <div class="d-flex justify-content-between mb-2"><span>Offres disponibles à partir d’une souscription de 03 mois</span><i class="fa fa-check text-primary-gradient pt-1"></i></div> -->
                                        <a onclick="checkouts()" class="btn btn-secondary-gradient rounded-pill py-2 px-4 mt-4">Contactez nous sur whatsapp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Looking for Customized IT Solutions? Get in Touch with Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24/7 Technical Support</h5>
                        </div>
                    </div>
                    <p class="mb-4">At HomTech, we provide tailored IT solutions designed to enhance your business processes, improve cybersecurity, and ensure seamless technology integration. Our team of experts is ready to work closely with you to develop solutions that match your specific needs, whether you’re a startup or a large corporation.</p>
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
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Custom Software Development</option>
                                        <option value="2">Cybersecurity Solutions</option>
                                        <option value="3">Cloud Infrastructure</option>
                                        <option value="4">IT Consulting</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote End -->

    <!-- Service Start -->
    <div class="container-fluid project py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our service</h5>
                <h1>Our Recently Completed Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="img/code.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text">Software development</h4>
                                    <p class="m-0 text-white">development </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="img/project-2.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text">Professional IT Training </h4>
                                    <p class="m-0 text-white">IT training</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="img/camera.jpeg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text">Photography and videography</h4>
                                    <p class="m-0 text-white">photography</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="img/branding.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text">Logo and personal branding</h4>
                                    <p class="m-0 text-white">Branding</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="img/datascience.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text">Data sciences / Analysis </h4>
                                    <p class="m-0 text-white">Data</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="img/design.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text">Graphic and UI/UX design </h4>
                                    <p class="m-0 text-white">Graphic</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->


    <!-- Latest Projects-->
    <section class="section section-sm section-fluid bg-default text-center" id="projects">
        <div class="container">
            <h2 class="wow fadeInLeft">Latest Projects</h2>
            <p class="quote-jean wow fadeInRight" data-wow-delay=".1s">In our portfolio, you can browse the latest products developed for our clients for different corporate purposes. Our qualified team of interface designers and software developers is always ready to create something unique for you.</p>
            <div class="isotope-filters isotope-filters-horizontal">
                <button class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" data-custom-toggle="#isotope-3" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true"><span class="icon fa fa-caret-down"></span>Filter</button>
                <ul class="isotope-filters-list" id="isotope-3">
                    <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">All</a></li>
                    <li><a href="#" data-isotope-filter="Type 1" data-isotope-group="gallery">mobile Apps</a></li>
                    <li><a href="#" data-isotope-filter="Type 2" data-isotope-group="gallery">Custom Software</a></li>
                    <li><a href="#" data-isotope-filter="Type 3" data-isotope-group="gallery">QA & Testing</a></li>
                    <li><a href="#" data-isotope-filter="Type 4" data-isotope-group="gallery">UX and Design</a></li>
                </ul>
            </div>
            <div class="row row-30 isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 4">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-1-420x350.jpg" alt="" width="420" height="350" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-1-420x350.jpg" alt="" width="420" height="350" /></a>
                                <h5 class="thumbnail-classic-title"><a href="#">FinStep</a></h5>
                            </div>
                            <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 1" data-wow-delay=".1s">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-2-420x350.jpg" alt="" width="420" height="350" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-2-420x350.jpg" alt="" width="420" height="350" /></a>
                                <h5 class="thumbnail-classic-title"><a href="#">Mobile Finance</a></h5>
                            </div>
                            <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 2" data-wow-delay=".2s">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-3-420x350.jpg" alt="" width="420" height="350" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-3-420x350.jpg" alt="" width="420" height="350" /></a>
                                <h5 class="thumbnail-classic-title"><a href="#">Q-Manage</a></h5>
                            </div>
                            <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 3" data-wow-delay=".3s">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-4-420x350.jpg" alt="" width="420" height="350" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-4-420x350.jpg" alt="" width="420" height="350" /></a>
                                <h5 class="thumbnail-classic-title"><a href="#">WeatherCast</a></h5>
                            </div>
                            <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-5-420x350.jpg" alt="" width="420" height="350" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-5-420x350.jpg" alt="" width="420" height="350" /></a>
                                <h5 class="thumbnail-classic-title"><a href="#">Home Calendar</a></h5>
                            </div>
                            <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 1" data-wow-delay=".1s">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-6-420x350.jpg" alt="" width="420" height="350" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-6-420x350.jpg" alt="" width="420" height="350" /></a>
                                <h5 class="thumbnail-classic-title"><a href="#">MPlanner</a></h5>
                            </div>
                            <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 2" data-wow-delay=".2s">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-7-420x350.jpg" alt="" width="420" height="350" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-7-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-7-420x350.jpg" alt="" width="420" height="350" /></a>
                                <h5 class="thumbnail-classic-title"><a href="#">Alice Messenger</a></h5>
                            </div>
                            <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3" data-wow-delay=".3s">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-8-420x350.jpg" alt="" width="420" height="350" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-8-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-8-420x350.jpg" alt="" width="420" height="350" /></a>
                                <h5 class="thumbnail-classic-title"><a href="#">WiseMoney</a></h5>
                            </div>
                            <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>




    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Team</h4>
                <h1 class="display-5 mb-4">Meet Our Advisers</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">Ing Nzima Loic</h4>
                            <p class="mb-0">C E O</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">Ing Nzima Loic</h4>
                            <p class="mb-0">COORDINATOR</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">Ing Nzima Loic</h4>
                            <p class="mb-0">C T O</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">Ing Nzima Loic</h4>
                            <p class="mb-0">G D</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Years of experience-->
    <section class="section section-sm bg-default">
        <div class="container">
            <div class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">
                <div class="col-md-6 col-lg-5 col-xl-4 text-center"><a class="text-img" href="#">
                        <div id="particles-js"></div><span class="counter">03</span>
                    </a></div>
                <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="text-width-extra-small offset-top-lg-24 wow fadeInUp">
                        <h3 class="title-decoration-lines-left">Years of Experience</h3>
                        <p class="text-gray-500">RatherApp is a team of highly experienced signers and developers creating unique software for you.</p><a class="button button-secondary button-pipaluk" href="#">Get in touch</a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- FAQs Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Popular FAQs</div>
                <h1 class="mb-4">Frequently Asked Questions</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How to build a website?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long will it take to get a new website?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you only create HTML websites?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Will my website be mobile-friendly?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Will you maintain my site for me?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    I’m on a strict budget. Do you have any low cost options?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Will you maintain my site for me?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    I’m on a strict budget. Do you have any low cost options?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit do duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->

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
                    <small class="text-white-50">Diam sed sed dolor stet amet eirmod</small>
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
</body>

</html>