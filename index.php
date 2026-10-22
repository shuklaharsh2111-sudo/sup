<?php
declare(strict_types=1);
if (!headers_sent()) {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Permissions-Policy: camera=(), microphone=(), geolocation=()');
    header('Cross-Origin-Opener-Policy: same-origin');
    // Enable HSTS only when the request is already using HTTPS.
    $isHttps = (
        isset($_SERVER['HTTPS']) &&
        $_SERVER['HTTPS'] !== '' &&
        strtolower((string) $_SERVER['HTTPS']) !== 'off'
    );
    if ($isHttps) {
        header('Strict-Transport-Security: max-age=31536000');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#2b0908">
    <meta name="description" content="Unstoppable Solutions creates thoughtful digital solutions, modern websites and custom software for ambitious businesses.">
    <meta name="robots" content="index, follow">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <title>Unstoppable Solutions | Digital Excellence</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">
    <!-- Website CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Optional: browser color -->
    <meta name="color-scheme" content="light">
</head>
<body>

    <!-- Navbar -->
    <header class="site-header" id="siteHeader">
        <nav class="navbar container" aria-label="Main navigation">
            <a href="#home" class="brand" aria-label="Unstoppable Solutions home">
                <span class="brand-mark">
                    <img
                        src="assets/images/logo.png"
                        alt="Unstoppable Solutions logo"
                        class="brand-mark-image"
                        width="80"
                        height="80"
                        fetchpriority="high">
                </span>
                <span class="brand-copy">
                    <span class="brand-name">UNSTOPPABLE</span>
                    <span class="brand-subtitle">SOLUTIONS</span>
                </span>
            </a>
            <!-- Mobile navigation button -->
            <button
                class="menu-toggle"
                id="menuToggle"
                type="button"
                aria-label="Open navigation menu"
                aria-controls="navMenu"
                aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- Navigation links -->
            <div class="nav-menu" id="navMenu">
                <div class="nav-links">
                    <a href="#home" class="nav-link active">Home</a>
                    <a href="#brand-intro" class="nav-link">About</a>
                    <a href="#case-studies" class="nav-link">Solutions</a>
                    <a href="#services" class="nav-link">Services</a>
                    <a href="#testimonials" class="nav-link">Testimonials</a>
                    <a href="#blogs" class="nav-link">Blogs</a>
                </div>
                <a href="#contact" class="nav-contact">
                    <span>Contact Us</span>
                    <span class="contact-arrow" aria-hidden="true">↗</span>
                </a>
            </div>
        </nav>
    </header>
    <main id="main-content">
        <!-- Hero -->
        <section class="hero-section" id="home">
            <div class="hero-orb hero-orb-one" aria-hidden="true"></div>
            <div class="hero-orb hero-orb-two" aria-hidden="true"></div>
            <div class="hero-brand-content">
                <div class="hero-us">
                    <img
                        src="assets/images/logo.png"
                        alt="Unstoppable Solutions"
                        class="hero-logo-image"
                        width="240"
                        height="240"
                        fetchpriority="high">
                </div>
                <h1 class="hero-brand-name">UNSTOPPABLE SOLUTIONS</h1>
                <div class="hero-tagline">
                    <span class="hero-tagline-line" aria-hidden="true"></span>
                    <p>BEYOND THE BLUEPRINT</p>
                    <span class="hero-tagline-line" aria-hidden="true"></span>
                </div>
            </div>
        </section>
        <!-- Red velvet divider -->
        <div class="velvet-divider" aria-hidden="true">
            <img
                src="assets/images/red_velvet.png"
                alt=""
                class="velvet-divider-image"
                width="1600"
                height="100"
                loading="lazy">
        </div>
        <!-- About / Philosophy -->
        <section class="brand-intro-section" id="brand-intro">
            <div class="brand-intro-container">
                <div class="brand-intro-content">
                    <span class="brand-intro-label">
                        <span class="label-dot" aria-hidden="true"></span>
                        OUR PHILOSOPHY
                    </span>
                    <h2>
                        Where Blueprint Ends,
                        <span>Our Work Begins!</span>
                    </h2>
                    <div class="brand-intro-divider" aria-hidden="true"></div>
                    <p>
                        Beyond ideas. Beyond expectations.
                        We turn ambitious visions into meaningful realities.
                    </p>
                </div>
                <div class="brand-mascot">
                    <div class="mascot-glow" aria-hidden="true"></div>
                    <img
                        src="assets/images/mascot.png"
                        alt="Unstoppable Solutions mascot"
                        class="mascot-image"
                        loading="lazy"
                        width="500"
                        height="500">
                    <div class="mascot-ring" aria-hidden="true"></div>
                </div>
            </div>
        </section>
        <!-- Company logo tape -->
        <section class="case-study-tape-section" aria-label="Selected companies">
            <div class="case-study-tape">
                <div class="case-study-tape-track">
                    <div class="case-study-logo">
                        <img src="assets/images/case-study-1.png" alt="Company 1" loading="lazy">
                    </div>
                    <div class="case-study-logo">
                        <img src="assets/images/case-study-2.png" alt="Company 2" loading="lazy">
                    </div>
                    <div class="case-study-logo">
                        <img src="assets/images/case-study-3.png" alt="Company 3" loading="lazy">
                    </div>
                    <div class="case-study-logo">
                        <img src="assets/images/case-study-4.png" alt="Company 4" loading="lazy">
                    </div>
                    <div class="case-study-logo">
                        <img src="assets/images/case-study-5.png" alt="Company 5" loading="lazy">
                    </div>
                    <!-- Duplicate logos for the continuous animation -->
                    <div class="case-study-logo" aria-hidden="true">
                        <img src="assets/images/case-study-1.png" alt="" loading="lazy">
                    </div>
                    <div class="case-study-logo" aria-hidden="true">
                        <img src="assets/images/case-study-2.png" alt="" loading="lazy">
                    </div>
                    <div class="case-study-logo" aria-hidden="true">
                        <img src="assets/images/case-study-3.png" alt="" loading="lazy">
                    </div>
                    <div class="case-study-logo" aria-hidden="true">
                        <img src="assets/images/case-study-4.png" alt="" loading="lazy">
                    </div>
                    <div class="case-study-logo" aria-hidden="true">
                        <img src="assets/images/case-study-5.png" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <!-- Case studies -->
        <section class="case-studies-section" id="case-studies">
            <div class="case-studies-container">
                <div class="case-studies-heading">
                    <span class="case-studies-eyebrow">SELECTED WORK</span>
                    <h2>Case Studies<span>.</span></h2>
                    <p>
                        A selection of ideas transformed into meaningful
                        digital experiences.
                    </p>
                </div>
                <div class="case-carousel">
                    <div class="case-carousel-controls">
                        <span class="case-carousel-label" id="caseCounter">
                            01 / 04
                        </span>
                        <div class="case-carousel-arrows">
                            <button
                                type="button"
                                class="case-carousel-arrow"
                                id="casePrev"
                                aria-label="Previous case study">
                                &#8592;
                            </button>
                            <button
                                type="button"
                                class="case-carousel-arrow"
                                id="caseNext"
                                aria-label="Next case study">
                                &#8594;
                            </button>
                        </div>
                    </div>
                    <div class="case-carousel-viewport" id="caseViewport">
                        <div class="case-carousel-track" id="caseTrack"></div>
                    </div>
                    <div class="case-carousel-footer">
                        <div
                            class="case-carousel-progress"
                            role="progressbar"
                            aria-label="Case study progress"
                            aria-valuemin="0"
                            aria-valuemax="100">
                            <span id="caseProgress"></span>
                        </div>
                        <p>Explore our work <span aria-hidden="true">&#8594;</span></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services -->
        <section class="services-section" id="services">
            <div class="services-container">
                <div class="services-heading">
                    <span class="services-eyebrow">WHAT WE DO</span>
                    <h2>Our Services<span>.</span></h2>
                    <p>
                        Thoughtfully designed digital solutions
                        to help businesses move forward.
                    </p>
                </div>
                <div class="services-grid">
                    <article class="service-cell">
                        <span class="service-number">01</span>
                        <h3>Web Development</h3>
                        <p>
                            Modern, responsive websites built to deliver
                            seamless experiences across devices.
                        </p>
                    </article>
                    <article class="service-cell">
                        <span class="service-number">02</span>
                        <h3>Custom Software</h3>
                        <p>
                            Tailored software solutions designed around
                            your business processes and requirements.
                        </p>
                    </article>
                    <article class="service-cell">
                        <span class="service-number">03</span>
                        <h3>UI/UX Design</h3>
                        <p>
                            Intuitive interfaces and user-focused design
                            that make digital products easier to use.
                        </p>
                    </article>
                    <article class="service-cell">
                        <span class="service-number">04</span>
                        <h3>E-Commerce Solutions</h3>
                        <p>
                            Online stores with smooth shopping journeys
                            and practical management capabilities.
                        </p>
                    </article>
                    <article class="service-cell">
                        <span class="service-number">05</span>
                        <h3>Business Automation</h3>
                        <p>
                            Streamline repetitive tasks and simplify
                            everyday operations with digital workflows.
                        </p>
                    </article>
                    <article class="service-cell">
                        <span class="service-number">06</span>
                        <h3>Website Maintenance</h3>
                        <p>
                            Ongoing updates, improvements and technical
                            support to keep your website running smoothly.
                        </p>
                    </article>
                </div>
            </div>
        </section>
        <!-- Building image above testimonials -->
        <div class="building-rise-banner" aria-hidden="true">
            <img
                src="assets/images/building_new_one-removebg-preview.png"
                alt=""
                class="building-rise-image"
                width="1600"
                height="500"
                loading="lazy">
        </div>
        <!-- Testimonials -->
        <section class="testimonials-section" id="testimonials">
            <div class="testimonials-container">
                <div class="testimonials-heading">
                    <span class="testimonials-eyebrow">CLIENT EXPERIENCES</span>
                    <h2>Words That <span>Stay With Us.</span></h2>
                    <p>
                        A few words about the experiences we create
                        and the relationships we build.
                    </p>
                </div>
                <div class="testimonials-grid">
                    <article class="testimonial-card">
                        <span class="testimonial-quote" aria-hidden="true">“</span>
                        <div class="testimonial-stars" aria-label="5 out of 5 stars">
                            ★★★★★
                        </div>
                        <p class="testimonial-text">
                            The team understood our requirements clearly
                            and turned our ideas into a clean, professional
                            digital experience. The entire process felt smooth.
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar" aria-hidden="true">RK</div>
                            <div class="testimonial-author-info">
                                <h3>Rahul Kapoor</h3>
                                <span>Business Owner</span>
                            </div>
                        </div>
                    </article>
                    <article class="testimonial-card">
                        <span class="testimonial-quote" aria-hidden="true">“</span>
                        <div class="testimonial-stars" aria-label="5 out of 5 stars">
                            ★★★★★
                        </div>
                        <p class="testimonial-text">
                            What stood out was the attention to detail and
                            the thoughtful approach to solving problems.
                            The final result felt polished and easy to use.
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar" aria-hidden="true">SP</div>
                            <div class="testimonial-author-info">
                                <h3>Simran Patel</h3>
                                <span>Marketing Professional</span>
                            </div>
                        </div>
                    </article>
                    <article class="testimonial-card">
                        <span class="testimonial-quote" aria-hidden="true">“</span>
                        <div class="testimonial-stars" aria-label="5 out of 5 stars">
                            ★★★★★
                        </div>
                        <p class="testimonial-text">
                            A straightforward and professional experience
                            from start to finish. The solution was tailored
                            to our needs, with a clear focus on quality.
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar" aria-hidden="true">AM</div>
                            <div class="testimonial-author-info">
                                <h3>Aditya Mehta</h3>
                                <span>Startup Founder</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="testimonials-bottom-line">
                    <span aria-hidden="true"></span>
                    <p>Built on trust. Driven by thoughtful work.</p>
                    <span aria-hidden="true"></span>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="site-footer" id="contact">
        <div class="container">
            <div class="footer-main">
                <!-- Company information -->
                <div class="footer-brand">
                    <a href="#home" class="footer-logo">
                        <img
                            src="assets/images/logo.png"
                            alt=""
                            width="60"
                            height="60"
                            loading="lazy">
                        <span>Unstoppable <strong>Solutions</strong></span>
                    </a>
                    <p class="footer-description">
                        We create thoughtful digital solutions that help
                        businesses grow, connect, and move forward with confidence.
                    </p>
                    <div class="footer-socials">
                        <a
                            href="https://www.linkedin.com/company/getunstoppable/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                        <a
                            href="https://www.instagram.com/get_unstoppable/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram">
                            <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a
                            href="https://www.facebook.com/getunstoppable"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                        </a>
                        <a
                            href="https://x.com/getunstoppable1"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="X">
                            <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <!-- Quick links -->
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#brand-intro">About Us</a></li>
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#case-studies">Case Studies</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <!-- Services -->
                <div class="footer-column">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="#services">Web Development</a></li>
                        <li><a href="#services">Custom Software</a></li>
                        <li><a href="#services">UI/UX Design</a></li>
                        <li><a href="#services">E-Commerce Solutions</a></li>
                        <li><a href="#services">Website Maintenance</a></li>
                    </ul>
                </div>
                <!-- Contact information -->
                <div class="footer-column footer-contact">
                    <h3>Get in Touch</h3>
                    <p class="footer-contact-text">
                        Have a project in mind? Let's discuss how we can help.
                    </p>
                    <!-- Replace the email below with your real business email -->
                    <a
                        href="mailto:hello@yourdomain.com"
                        class="footer-contact-item">
                        <i class="fa-regular fa-envelope" aria-hidden="true"></i>
                        <span>hello@yourdomain.com</span>
                    </a>
                    <!-- Replace the number with your actual business number -->
                    <a
                        href="tel:+910000000000"
                        class="footer-contact-item">
                        <i class="fa-solid fa-phone" aria-hidden="true"></i>
                        <span>+91 XXXXX XXXXX</span>
                    </a>
                    <a href="#contact" class="footer-cta">
                        Let's Work Together
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <!-- Footer bottom -->
            <div class="footer-bottom">
                <p>
                    &copy; <span id="currentYear"></span>
                    Unstoppable Solutions. All rights reserved.
                </p>
                <div class="footer-legal-links">
                    <a href="privacy-policy.php">Privacy Policy</a>
                    <span class="footer-divider" aria-hidden="true"></span>
                    <a href="terms-and-conditions.php">Terms &amp; Conditions</a>
                </div>
                <a href="#home" class="back-to-top" aria-label="Back to top">
                    Back to top
                    <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </footer>
    <script>
        (() => {
            'use strict';
            const yearElement = document.getElementById('currentYear');
            if (yearElement) {
                yearElement.textContent = String(new Date().getFullYear());
            }
        })();
    </script>
    <script src="assets/js/script.js" defer></script>
</body>
</html>