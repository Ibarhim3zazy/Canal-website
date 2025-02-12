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
        <h1>Canal Engineering<br> Services Co</h1>
        <div>
            <p>
            One of the leading telecom companies in the middle east <br>
            specialized in the design, turnkey construction, and
            maintenance of wireless communication sites and core
            networks, Building Automation Systems (BAS), Industrial
            Automation, and IT infrastructure.
          </p>

            <div class="container d-flex justify-content-start align-items-center py-4">
                <a href="./contact.php" class="btn btn-custom btn-register me-3">
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
                <div class="col-lg-6">
                    <div class="image-stack">
                        <div class="img-container">
                          <img src="assets/images/chicago_night_2.jpg.webp" alt="City Network" class="image-city">
                        </div>
                        
                        <img src="assets/images/gettyimages_1080277602.jpg.webp" alt="Team Meeting" class="image-people">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="network-heading">Company Facts</h2>
                    <p class="network-text">
                        Our mission to utilize the management long experience and staff skills in the field of
                        GSM and automation to furnish the best engineering services that meets and
                        exceeds client’s expectations, KPIs and standards.
                    </p>
                    <a href="./about.php" class="cta-link">
                        See more about us
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- vertical slider section -->
<div class="vertical-slider">
  <div class="container">
    <h1 class="my-5">Take the Next Step With Canal</h1>
  </div>
  <div class="slider-controls">
      <div class="nav-group">
          <button class="nav-button prev">↑</button>
          <span class="slide-number">1/7</span>
      </div>
      <div class="slide-dots">
          <div class="dot active"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <!-- <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div> -->
      </div>
      <button class="nav-button next">↓</button>
  </div>

  <div class="slides-container">
      <!-- Slide 1 -->
      <div class="slide">
          <div class="slide-content" style="--bg-image: url('https://via.placeholder.com/1920x1080/111111')">
              <div class="content-wrapper">
                  <div class="slide-text">
                      <h2>Our values</h2>
                      <p>Customer Focus – staying one step ahead of the client’s demands
                        in unpredictable environment.</p>
                      <!-- <button class="btn btn-outline-light">See How We Support MNOs →</button> -->
                  </div>
                  <div class="img-container-slider">
                    <img src="assets/images/energy_providers.jpg.webp" alt="Mobile Networks" class="slide-image">
                  </div>
              </div>
          </div>
      </div>

      <!-- Slide 2 -->
      <div class="slide">
          <div class="slide-content" style="--bg-image: url('https://via.placeholder.com/1920x1080/222222')">
              <div class="content-wrapper">
                  <div class="slide-text">
                      <h2>Our values</h2>
                      <p>Commitment & Accountability – We set high performance
                        expectations and hold ourselves accountable for the quality of our
                        work and the results we achieve.</p>
                      <!-- <button class="btn btn-outline-light">Learn More →</button> -->
                  </div>
                  <div class="img-container-slider">
                    <img src="./assets/images/pexels-troy-squillaci-2525871.jpg" alt="Digital Infrastructure" class="slide-image">
                  </div>
              </div>
          </div>
      </div>

      <!-- Slide 3 -->
      <div class="slide">
          <div class="slide-content" style="--bg-image: url('https://via.placeholder.com/1920x1080/333333')">
              <div class="content-wrapper">
                  <div class="slide-text">
                      <h2>Our values</h2>
                      <p>Adherence to engineering codes of ethics and professional
                        conducts.</p>
                      <!-- <button class="btn btn-outline-light">Discover Solutions →</button> -->
                  </div>
                  <div class="img-container-slider">
                      <img src="./assets/images/palm.jpg" alt="Smart Solutions" class="slide-image">
                  </div>
              </div>
          </div>
      </div>
      <!-- Slide 4 -->
      <div class="slide">
          <div class="slide-content" style="--bg-image: url('https://via.placeholder.com/1920x1080/333333')">
              <div class="content-wrapper">
                  <div class="slide-text">
                      <h2>Our values</h2>
                      <p>Delivery on what is Promised ,as promised.</p>
                      <!-- <button class="btn btn-outline-light">Discover Solutions →</button> -->
                  </div>
                  <div class="img-container-slider">
                      <img src="./assets/images/image_194.png" alt="Smart Solutions" class="slide-image">
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Experience Section -->
<section class="experience-section">
    <div class="sticky-parent"></div>
        <div class="container sticky-container">
            <div class="row">
                <h1 class="">Our Experience</h1>
            </div>
            <div class="row">
                <!-- Experience Item 1 -->
                <div class="col-md-3 col-6 experience-box">
                    <h2><span class="counter" data-target="4834">4834</span></h2>
                    <p>Finished Project</p>
                </div>

                <!-- Experience Item 2 -->
                <div class="col-md-3 col-6 experience-box">
                    <h2 class="conter-con"><span class="counter" data-target="24">24</span>+</h2>
                    <p>Years in Business</p>
                </div>

                <!-- Experience Item 3 -->
                <div class="col-md-3 col-6 experience-box">
                    <h2><span class="counter" data-target="280">280</span></h2>
                    <p>Engineer & Techincan</p>
                </div>

                <!-- Experience Item 4 -->
                <div class="col-md-3 col-6 experience-box">
                    <h2><span class="counter" data-target="24">24</span></h2>
                    <p>Happy Clients</p>
                </div>
            </div>
        </div>
    
</section>

<!-- Solution section -->
 <div class="solutions-con py-5">
  <div class="container">
    <!-- Previous header section remains the same -->
    <div class="solutions-header">
        <h1>Our Services</h1>
    </div>
    
    <p class="solutions-description">
        CANAL Telecom Engineering, with over 24 years of proven success records has become a
        leader in the telecommunications technical services sector in the Middle East region, Our
        services include project management, system integration, system design, installation,
        commissioning and maintenance, and acceptance on turnkey basis for GSM, 5G ,fiber, MW
        links, Power system, steel fabrication in addition to automation and control systems.
    </p>

    <!-- <a href="#" class="view-all-link">
        View All Our Infrastructure Solutions and Services 
        <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
    </a> -->

    <div class="solutions-grid">
        <div class="row g-0">
            <!-- Towers and Rooftops -->
            <div class="col-12 col-lg-4">
                <div class="solution-card">
                    <div>
                        <svg class="solution-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 22h20L12 2z M12 22V6"/>
                        </svg>
                        <h3 class="solution-title">Civil Work & SAQ</h3>
                        <p class="solution-description">Canal expert Civil team rolls out big projects
                            related to new Tower installations and Tower
                            strengthens for all types. Along with supplying
                            all required materials in Civil work.</p>
                    </div>
                    <a href="civil-work-service.php" class="read-more-link">
                        Read More About Civil Work & SAQ
                        <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Other cards follow the same pattern -->
            <!-- Services -->
            <div class="col-12 col-lg-4">
                <div class="solution-card">
                    <div>
                        <svg class="solution-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 3.269C14 2.568 13.432 2 12.731 2H11.27C10.568 2 10 2.568 10 3.269v0c0 .578-.396 1.074-.935 1.286-.085.034-.17.07-.253.106-.539.233-1.186.114-1.615-.315v0c-.496-.496-1.3-.496-1.796 0L4.286 5.461c-.496.496-.496 1.3 0 1.796v0c.429.429.548 1.076.315 1.615-.036.083-.072.168-.106.253-.212.539-.708.935-1.286.935v0C2.568 10 2 10.568 2 11.269v1.462C2 13.432 2.568 14 3.269 14v0c.578 0 1.074.396 1.286.935.034.085.07.17.106.253.233.539.114 1.186-.315 1.615v0c-.496.496-.496 1.3 0 1.796l1.115 1.115c.496.496 1.3.496 1.796 0v0c.429-.429 1.076-.548 1.615-.315.083.036.168.072.253.106.539.212.935.708.935 1.286v0c0 .701.568 1.269 1.269 1.269h1.462c.701 0 1.269-.568 1.269-1.269v0c0-.578.396-1.074.935-1.286.085-.034.17-.07.253-.106.539-.233 1.186-.114 1.615.315v0c.496.496 1.3.496 1.796 0l1.115-1.115c.496-.496.496-1.3 0-1.796v0c-.429-.429-.548-1.076-.315-1.615.036-.083.072-.168.106-.253.212-.539.708-.935 1.286-.935v0c.701 0 1.269-.568 1.269-1.269V11.27c0-.701-.568-1.269-1.269-1.269v0c-.578 0-1.074-.396-1.286-.935-.034-.085-.07-.17-.106-.253-.233-.539-.114-1.186.315-1.615v0c.496-.496.496-1.3 0-1.796l-1.115-1.115c-.496-.496-1.3-.496-1.796 0v0c-.429.429-1.076.548-1.615.315-.083-.036-.168-.072-.253-.106C14.396 4.343 14 3.847 14 3.269v0z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        <h3 class="solution-title">Power Work</h3>
                        <p class="solution-description">Canal Power team is performing all power
                            system Installation related to Mobile networks
                            sites.</p>
                    </div>
                    <a href="./acquisition-service.php" class="read-more-link">
                        Read More About Power Work
                        <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Services -->
            <div class="col-12 col-lg-4">
                <div class="solution-card">
                    <div>
                        <svg class="solution-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 3.269C14 2.568 13.432 2 12.731 2H11.27C10.568 2 10 2.568 10 3.269v0c0 .578-.396 1.074-.935 1.286-.085.034-.17.07-.253.106-.539.233-1.186.114-1.615-.315v0c-.496-.496-1.3-.496-1.796 0L4.286 5.461c-.496.496-.496 1.3 0 1.796v0c.429.429.548 1.076.315 1.615-.036.083-.072.168-.106.253-.212.539-.708.935-1.286.935v0C2.568 10 2 10.568 2 11.269v1.462C2 13.432 2.568 14 3.269 14v0c.578 0 1.074.396 1.286.935.034.085.07.17.106.253.233.539.114 1.186-.315 1.615v0c-.496.496-.496 1.3 0 1.796l1.115 1.115c.496.496 1.3.496 1.796 0v0c.429-.429 1.076-.548 1.615-.315.083.036.168.072.253.106.539.212.935.708.935 1.286v0c0 .701.568 1.269 1.269 1.269h1.462c.701 0 1.269-.568 1.269-1.269v0c0-.578.396-1.074.935-1.286.085-.034.17-.07.253-.106.539-.233 1.186-.114 1.615.315v0c.496.496 1.3.496 1.796 0l1.115-1.115c.496-.496.496-1.3 0-1.796v0c-.429-.429-.548-1.076-.315-1.615.036-.083.072-.168.106-.253.212-.539.708-.935 1.286-.935v0c.701 0 1.269-.568 1.269-1.269V11.27c0-.701-.568-1.269-1.269-1.269v0c-.578 0-1.074-.396-1.286-.935-.034-.085-.07-.17-.106-.253-.233-.539-.114-1.186.315-1.615v0c.496-.496.496-1.3 0-1.796l-1.115-1.115c-.496-.496-1.3-.496-1.796 0v0c-.429.429-1.076.548-1.615.315-.083-.036-.168-.072-.253-.106C14.396 4.343 14 3.847 14 3.269v0z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        <h3 class="solution-title">Telecom Work</h3>
                        <p class="solution-description">Canal specialized in design, turnkey
                            construction and maintenance of wireless
                            communication sites and core network, Building
                            Automation Systems (BAS), Industrial
                            Automation and IT infrastructure.</p>
                    </div>
                    <a href="telecom-work-service.php" class="read-more-link">
                        Read More About Telecom Work
                        <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Remaining cards follow the same pattern -->
            <!-- Continue with the other 4 cards using the same structure -->
            
        </div>
    </div>
  </div>
</div>

<!-- Connectivity With CoreSite Section -->
<section class="datacenter-section">
  
    <div class="content-wrapper m-5">
        <div class="content-card m-5">
            <h1>Connectivity With CoreSite</h1>
            <p>Building a digital future, American Tower and CoreSite are revolutionizing cloud-to-edge infrastructure.</p>
            <a href="#" class="cta-link">
                See Connectivity With CoreSite
                <svg class="arrow-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 6L19 12L13 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19 12H5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
  </section>

  <section class="py-5 canal-team">
        <div class="container">
            <h2 class="text-center section-title mb-5">Meet Our Team</h2>
            
            <!-- Stats Cards -->
            <div class="row mb-5 g-4">
                <div class="col-md-4">
                    <div class="stats-card p-4 text-center h-100">
                        <div class="stat-number">250+</div>
                        <h3 class="h5">Expert Engineers and Skilled Technicians</h3>
                        <p>At Canal Engineering Services, we take
                        pride in our dedicated team of over 250
                        expert engineers and skilled technicians.
                        Our team members are highly qualified
                        and possess extensive experience in the
                        GSM infrastructure field.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-card p-4 text-center h-100">
                        <i class="fas fa-star mb-3 fa-2x"></i>
                        <h3 class="h5">Emphasizing Expertise</h3>
                        <p>Our engineers are well-versed in the
                        latest industry trends, ensuring that our
                        projects incorporate cutting-edge
                        solutions. The technical prowess of our
                        skilled technicians enables the flawless
                        execution of complex tasks, from
                        structural installations to advanced
                        technology integration.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-card p-4 text-center h-100">
                        <i class="fas fa-certificate mb-3 fa-2x"></i>
                        <h3 class="h5">Qualifications and Certifications</h3>
                        <p>Our team holds relevant qualifications
                        and certifications, demonstrating their
                        competence in delivering quality GSM
                        infrastructure solutions. Continuous
                        training and development programs
                        ensure that our professionals stay
                        updated with industry standards and best
                        practices.</p>
                    </div>
                </div>
            </div>
            
            <!-- Team Members -->
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="team-member shadow-sm">
                        <img src="/assets/images/Canal_Managers/img-Firas-Barakat.png" alt="Firas Barakat">
                        <div class="p-3">
                            <h4 class="h5 mb-1">Firas Barakat</h4>
                            <p class="text-muted mb-2">General Manager</p>
                            <div class="contact-info">
                                <p class="mb-1"><i class="fas fa-phone me-2"></i>+971 50 711 2940</p>
                                <p class="mb-0"><i class="fas fa-envelope me-2"></i>barakat@canal-tel.com</p>
                                <p class="mb-0"><i class="fa-brands fa-linkedin me-2"></i>linkedin.com/in/firas-barakat-33265a36</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member shadow-sm">
                        <img src="/assets/images/Canal_Managers/img-Mohamad-Taha.png" alt="Mohamad Taha">
                        <div class="p-3">
                            <h4 class="h5 mb-1">Mohamad Taha</h4>
                            <p class="text-muted mb-2">HR Manager</p>
                            <div class="contact-info">
                                <p class="mb-1"><i class="fas fa-phone me-2"></i>+971 56 410 3442</p>
                                <p class="mb-0"><i class="fas fa-envelope me-2"></i>mohammad.taha@canal-tel.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member shadow-sm">
                        <img src="/assets/images/Canal_Managers/img-walid-shakir.png" alt="walid shakir">
                        <div class="p-3">
                            <h4 class="h5 mb-1">walid shakir</h4>
                            <p class="text-muted mb-2">Admin Manager</p>
                            <div class="contact-info">
                                <p class="mb-1"><i class="fas fa-phone me-2"></i>+971 56 313 1394</p>
                                <p class="mb-0"><i class="fas fa-envelope me-2"></i>walid.shaker@Canal-tel.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member shadow-sm">
                        <img src="/assets/images/Canal_Managers/img-Moutaz-Ayasra.png" alt="Moutaz Ayasra">
                        <div class="p-3">
                            <h4 class="h5 mb-1">Moutaz Ayasra</h4>
                            <p class="text-muted mb-2">Logistics Manager</p>
                            <div class="contact-info">
                                <p class="mb-1"><i class="fas fa-phone me-2"></i>+971 569 21 3377</p>
                                <p class="mb-0"><i class="fas fa-envelope me-2"></i>Moutaz.ayasra@canal-tel.com</p>
                                <p class="mb-0"><i class="fa-brands fa-linkedin me-2"></i>linkedin.com/in/moutaz-ayasra-82860aa2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member shadow-sm">
                        <img src="/assets/images/Canal_Managers/img-Ahmed-Keshk.png" alt="Ahmed Keshk">
                        <div class="p-3">
                            <h4 class="h5 mb-1">Ahmed Keshk</h4>
                            <p class="text-muted mb-2">Civil Manager</p>
                            <div class="contact-info">
                                <p class="mb-1"><i class="fas fa-phone me-2"></i>+971 56 811 5528</p>
                                <p class="mb-0"><i class="fas fa-envelope me-2"></i>ahmed.keshk@canal-tel.com</p>
                                <p class="mb-0"><i class="fa-brands fa-linkedin me-2"></i>linkedin.com/in/ahmed-keshk-b2472637</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member shadow-sm">
                        <img src="/assets/images/Canal_Managers/img-Sadam-Khatab.png" alt="Sadam Khatab">
                        <div class="p-3">
                            <h4 class="h5 mb-1">Sadam Khatab</h4>
                            <p class="text-muted mb-2">Telecom Manager</p>
                            <div class="contact-info">
                                <p class="mb-1"><i class="fas fa-phone me-2"></i>+971 54 321 0048</p>
                                <p class="mb-0"><i class="fas fa-envelope me-2"></i>sadam.khatab@canal-tel.com</p>
                                <p class="mb-0"><i class="fa-brands fa-linkedin me-2"></i>linkedin.com/in/sadam-khatab-739404174</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member shadow-sm">
                        <img src="/assets/images/Canal_Managers/img-Osama-Abd-alghafar.png" alt="Osama Abd alghafar">
                        <div class="p-3">
                            <h4 class="h5 mb-1">Osama Abd alghafar</h4>
                            <p class="text-muted mb-2">Microwave Manager</p>
                            <div class="contact-info">
                                <p class="mb-1"><i class="fas fa-phone me-2"></i>+971 50 636 2390</p>
                                <input class="mb-0"><i class="fas fa-envelope me-2"></i>osama.abdelgaffar@canal-tel.com</input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Contact Us Section -->
<section class="contact-us-con">
  <div class="container">
      <div class="row">
          <div class="col-md-6 contact-us p-5">
              <h1 class="mb-4">Take the Next Step With Canal</h1>
              <div class="d-flex gap-3">
                  <a href="/contact.php" class="cta-button text-decoration-none">
                      Contact Us <i class="fas fa-arrow-right ms-2"></i>
                  </a>
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
</body>
</html>