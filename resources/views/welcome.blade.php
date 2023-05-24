<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'Rahmat Portfolio') }}</title>
    <meta content="Rahmat Full stack laravel and vuejs developer having 5 years of industrial experience."
        name="description">
    <meta content="Laravel and vuejs developer" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

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
                    <a href="#" class="twitter"><i class="bx bxl-github"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-upwork"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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
                    <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                            <span>Services</span></a></li>
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
            <p>I'm <span class="typed"
                    data-typed-items="Fullstack Web Developer, Freelancer, Laravel Vuejs Developer"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>
                        I'm an accomplished full-stack Laravel and Vue.js developer with over 5 years of industrial
                        experience.
                        Proficient in both frontend and backend technologies, this expert has a proven track record of
                        building robust
                        and user-friendly web applications. Their expertise and passion for development make them an
                        invaluable
                        addition to any team.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Fullstack Web Developer</h3>
                        <p class="fst-italic">
                            Expert laravel and vuejs developer
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>15th Jan
                                            1997</span></li>
                                    {{-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>www.example.com</span></li> --}}
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+92 346
                                            9070799</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Lahore,
                                            Pakistan</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    {{-- <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li> --}}
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>Master</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>rahmatul368@gmail.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            I'm a passionate fullstack web developer specializing in Laravel and Vue.js.
                            With a Master's degree and extensive experience, I create elegant and efficient web
                            solutions.
                            I stay up-to-date with the latest industry trends and technologies to deliver exceptional
                            projects
                            that exceed client expectations. Whether it's building robust APIs or designing seamless
                            user interfaces, I'm committed to delivering excellence. Available for freelance
                            opportunities,
                            feel free to contact me via phone or email to discuss your next project!
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
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
                            <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="13" data-purecounter-duration="1"
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
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>
                        With a strong foundation in web development, I possess a diverse range of skills to deliver
                        exceptional results.
                        My expertise lies in Laravel and Vue.js, where I excel in building robust and scalable web
                        applications.
                        I have a solid understanding of backend technologies, including database management and API
                        integration.
                        Additionally, I have a keen eye for frontend development, crafting visually appealing user
                        interfaces
                        and ensuring seamless user experiences. Proficient in HTML, CSS, and JavaScript, I leverage
                        modern frameworks
                        and libraries to create responsive and dynamic websites. I am also experienced in version
                        control systems like Git,
                        which allows for efficient collaboration and code management. Moreover, I have a strong
                        problem-solving aptitude,
                        allowing me to tackle complex challenges and find innovative solutions. With a dedication to
                        staying up-to-date
                        with emerging technologies and industry best practices, I am constantly expanding my skill set
                        to deliver cutting-edge web solutions.
                    </p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
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

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

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

                        <div class="progress">
                            <span class="skill">Vuejs <i class="val">100%</i></span>
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
                        This section provides an overview of my educational background and professional experience.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>Rahmat Ullah</h4>
                            <p>
                                <em>
                                    Innovative and deadline-driven fullstack web developer with 5+ years of experience
                                    designing
                                    and developing web projects from initial concept
                                    to final, polished deliverable.
                                </em>
                            </p>
                            <ul>
                                <li>Lahore, Pakistan</li>
                                <li>(0992) 346 9070799</li>
                                <li>rahmatul368@gmail.com</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Master of Computer Science</h4>
                            <h5>2016 - 2018</h5>
                            <p><em>Abbottabad University of Science &amp; Technology, Abbottabad, Pakistan</em></p>
                            <p>
                                I hold a Master of Computer Science degree from Abbottabad University of Science &
                                Technology, Abbottabad, Pakistan,
                                which I completed from 2014 to 2018, equipping me with a strong foundation in computer
                                science and technology.
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Bachelor of Computer Science</h4>
                            <h5>2012 - 2016</h5>
                            <p><em>Abbottabad University of Science &amp; Technology, Abbottabad, Pakistan</em></p>
                            <p>
                                I also hold a Bachelor of Computer Science degree from Abbottabad University of Science
                                & Technology, Abbottabad, Pakistan,
                                which I obtained from 2012 to 2016, providing me with a solid foundation in computer
                                science principles and practical skills
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Senior fullstack web developer</h4>
                            <h5>2021 - 2023</h5>
                            <p><em>Softtns Trading &amp; services, PES, Pakistan</em></p>
                            <ul>
                                <li>
                                    Led design, development, and implementation of user-friendly web solutions for
                                    Softtns Trading & services,
                                    enhancing brand presence and customer engagement.
                                </li>
                                <li>
                                    Managed and delegated tasks to a team of 7 developers, offering guidance and support
                                    throughout the project lifecycle.
                                </li>
                                <li>
                                    Ensured high-quality projects through thorough assessments, maintaining coding
                                    standards,
                                    and following best practices for optimal performance and user experience.
                                </li>
                                <li>
                                    Oversaw production project budgets, ranging from $2,000 to $25,000, optimizing
                                    resources for cost-effective outcomes.
                                </li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Fullstack web developer</h4>
                            <h5>2018 - 2021</h5>
                            <p><em>Eden Spell Technologies, RWP, Pakistan</em></p>
                            <ul>
                                <li>
                                    Developed and maintained numerous web applications, implementing modern technologies
                                    and frameworks to meet client requirements.
                                </li>
                                <li>Managed multiple projects concurrently, effectively prioritizing tasks and meeting
                                    deadlines in a fast-paced environment.</li>
                                <li>Collaborated with clients to understand their needs and provided expert advice on
                                    the most suitable web development solutions.</li>
                                <li>Created and presented technical proposals and documentation to clients and
                                    stakeholders.</li>
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
                        Welcome to my portfolio! As a skilled and experienced fullstack web developer, I have had the
                        privilege of completing 13 successful projects
                        for 9 clients. Working alongside a talented team of 7 developers, we have delivered a diverse
                        range of web solutions that combine functionality,
                        aesthetics, and seamless user experiences. From building interactive web applications to
                        developing responsive websites,
                        I take pride in my ability to transform ideas into reality. Browse through my portfolio to
                        explore some of these notable projects
                        and witness my dedication to crafting innovative and impactful web solutions.
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
                            <img src="/img/portfolio/send_each.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/send_each.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="https://sendeach.com/" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="/img/portfolio/govamos.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/govamos.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="https://govamos.co/fifa/join" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/img/portfolio/green_world.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/green_world.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="https://greenworld.com.ng/" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="/img/portfolio/job4u.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/job4u.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="https://job4u.pk/" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="/img/portfolio/photo_lab.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/photo_lab.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="https://bestfilmdeveloping.com/" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="/img/portfolio/sweet_dream.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="/img/portfolio/sweet_dream.png" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="https://sweetdreamsvineyard.com/" target="_blank" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
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
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
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
                                <h4>Ceo &amp; Founder</h4>
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
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>
                        Interested in discussing your web development needs? Feel free to reach out using the contact
                        form provided below.
                        I look forward to hearing from you and exploring how I can assist you in achieving your goals.
                    </p>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Aziz Bhatti Rd Valancia, Lahore, Pakistan</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>rahmatul368@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+92 346 9070799</p>
                            </div>

                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0"
                                        marginwidth="0"
                                        src="https://maps.google.com/maps?width=400&amp;height=230&amp;hl=en&amp;q=Aziz bhatti road valancia lahore&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                    </iframe>
                                    <a href="https://capcuttemplate.org/">Capcut Templates</a>
                                </div>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        width: 400px;
                                        height: 230px;
                                    }

                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        width: 400px;
                                        height: 230px;
                                    }

                                    .gmap_iframe {
                                        width: 400px !important;
                                        height: 230px !important;
                                    }
                                </style>
                            </div>
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
        <div class="container">
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
