<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Canal Website">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Ibrahim Azazy">
  <meta name=generator content="Canal HTML Template v1.0">

<!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

<!-- CSS
================================================== -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/contact.css">
    
</head>
<body>
  
<!-- Main nav bar -->
<?php include_once './partials/master/header.php' ?>

  <!-- hero landing -->
  <div class="container-flued hero-landing">
    <div class="home">
      <video muted loop autoplay>
        <source src="assets/video/US_Hero_Video.mp4" type="video/mp4">
      </video>
      <div class="home-content container d-flex justify-content-between">
        <h1>Contact Us</h1>
        <div>
            <p>
            Whether you're currently working with us and need information or hope to partner with us and want to get started, reach out today—our teams are ready to help. Experience the Canal Engineering Services Co difference.
          </p>

        </div>
      </div>
    </div>
  </div>


  <!-- diagonal-section -->
  <section class="diagonal-section container mb-5">
    <div class="diagonal-bg"></div>
    <div class="red-line"></div>
    
    <div class="content-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <h2 class="network-heading">How Can We Help?</h2>
                    <p class="network-text ps-4">
                    Canal is genuinely excited about the prospect
                    of collaborating in the gsm infrastructure sector.
                    </p>
                    <p class="network-text ps-4">
                    we are ready and eager to embark on this journey
                    together to enhance your network and services. 
                    </p>
                    <p class="network-text ps-4">
                    Please carefully fill out the form below to ensure your inquiry is directed to the appropriate Canal Engineering Services Co team for attention. 
                    </p>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Location Cards -->
<section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- New York Office -->
                <div class="col-md-4">
                    <div class="card location-card h-100">
                        <div class="card-body text-center">
                            <div class="map-container mb-3">
                                <img src="assets/images/tomooh-tower.webp" alt="New York Office Map" class="rounded">
                            </div>
                            <i class="fas fa-building contact-icon"></i>
                            <h3 class="card-title h4">Uited Arab Emirates Office</h3>
                            <p class="arabic-name">المكتب الرئيسي - الإمارات</p>
                            <p class="card-text">Office 3/1308 BLDC#12, Floor 27<br>Tomooh Tower, Marina SQR<br>Reem Island Abu Dhabi</p>
                            <p class="mb-2"><i class="fas fa-phone-alt me-2"></i>+971 507112940</p>
                            <p class="mb-0"><i class="fas fa-envelope me-2"></i>barakat@canal-tel.com</p>
                        </div>
                    </div>
                </div>

                <!-- London Office -->
                <div class="col-md-4">
                    <div class="card location-card h-100">
                        <div class="card-body text-center">
                            <div class="map-container mb-3">
                                <img src="assets/images/Jordan-Amman-view.jpg" alt="London Office Map" class="rounded">
                            </div>
                            <i class="fas fa-building contact-icon"></i>
                            <h3 class="card-title h4">Jordan Office</h3>
                            <p class="arabic-name">مكتب الأردن</p>
                            <p class="card-text">7A Um Assumaq ST<br>Um Assumaq<br> Amman – Jordan</p>
                            <p class="mb-2"><i class="fas fa-phone-alt me-2"></i>+962 79 756 0900</p>
                            <p class="mb-0"><i class="fas fa-envelope me-2"></i>mousa@canal-tel.net</p>
                        </div>
                    </div>
                </div>

                <!-- Singapore Office -->
                <div class="col-md-4">
                    <div class="card location-card h-100">
                        <div class="card-body text-center">
                            <div class="map-container mb-3">
                                <img src="assets/images/6th_October_Bridge.png" alt="Singapore Office Map" class="rounded">
                            </div>
                            <i class="fas fa-building contact-icon"></i>
                            <h3 class="card-title h4">EGYPT Office</h3>
                            <p class="arabic-name">مكتب مصر</p>
                            <p class="card-text">OFFICES 212, 213<br>6 OCTOBER CITY, A1/18<br>CAIRO - EGYPT</p>
                            <p class="mb-2"><i class="fas fa-phone-alt me-2"></i>+20 112 222 1662</p>
                            <p class="mb-0">Fax: </i>+20238352994</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-12">
                    <div class="contact-form">
                        <h2 class="text-start mb-5">We love to hear</h2>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" required></textarea>
                            </div>
                            <div class="text-start mt-5">
                                <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <!-- Footer -->
  <?php include_once './partials/master/footer.php' ?>


<!-- Javascript Files
  ================================================== -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/all.min.js"></script>
  
    <!-- Template custom -->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/contact.js"></script>
</body>
</html>