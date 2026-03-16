/**
 * Faydev — main.js
 * Dark mode toggle | Typing animation | Scroll reveals
 * Mobile menu | Navbar scroll | Projects fetch | Social links fetch
 * Back to top | Active nav | Skill bar animation
 */

(() => {
    'use strict';

    /* ─── THEME ───────────────────────────────────────────────── */
    const htmlEl        = document.documentElement;
    const themeToggleEl = document.getElementById('themeToggle');
    const THEME_KEY     = 'faydev-theme';

    function applyTheme(theme) {
        htmlEl.setAttribute('data-theme', theme);
        localStorage.setItem(THEME_KEY, theme);
    }

    function initTheme() {
        const saved = localStorage.getItem(THEME_KEY);
        if (saved) {
            applyTheme(saved);
        } else {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            applyTheme(prefersDark ? 'dark' : 'light');
        }
    }

    themeToggleEl?.addEventListener('click', () => {
        const current = htmlEl.getAttribute('data-theme');
        applyTheme(current === 'dark' ? 'light' : 'dark');
    });

    initTheme();


    /* ─── MOBILE NAV ──────────────────────────────────────────── */
    const hamburgerEl = document.getElementById('hamburger');
    const navLinksEl  = document.getElementById('navLinks');

    hamburgerEl?.addEventListener('click', () => {
        const isOpen = navLinksEl.classList.toggle('open');
        hamburgerEl.classList.toggle('open', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    navLinksEl?.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navLinksEl.classList.remove('open');
            hamburgerEl?.classList.remove('open');
            document.body.style.overflow = '';
        });
    });


    /* ─── NAVBAR SCROLL ───────────────────────────────────────── */
    const navbarEl = document.getElementById('navbar');

    function handleNavbarScroll() {
        if (window.scrollY > 40) {
            navbarEl?.classList.add('scrolled');
        } else {
            navbarEl?.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', handleNavbarScroll, { passive: true });
    handleNavbarScroll();


    /* ─── ACTIVE NAV LINK ─────────────────────────────────────── */
    const sections   = document.querySelectorAll('section[id]');
    const navLinks   = document.querySelectorAll('.nav-link');

    function updateActiveNav() {
        let current = '';
        sections.forEach(section => {
            const top = section.offsetTop - 120;
            if (window.scrollY >= top) {
                current = section.getAttribute('id');
            }
        });
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            link.classList.toggle('active', href === `#${current}`);
        });
    }

    window.addEventListener('scroll', updateActiveNav, { passive: true });


    /* ─── TYPING ANIMATION ────────────────────────────────────── */
    const typedEl = document.getElementById('typedText');
    const roles   = [
        'Software Engineer',
        'Fullstack Developer',
        'Web Developer',
        'Problem Solver',
    ];

    let roleIndex   = 0;
    let charIndex   = 0;
    let isDeleting  = false;
    let typingTimer = null;

    function typeLoop() {
        const currentRole = roles[roleIndex];

        if (isDeleting) {
            charIndex--;
            typedEl.textContent = currentRole.slice(0, charIndex);
        } else {
            charIndex++;
            typedEl.textContent = currentRole.slice(0, charIndex);
        }

        let delay = isDeleting ? 60 : 90;

        if (!isDeleting && charIndex === currentRole.length) {
            delay = 2000;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            roleIndex  = (roleIndex + 1) % roles.length;
            delay = 400;
        }

        typingTimer = setTimeout(typeLoop, delay);
    }

    if (typedEl) {
        // Small delay so page loads first
        setTimeout(typeLoop, 800);
    }


    /* ─── INTERSECTION OBSERVER: REVEAL ──────────────────────── */
    const revealEls = document.querySelectorAll('.reveal-up, .reveal-right');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -50px 0px' });

    revealEls.forEach(el => revealObserver.observe(el));


    /* ─── SKILL BAR ANIMATION ─────────────────────────────────── */
    const skillFills = document.querySelectorAll('.skill-fill');

    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                skillObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.4 });

    skillFills.forEach(el => skillObserver.observe(el));


    /* ─── BACK TO TOP ─────────────────────────────────────────── */
    const backToTopEl = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        backToTopEl?.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });

    backToTopEl?.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });


    /* ─── FETCH PROJECTS ──────────────────────────────────────── */
    const projectsGrid = document.getElementById('projectsGrid');

    function formatDate(dateStr) {
        if (!dateStr) return '';
        const d = new Date(dateStr);
        return d.toLocaleDateString('id-ID', { year: 'numeric', month: 'short', day: 'numeric' });
    }

    function renderProjects(projects) {
        if (!projectsGrid) return;
        projectsGrid.innerHTML = '';

        if (!projects || projects.length === 0) {
            projectsGrid.innerHTML = '<p class="projects-empty">Belum ada project yang ditampilkan.</p>';
            return;
        }

        projects.forEach((project, i) => {
            const card = document.createElement('div');
            card.className = 'project-card';
            card.style.animationDelay = `${i * 0.08}s`;

            const demoBtn = project.demo_link
                ? `<a href="${escHtml(project.demo_link)}" class="project-demo" target="_blank" rel="noopener">
                       View Demo <i class="fas fa-arrow-right"></i>
                   </a>`
                : '';

            card.innerHTML = `
                <div class="project-thumb">
                    <img src="${escHtml(project.thumbnail)}"
                         alt="${escHtml(project.title)}"
                         loading="lazy"
                         onerror="this.src='assets/images/project-placeholder.svg'">
                </div>
                <div class="project-body">
                    <span class="project-date">${formatDate(project.project_date)}</span>
                    <h3 class="project-title">
                        <a href="project.php?id=${encodeURIComponent(project.id)}">
                            ${escHtml(project.title)}
                        </a>
                    </h3>
                    ${demoBtn}
                </div>`;

            projectsGrid.appendChild(card);
        });
    }

    async function fetchProjects() {
        try {
            const res  = await fetch('api/projects.php?limit=6');
            const json = await res.json();
            if (json.success) {
                renderProjects(json.data);
            } else {
                renderProjects([]);
            }
        } catch {
            renderProjects([]);
        }
    }

    fetchProjects();


    /* ─── FETCH SOCIAL LINKS ──────────────────────────────────── */
    const socialLinksEl = document.getElementById('socialLinks');

    async function fetchSocialLinks() {
        try {
            const res  = await fetch('api/social.php');
            const json = await res.json();
            if (json.success && json.data.length > 0) {
                socialLinksEl.innerHTML = json.data.map(link => `
                    <a href="${escHtml(link.url)}"
                       class="social-link"
                       target="_blank"
                       rel="noopener"
                       aria-label="${escHtml(link.name)}">
                        <i class="${escHtml(link.icon)}"></i>
                    </a>`).join('');
            }
        } catch {
            // Fallback static links already in HTML
        }
    }

    fetchSocialLinks();


    /* ─── UTILITY: HTML ESCAPE ────────────────────────────────── */
    function escHtml(str) {
        if (!str) return '';
        return String(str)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;');
    }

})();
