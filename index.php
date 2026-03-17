<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>Faris AY | Faydev — Software & Web Developer untuk UMKM</title>
    <meta name="description" content="Faris AY adalah Software Engineer & Fullstack Developer yang spesialis membangun website, landing page, automation, dan chatbot untuk UMKM dan bisnis kecil di Indonesia.">
    <meta name="keywords" content="web developer, software developer, UMKM, landing page, automation, chatbot, PHP, JavaScript, Indonesia">
    <meta name="author" content="Faris AY | Faydev">

    <!-- Open Graph -->
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="https://faydev.my.id/">
    <meta property="og:title"       content="Faris AY | Faydev — Software & Web Developer untuk UMKM">
    <meta property="og:description" content="Spesialis membangun solusi digital untuk UMKM: Website, Landing Page, Automation, Chatbot.">
    <meta property="og:image"       content="https://faydev.my.id/assets/images/og-image.jpg">

    <!-- Twitter Card -->
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="Faris AY | Faydev">
    <meta name="twitter:description" content="Software & Web Developer untuk UMKM">

    <!-- Fonts: Syne (display) + DM Sans (body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="manifest" href="assets/images/site.webmanifest">
</head>
<body>

<!-- ============================================================
     NAVBAR
============================================================ -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="#" class="nav-logo">
            <img src="assets/images/faydev-logo.webp" alt="Faydev logo" class="nav-logo-img">
            <span class="nav-logo-text">faydev</span>
        </a>

        <ul class="nav-links" id="navLinks">
            <li><a href="#about"    class="nav-link">About</a></li>
            <li><a href="#skills"   class="nav-link">Skills</a></li>
            <li><a href="#services" class="nav-link">Services</a></li>
            <li><a href="#projects" class="nav-link">Projects</a></li>
            <li><a href="#contact"  class="nav-link">Contact</a></li>
        </ul>

        <div class="nav-actions">
            <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
                <span class="toggle-icon toggle-sun"><i class="fas fa-sun"></i></span>
                <span class="toggle-icon toggle-moon"><i class="fas fa-moon"></i></span>
            </button>
            <button class="nav-hamburger" id="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</nav>

<!-- ============================================================
     HERO SECTION
============================================================ -->
<section class="hero" id="hero">
    <!-- Decorative background grid -->
    <div class="hero-grid" aria-hidden="true"></div>
    <!-- Floating orbs -->
    <div class="hero-orb hero-orb--1" aria-hidden="true"></div>
    <div class="hero-orb hero-orb--2" aria-hidden="true"></div>

    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-badge reveal-up" style="--delay:0s">
                <span class="badge-dot"></span>
                <span>Available for projects</span>
            </div>

            <h1 class="hero-name reveal-up" style="--delay:.1s">
                Faris <span class="name-accent">AY</span>
            </h1>

            <div class="hero-role reveal-up" style="--delay:.2s">
                <span class="role-prefix">&gt; </span><span class="typed-text" id="typedText"></span><span class="cursor-blink">|</span>
            </div>

            <p class="hero-desc reveal-up" style="--delay:.35s">
                Membangun solusi digital yang <em>berdampak nyata</em> untuk bisnis kecil dan UMKM mulai dari website, landing page, hingga otomasi dan chatbot.
            </p>

            <div class="hero-ctas reveal-up" style="--delay:.45s">
                <a href="#projects" class="btn btn--primary">
                    <i class="fas fa-folder-open"></i>
                    Lihat Project
                </a>
                <a href="https://wa.me/6281234567890?text=Halo%20Faris%2C%20saya%20ingin%20konsultasi%20tentang%20project%20saya." 
                   class="btn btn--whatsapp" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp"></i>
                    Konsultasi WhatsApp
                </a>
            </div>
        </div>

        <div class="hero-visual reveal-right" style="--delay:.2s">
            <div class="profile-frame">
                <div class="profile-ring"></div>
                <div class="profile-img-wrap">
                    <img src="assets/images/faydev.my.id-profile-picture.webp" 
                         alt="Faris AY — Software & Web Developer" 
                         class="profile-img"
                         onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                    <div class="profile-placeholder" style="display:none">
                        <span>FA</span>
                    </div>
                </div>
                <!-- Floating stat cards -->
                <div class="stat-card stat-card--top">
                    <span class="stat-num">4+</span>
                    <span class="stat-label">Tahun exp.</span>
                </div>
                <div class="stat-card stat-card--bottom">
                    <span class="stat-num">5+</span>
                    <span class="stat-label">Projects selesai</span>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-hint" aria-hidden="true">
        <span>scroll</span>
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- ============================================================
     ABOUT SECTION
============================================================ -->
<section class="section about-section" id="about">
    <div class="container">
        <div class="section-header reveal-up">
            <span class="section-tag">// 01</span>
            <h2 class="section-title">About Me</h2>
        </div>

        <div class="about-grid">
            <div class="about-text reveal-up" style="--delay:.1s">
                <p class="about-lead">
                    Halo! Saya <strong>Faris AY</strong>, seorang <em>Software Engineer & Fullstack Developer</em> yang berfokus membantu UMKM dan bisnis kecil bertumbuh lewat teknologi modern.
                </p>
                <p>
                    Berbekal pengalaman dalam pengembangan perangkat lunak, saya merancang solusi digital yang praktis dan berdampak nyata. Mulai dari pembuatan toko online, landing page, hingga integrasi kecerdasan buatan (AI) dan sistem otomasi alur kerja.
                </p>
                <p>
                    Saya percaya teknologi hadir untuk membantu orang bekerja lebih cerdas. Oleh karena itu, saya berkomitmen untuk <em>menghadirkan solusi teknologi yang efisien, terjangkau, dan dapat diandalkan</em> untuk mendongkrak efisiensi bisnis Anda.
                </p>
                <div class="about-facts">
                    <div class="fact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Indonesia</span>
                    </div>
                    <div class="fact-item">
                        <i class="fas fa-briefcase"></i>
                        <span>Freelance & Remote</span>
                    </div>
                    <div class="fact-item">
                        <i class="fas fa-clock"></i>
                        <span>Fast Turnaround</span>
                    </div>
                </div>
            </div>

            <div class="about-terminal reveal-up" style="--delay:.2s">
                <div class="terminal-header">
                    <span class="terminal-dot t-red"></span>
                    <span class="terminal-dot t-yellow"></span>
                    <span class="terminal-dot t-green"></span>
                    <span class="terminal-title">faydev.json</span>
                </div>
                <pre class="terminal-body"><code><span class="t-punct">{</span>
  <span class="t-key">"name"</span><span class="t-punct">:</span> <span class="t-str">"Faris AY"</span><span class="t-punct">,</span>
  <span class="t-key">"alias"</span><span class="t-punct">:</span> <span class="t-str">"faydev"</span><span class="t-punct">,</span>
  <span class="t-key">"role"</span><span class="t-punct">:</span> <span class="t-str">"Fullstack Developer"</span><span class="t-punct">,</span>
  <span class="t-key">"focus"</span><span class="t-punct">:</span> <span class="t-str">"UMKM &amp; Small Business"</span><span class="t-punct">,</span>
  <span class="t-key">"experience"</span><span class="t-punct">:</span> <span class="t-num">4</span><span class="t-punct">,</span>
  <span class="t-key">"projects_done"</span><span class="t-punct">:</span> <span class="t-num">5</span><span class="t-punct">,</span>
  <span class="t-key">"available"</span><span class="t-punct">:</span> <span class="t-bool">true</span><span class="t-punct">,</span>
  <span class="t-key">"services"</span><span class="t-punct">:</span> <span class="t-punct">[</span>
    <span class="t-str">"Web Development"</span><span class="t-punct">,</span>
    <span class="t-str">"Landing Page"</span><span class="t-punct">,</span>
    <span class="t-str">"Automation"</span><span class="t-punct">,</span>
    <span class="t-str">"Chatbot"</span>
  <span class="t-punct">]</span>
<span class="t-punct">}</span></code></pre>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SKILLS SECTION
============================================================ -->
<section class="section skills-section" id="skills">
    <div class="container">
        <div class="section-header reveal-up">
            <span class="section-tag">// 02</span>
            <h2 class="section-title">Skills</h2>
        </div>

        <div class="skills-grid">
            <!-- Frontend -->
            <div class="skill-group reveal-up" style="--delay:.05s">
                <div class="skill-group-header">
                    <i class="fas fa-desktop"></i>
                    <span>Frontend</span>
                </div>
                <ul class="skill-list">
                    <li class="skill-item"><span class="skill-name">HTML5</span><div class="skill-bar"><div class="skill-fill" style="--pct:95%"></div></div></li>
                    <li class="skill-item"><span class="skill-name">CSS3</span><div class="skill-bar"><div class="skill-fill" style="--pct:90%"></div></div></li>
                    <li class="skill-item"><span class="skill-name">JavaScript</span><div class="skill-bar"><div class="skill-fill" style="--pct:85%"></div></div></li>
                    <li class="skill-item"><span class="skill-name">Bootstrap</span><div class="skill-bar"><div class="skill-fill" style="--pct:80%"></div></div></li>
                </ul>
            </div>

            <!-- Backend -->
            <div class="skill-group reveal-up" style="--delay:.1s">
                <div class="skill-group-header">
                    <i class="fas fa-server"></i>
                    <span>Backend</span>
                </div>
                <ul class="skill-list">
                    <li class="skill-item"><span class="skill-name">PHP</span><div class="skill-bar"><div class="skill-fill" style="--pct:90%"></div></div></li>
                    <li class="skill-item"><span class="skill-name">MySQL</span><div class="skill-bar"><div class="skill-fill" style="--pct:85%"></div></div></li>
                    <li class="skill-item"><span class="skill-name">REST API</span><div class="skill-bar"><div class="skill-fill" style="--pct:80%"></div></div></li>
                    <li class="skill-item"><span class="skill-name">Laravel</span><div class="skill-bar"><div class="skill-fill" style="--pct:70%"></div></div></li>
                </ul>
            </div>

            <!-- Automation & Tools -->
            <div class="skill-group reveal-up" style="--delay:.15s">
                <div class="skill-group-header">
                    <i class="fas fa-robot"></i>
                    <span>Automation & Tools</span>
                </div>
                <ul class="skill-list">
                    <li class="skill-item"><span class="skill-name">WhatsApp API</span><div class="skill-bar"><div class="skill-fill" style="--pct:85%"></div></div></li>
                    <li class="skill-item"><span class="skill-name">Google Sheets</span><div class="skill-bar"><div class="skill-fill" style="--pct:80%"></div></div></li>
                    <li class="skill-item"><span class="skill-name">Git / GitHub</span><div class="skill-bar"><div class="skill-fill" style="--pct:80%"></div></div></li>
                    <li class="skill-item"><span class="skill-name">cPanel / Hosting</span><div class="skill-bar"><div class="skill-fill" style="--pct:85%"></div></div></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SERVICES SECTION
============================================================ -->
<section class="section services-section" id="services">
    <div class="container">
        <div class="section-header reveal-up">
            <span class="section-tag">// 03</span>
            <h2 class="section-title">Services</h2>
            <p class="section-subtitle">Solusi digital yang saya tawarkan untuk bisnis Anda</p>
        </div>

        <div class="services-grid">
            <div class="service-card reveal-up" style="--delay:.05s">
                <div class="service-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="service-title">Web Development</h3>
                <p class="service-desc">
                    Pembuatan website custom profesional untuk bisnis Anda. Responsif, cepat, dan mudah dikelola.
                </p>
                <ul class="service-features">
                    <li>Company profile & portfolio</li>
                    <li>Toko online / e-commerce</li>
                    <li>Sistem manajemen konten</li>
                    <li>Optimasi SEO</li>
                </ul>
                <div class="service-cta">
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20dengan%20layanan%20Web%20Development." 
                       class="btn-service" target="_blank" rel="noopener">
                        Konsultasi <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="service-card service-card--featured reveal-up" style="--delay:.1s">
                <div class="service-badge">Popular</div>
                <div class="service-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="service-title">Landing Page</h3>
                <p class="service-desc">
                    Halaman penjualan atau promosi yang dirancang untuk mengkonversi pengunjung menjadi customer.
                </p>
                <ul class="service-features">
                    <li>Desain persuasif & menarik</li>
                    <li>Mobile-first responsive</li>
                    <li>Integrasi WhatsApp CTA</li>
                    <li>Loading speed optimal</li>
                </ul>
                <div class="service-cta">
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20dengan%20layanan%20Landing%20Page." 
                       class="btn-service" target="_blank" rel="noopener">
                        Konsultasi <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="service-card reveal-up" style="--delay:.15s">
                <div class="service-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3 class="service-title">Automation</h3>
                <p class="service-desc">
                    Otomasi proses bisnis yang berulang. Hemat waktu, kurangi error, tingkatkan produktivitas.
                </p>
                <ul class="service-features">
                    <li>Laporan otomatis</li>
                    <li>Integrasi Google Sheets</li>
                    <li>Notifikasi otomatis</li>
                    <li>Sinkronisasi data</li>
                </ul>
                <div class="service-cta">
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20dengan%20layanan%20Automation." 
                       class="btn-service" target="_blank" rel="noopener">
                        Konsultasi <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="service-card reveal-up" style="--delay:.2s">
                <div class="service-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3 class="service-title">Chatbot</h3>
                <p class="service-desc">
                    Chatbot cerdas untuk WhatsApp atau website yang membantu melayani customer 24/7.
                </p>
                <ul class="service-features">
                    <li>Chatbot WhatsApp</li>
                    <li>FAQ otomatis</li>
                    <li>Order & booking bot</li>
                    <li>Integrasi ke sistem bisnis</li>
                </ul>
                <div class="service-cta">
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20dengan%20layanan%20Chatbot." 
                       class="btn-service" target="_blank" rel="noopener">
                        Konsultasi <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     PROJECTS SECTION
============================================================ -->
<section class="section projects-section" id="projects">
    <div class="container">
        <div class="section-header reveal-up">
            <span class="section-tag">// 04</span>
            <h2 class="section-title">Projects</h2>
            <p class="section-subtitle">Beberapa project terbaru yang telah saya kerjakan</p>
        </div>

        <!-- Project grid populated by JS -->
        <div class="projects-grid" id="projectsGrid">
            <!-- Skeleton loaders -->
            <div class="project-skeleton"></div>
            <div class="project-skeleton"></div>
            <div class="project-skeleton"></div>
            <div class="project-skeleton"></div>
            <div class="project-skeleton"></div>
            <div class="project-skeleton"></div>
        </div>

        <div class="projects-footer reveal-up">
            <a href="https://app.faydev.my.id" class="btn btn--outline" target="_blank" rel="noopener">
                <i class="fas fa-th-large"></i>
                View All Projects
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     CONTACT SECTION
============================================================ -->
<section class="section contact-section" id="contact">
    <div class="container">
        <div class="contact-wrap reveal-up">
            <div class="contact-bg-text" aria-hidden="true">Let's Talk</div>

            <div class="contact-content">
                <span class="section-tag">// 05</span>
                <h2 class="contact-title">Siap Memulai Project?</h2>
                <p class="contact-desc">
                    Ceritakan kebutuhan bisnis Anda. Saya siap membantu menemukan solusi digital yang tepat. Konsultasi pertama <strong>gratis</strong>.
                </p>

                <a href="https://wa.me/6281234567890?text=Halo%20Faris%2C%20saya%20ingin%20konsultasi%20mengenai%20project%20saya." 
                   class="btn btn--whatsapp btn--large" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp"></i>
                    Konsultasi via WhatsApp
                </a>

                <div class="contact-note">
                    <i class="fas fa-clock"></i>
                    Biasanya balas dalam 1–2 jam
                </div>
            </div>
        </div>

        <!-- Social links injected by JS -->
        <div class="social-links reveal-up" id="socialLinks">
            <!-- Fallback static links -->
            <a href="https://instagram.com/fay.developer"  class="social-link" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://linkedin.com/in/faris-ay" class="social-link" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/faynim"      class="social-link" target="_blank" rel="noopener" aria-label="GitHub"><i class="fab fa-github"></i></a>
            <a href="https://threads.net/@faris.a.y"    class="social-link" target="_blank" rel="noopener" aria-label="Threads"><i class="fab fa-threads"></i></a>
            <a href="https://tiktok.com/@faydev"     class="social-link" target="_blank" rel="noopener" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
        </div>
    </div>
</section>

<!-- ============================================================
     FOOTER
============================================================ -->
<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-brand">
                <a href="#" class="nav-logo">
                    <img src="assets/images/faydev-logo.webp" alt="Faydev logo" class="nav-logo-img">
                    <span class="nav-logo-text">faydev</span>
                </a>
                <p>Software & Web Developer untuk UMKM</p>
            </div>
            <div class="footer-links">
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#services">Services</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Faris AY — Faydev. Crafted with <i class="fas fa-heart"></i> in Indonesia.</p>
        </div>
    </div>
</footer>

<!-- Back to top -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>

<script src="assets/js/main.js"></script>
</body>
</html>
