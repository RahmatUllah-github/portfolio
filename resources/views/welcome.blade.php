<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'Rahmat Portfolio') }}</title>
    <meta content="Fullstack web developer having experience in PHP Laravel Vue Nuxt."
        name="description">
    <meta content="PHP, Laravel, Vuejs, Nuxtjs Web Developer" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="/img/profile-img.jpg" rel="icon">
    <link href="/img/profile-img.jpg" rel="Rahmat">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">Rahmat Ullah</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="https://github.com/RahmatUllah-github" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                    <a href="https://thewordscounter.com/" target="_blank" class="website"><i class="bx bx-link"></i></a>
                    <a href="https://join.skype.com/invite/uCF97W1PaSLi" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="https://www.linkedin.com/in/rahmatul368" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                    </li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Resume</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>Portfolio</span></a></li>
                    {{-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                            <span>Services</span></a></li> --}}
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Contact</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Rahmat Ullah</h1>
            <p><span class="typed"
                    data-typed-items="Fullstack Web-Developer, PHP-Laravel Developer, Vuejs-Nuxt Developer"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>
                        With three years of professional experience, I excel as a full-stack developer proficient in Laravel
                        and Vue.js. My portfolio reflects a history of creating resilient
                        and user-friendly web applications. My unwavering passion and skill set make me an invaluable asset to any team.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="/img/profile-img-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Fullstack Web Developer</h3>
                        <p class="fst-italic">
                            Expert fullstack web developer
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>15th Jan
                                            1997</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <a href="tel:+923469070799" class="text-dark">+92 346 9070799</a>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <a target="_blank" href="https://www.google.com/maps/place/Lahore,+Pakistan" class="text-dark">Lahore, Pakistan</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <a target="_blank" href="https://thewordscounter.com/" class="text-dark">thewordscounter.com</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>26</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <a class="text-dark" href="mailto:rahmatul368@gmail.com">rahmatul368@gmail.com</a>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>BS (Hons)</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            As a dedicated full-stack web developer, my focus lies in Laravel and Vue.js. With a wealth of experience,
                            I craft sophisticated and effective web solutions. I remain current with industry trends and cutting-edge technologies
                            to consistently deliver projects that surpass client expectations. Whether it's the construction of resilient APIs or
                            the creation of intuitive user interfaces, my commitment to excellence is unwavering. I'm open to freelance opportunities
                            and encourage you to reach out via phone or email to discuss your project in detail.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        {{-- <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>
                        Over 5 years of experience in fullstack web development, specializing in Laravel and Vue.js.
                        Successfully completed and delivered 30 web projects, ranging from small-scale websites to
                        complex web applications.
                        Proficient in developing responsive and user-friendly interfaces, ensuring optimal user
                        experiences across different devices.
                    </p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="26437"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Hours Of Support</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hard Workers</strong></p>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>
                        I possess versatility as a web developer, anchoring my expertise in Laravel and Vue.js.
                        My proficiency extends across the backend domain, encompassing database administration
                        and seamless API integration. On the frontend, I specialize in crafting visually engaging
                        and user-friendly interfaces utilizing HTML, CSS, and JavaScript. I demonstrate adeptness with contemporary
                        frameworks and libraries, including Git for streamlined collaboration. My forte lies in creative problem-solving,
                        and I maintain current awareness of emerging technologies to ensure the delivery of state-of-the-art web solutions.
                    </p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">HTML/CSS <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Vuejs <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                            <span class="skill">Nuxtjs <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">PHP <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Laravel <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>
                        This section provides an overview of my educational background and professional experience. Download my resume in pdf
                        <a target="_blank" href="/files/Rahmat-laravel-&-vuejs-onyxtec.pdf">Download</a>
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>Rahmat Ullah</h4>
                            <p class="portfolio-text-width">
                                <em>
                                    Innovative and deadline-driven fullstack web developer with 3 years of experience
                                    designing
                                    and developing web projects from initial concept
                                    to final, polished deliverable.
                                </em>
                            </p>
                            <ul>
                                <li><a target="_blank" href="https://www.google.com/maps/place/Lahore,+Pakistan" class="text-dark">Lahore, Pakistan</a></li>
                                <li><a href="tel:+923469070799" class="text-dark">(0992) 346 9070799</a></li>
                                <li><a class="text-dark" href="mailto:rahmatul368@gmail.com">rahmatul368@gmail.com</a></li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>BS(Hons) in Computer Science</h4>
                            <h5>2016 - 2020</h5>
                            <p><em>Abbottabad University of Science &amp; Technology, Abbottabad, Pakistan</em></p>
                            <p class="portfolio-text-width">
                                I hold a bachelors degree in Computer Science from Abbottabad University of Science &
                                Technology, Abbottabad, Pakistan,
                                which I completed from 2016 to 2020, equipping me with a strong foundation in computer
                                science and technology.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Laravel Developer (Internship)</h4>
                            <h5>Jan 2021 -  Jun 2021</h5>
                            <p><em>EdenSpell Technologies, RWP, Pakistan</em></p>
                        </div>
                        <div class="resume-item">
                            <h4>Fullstack Laravel &amp; Vuejs Developer</h4>
                            <h5>Jul 2021 -  Aug 2022</h5>
                            <p><em>SOFTTNS Trading &amp; services, PES, Pakistan</em></p>
                            <p>Projects I worked on:</p>
                            <ul>
                                <li>
                                    <a target="_blank" class="text-dark" href="https://baladiexpress.com/">Baladi Express</a>
                                </li>
                                {{-- <li>
                                    <a target="_blank" class="text-dark" href="https://www.alakersweet.com/">Alakar Sweet</a>
                                </li> --}}
                                <li>
                                    <a target="_blank" class="text-dark" href="https://galaxy-academy.co/">Galaxy Academy</a>
                                </li>
                            </ul>
                        </div>

                        <div class="resume-item">
                            <h4>Fullstack Laravel &amp; Vuejs Developer</h4>
                            <h5>Aug 2022 -  Present</h5>
                            <p><em>OnyxTec Solutions, LHR, Pakistan</em></p>
                            <p>Projects I worked on:</p>
                            <ul>
                                <li>
                                    <a target="_blank" class="text-dark" href="https://divinitymetals.com/">Divinity Metals</a>
                                </li>
                                <li>
                                    <a target="_blank" class="text-dark" href="https://carequorum.com/">Care Quorum</a>
                                </li>
                                <li>
                                    <a target="_blank" class="text-dark" href="https://www.ilrc.org/">ILRC</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>
                        Welcome to my portfolio! As an accomplished fullstack web developer, I've had the privilege of working on a range of
                        web solutions that harmoniously blend functionality, aesthetics, and an exceptional user experience.
                        Whether it's developing interactive web applications or creating responsive websites, I'm dedicated to turning concepts into
                        innovative and impactful web solutions. Take a tour of my portfolio to explore some of these remarkable projects and witness
                        my commitment to excellence in web development.
                    </p>
                </div>

                {{-- <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div> --}}

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/img/portfolio/baladi_express.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/baladi_express.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="https://baladiexpress.com/" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="/img/portfolio/divinity_metals.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/divinity_metals.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="https://divinitymetals.com/" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/img/portfolio/galaxy_academy.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/galaxy_academy.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="https://galaxy-academy.co/" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="/img/portfolio/ilrc.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/ilrc.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="https://www.ilrc.org/" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="/img/portfolio/carequorum.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/carequorum.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="https://carequorum.com/" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/img/portfolio/alakersweet.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/alakersweet.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="https://www.alakersweet.com/" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        {{-- <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>
                        Welcome to my services section! As a fullstack web developer, I provide a wide range of
                        services, including responsive website development,
                        custom web applications, backend development, frontend design, and database management. With
                        expertise in Laravel and Vue.js,
                        I am dedicated to delivering high-quality results that bring your web ideas to life. Let's
                        collaborate and create exceptional
                        digital experiences together.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Frontend Development</a></h4>
                        <p class="description">
                            Crafting engaging and intuitive user interfaces that captivate and delight, while ensuring
                            seamless user experiences and optimal performance.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Backend Development</a></h4>
                        <p class="description">
                            Empowering your web applications with robust and efficient server-side functionality,
                            ensuring secure data management and seamless integration of complex systems.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">API Development</a></h4>
                        <p class="description">
                            Building secure and reliable APIs that prioritize data integrity, authentication, and
                            encryption, ensuring seamless communication and protecting sensitive information from
                            unauthorized access.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">API integration</a></h4>
                        <p class="description">
                            Enhancing web applications with seamless integration of third-party APIs, expanding
                            functionality and enabling smooth data exchange for an enhanced user experience.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">3rd Party API services</a></h4>
                        <p class="description">
                            Enhancing your web applications with seamless integration of external APIs, expanding
                            functionality and enabling efficient data exchange for an enhanced user experience.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Ecommerce Solutions</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                            tempore, cum soluta nobis est eligendi</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="600">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Google Analytics</a></h4>
                        <p class="description">
                            Maximizing website insights with seamless integration of Google Analytics, enabling
                            data-driven decision-making for enhanced performance and online presence.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="700">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">SEO</a></h4>
                        <p class="description">
                            Boosting online visibility and driving valuable traffic through effective SEO strategies,
                            maximizing website rankings and attracting organic visitors for increased conversions.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="800">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Responsive Designs</a></h4>
                        <p class="description">
                            Crafting captivating websites that adapt flawlessly to any device, delivering exceptional
                            user experiences and seamless navigation on all screens.
                        </p>
                    </div>
                </div>

            </div>
        </section> --}}
        <!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        {{-- <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>
                        Don't just take my word for it. Here's what my clients have to say about working with me:
                    </p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Working with Rahmat has been a pleasure. Their expertise in web development and
                                    attention to detail exceeded our expectations.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>CEO &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Rahmat is a skilled and dedicated web developer. They consistently deliver top-notch
                                    solutions on time and within budget. Highly recommended.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Rahmat's professionalism and a deep understanding of our needs. Their exceptional
                                    communication and technical expertise made the process efficient.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Exceptional web development skills with a keen eye for design. Rahmat surpassed our
                                    expectations with a stunning website.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Collaborating with Rahmat was a game-changer. Their expertise and attention to
                                    detail transformed our online presence.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section> --}}
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>
                        If you're considering your web development requirements, don't hesitate to get in touch by
                        using the contact form below. I'm excited to connect with you and explore how I can help you accomplish your objectives.
                    </p>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>
                                    <a target="_blank" href="https://www.google.com/maps/place/Lahore,+Pakistan" class="text-secondary">Lahore, Pakistan</a>
                                </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>
                                    <a href="mailto:rahmatul368@gmail.com" class="text-secondary">rahmatul368@gmail.com</a>
                                </p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>
                                    <a href="tel:+923469070799" class="text-secondary">+92 346 9070799</a>
                                </p>
                            </div>

                            <div style="width: 100%"><iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=Canal%20Colony,%20residential,%20Lahore,%20Pakistan+(Rahmat%20Ullah)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">hiking gps</a></iframe></div>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="/api/contact-us" method="post" role="form" id="contact-us-form"
                            class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading d-none">Loading</div>
                                <div class="error-message d-none">An error occured please try again</div>
                                <div class="sent-message d-none">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container text-secondary">
            <div class="copyright">
                &copy; Copyright <strong><span>Rahmat Portfolio</span></strong>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/vendor/aos/aos.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/typed.js/typed.min.js"></script>
    <script src="/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#contact-us-form').submit(function(e) {
                e.preventDefault(); // Prevent form submission

                var form = $(this);
                var url = form.attr('action');
                var method = form.attr('method');
                var data = form.serialize(); // Serialize form data
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                // Send AJAX request
                $.ajax({
                    url: url,
                    type: method,
                    data: data,
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken); // Set CSRF token in headers
                        form.find('.loading').removeClass('d-none'); // Show loading message
                    },
                    success: function(response) {
                        // Hide loading message and show success message
                        form.find('.loading').addClass('d-none');
                        form.find('.sent-message').removeClass('d-none');
                        form[0].reset(); // Reset the form
                    },
                    error: function() {
                        // Hide loading message and show error message
                        form.find('.loading').addClass('d-none');
                        form.find('.error-message').removeClass('d-none');
                    }
                });
            });
        });
    </script>
</body>
</html>
