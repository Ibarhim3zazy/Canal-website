<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Canal Engineering Services Co</title>
    
    
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
      <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="./assets/css/all.min.css">
      <link rel="stylesheet" href="./assets/css/main.css">
      <link rel="stylesheet" href="./assets/css/gallery.css">
      <link rel="stylesheet" href="./assets/css/styles.css">
        
    </head>
    <body>
      <!-- Main nav bar -->
    <?php include_once './partials/master/header.php' ?>
    
      <!-- hero landing -->
      <div class="container-flued hero-landing">
        <div class="home">
          <video muted loop autoplay>
            <source src="./assets/video/US_Hero_Video.mp4" type="video/mp4">
          </video>
          <div class="home-content container d-flex justify-content-between">
            <h1>Why Canal Engineering<br> Services Co</h1>
            <div>
                <p>
                One of the leading telecom companies in the middle east <br>
                specialized in the design, turnkey construction, and
                maintenance of wireless communication sites and core
                networks, Building Automation Systems (BAS), Industrial
                Automation, and IT infrastructure.
              </p>
    
                <div class="container d-flex justify-content-start align-items-center py-4">
                  <a href="contact.php" class="btn btn-custom btn-register me-3">
                      Contact Us
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M9 18l6-6-6-6"/>
                          </svg>
                      </span>
                  </a>
              </div>
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
                        <h2 class="network-heading">Building a More Connected World</h2>
                        <p class="network-text ps-4">
                            Our mission to utilize the management long experience and staff skills in the field of
                            GSM and automation to furnish the best engineering services that meets and
                            exceeds client’s expectations, KPIs and standards.
                        </p>
                        <a href="#" class="cta-link">
                            Read more about us
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </section>
    
<section class="gallery">
    <div class="buttons">
        <button type="button">All</button>
        <button type="button" data-btn="1">Civil Work</button>
        <button type="button" data-btn="2">Power Work</button>
        <button type="button" data-btn="3">Telecom Work</button>
    </div>
    <div class="images">
        <?php
        $civilFolderPath = './assets/images/Civil-work/';
        $powerFolderPath = './assets/images/power-work/';
        $telecomFolderPath = './assets/images/telecom-work/';

        $civilImages = glob($civilFolderPath . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);

        foreach ($civilImages as $image) {
            echo '<img src="'.$civilFolderPath.'/'.basename($image).'" data-img="1" />';
        }
        
        $powerImages = glob($powerFolderPath . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);

        foreach ($powerImages as $image) {
            echo '<img src="'.$powerFolderPath.'/'.basename($image).'" data-img="2" />';
        }

        $telecomImages = glob($telecomFolderPath . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);

        foreach ($telecomImages as $image) {
            echo '<img src="'.$telecomFolderPath.'/'.basename($image).'" data-img="3" />';
        }
        ?>
   </div>
</section>

<!-- Modal -->
<div class="modal" id="imageModal">
    <span class="close">&times;</span>
    <img class="modal-content" id="modalImage">
    <span class="prev">&#10094;</span>
    <span class="next">&#10095;</span>
</div>

<!-- Contact Us Section -->
<?php include_once './partials/master/contact-us.php' ?>
  
  <!-- Footer -->
<?php include_once './partials/master/footer.php' ?>
  
  <!-- Javascript Files
    ================================================== -->
      <script src="./assets/js/bootstrap.min.js"></script>
      <script src="./assets/js/all.min.js"></script>
    
      <!-- Template custom -->
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/gallery.js"></script>
  </body>
  </html>
  
