document.addEventListener("DOMContentLoaded", () => {
    const header = document.getElementById("siteHeader");
    const menuToggle = document.getElementById("menuToggle");
    const navMenu = document.getElementById("navMenu");
    const navLinks = document.querySelectorAll(".nav-link");
    const allNavLinks = document.querySelectorAll(
        '.nav-menu a[href^="#"], .brand[href^="#"]'
    );
    const currentYear = document.getElementById("currentYear");
    if (currentYear) {
        currentYear.textContent = new Date().getFullYear();
    }
    function updateHeader() {
        if (!header) return;
        header.classList.toggle("scrolled", window.scrollY > 15);
    }
    updateHeader();
    window.addEventListener("scroll", updateHeader, {
        passive: true
    });
    function openMenu() {
        if (!menuToggle || !navMenu) return;
        navMenu.classList.add("open");
        menuToggle.classList.add("active");
        menuToggle.setAttribute("aria-expanded", "true");
        menuToggle.setAttribute("aria-label", "Close navigation menu");
        document.body.classList.add("menu-open");
    }
    function closeMenu() {
        if (!menuToggle || !navMenu) return;
        navMenu.classList.remove("open");
        menuToggle.classList.remove("active");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Open navigation menu");
        document.body.classList.remove("menu-open");
    }
    if (menuToggle && navMenu) {
        menuToggle.addEventListener("click", () => {
            if (navMenu.classList.contains("open")) {
                closeMenu();
            } else {
                openMenu();
            }
        });
        allNavLinks.forEach((link) => {
            link.addEventListener("click", closeMenu);
        });
        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape") {
                closeMenu();
            }
        });
        window.addEventListener("resize", () => {
            if (window.innerWidth > 800) {
                closeMenu();
            }
        });
    }
    const sections = document.querySelectorAll("main section[id]");
    if ("IntersectionObserver" in window && sections.length) {
        const sectionObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;
                    const sectionId = entry.target.id;
                    navLinks.forEach((link) => {
                        const isActive =
                            link.getAttribute("href") === `#${sectionId}`;
                        link.classList.toggle("active", isActive);
                        if (isActive) {
                            link.setAttribute("aria-current", "location");
                        } else {
                            link.removeAttribute("aria-current");
                        }
                    });
                });
            },
            {
                root: null,
                rootMargin: "-25% 0px -60% 0px",
                threshold: 0
            }
        );
        sections.forEach((section) => {
            sectionObserver.observe(section);
        });
    }
});

(() => {
    "use strict";

    const track = document.getElementById("caseTrack");
    const viewport = document.getElementById("caseViewport");
    const previousButton = document.getElementById("casePrev");
    const nextButton = document.getElementById("caseNext");
    const counter = document.getElementById("caseCounter");
    const progress = document.getElementById("caseProgress");

    if (!track || !viewport || !previousButton || !nextButton || !counter || !progress) {
        return;
    }

    const caseStudies = [
        {
            category: "Web Development",
            title: "Digital Experiences",
            description: "A thoughtfully designed digital experience focused on clarity, usability and a polished brand presence.",
            image: "assets/images/case-study-1.jpg",
            link: "#"
        },
        {
            category: "Brand Identity",
            title: "A Distinctive Identity",
            description: "A cohesive visual direction built to communicate the brand's personality with consistency and purpose.",
            image: "assets/images/case-study-2.jpg",
            link: "#"
        },
        {
            category: "Creative Solutions",
            title: "Ideas Into Reality",
            description: "A creative solution combining purposeful design and practical functionality for a modern audience.",
            image: "assets/images/case-study-3.png",
            link: "#"
        },
        {
            category: "Digital Strategy",
            title: "Designed For Growth",
            description: "A considered digital approach that brings content, design and business objectives together.",
            image: "assets/images/case-study-4.png",
            link: "#"
        }
    ];

    let activeIndex = 0;
    let resizeFrame = null;

    function buildCards() {
        track.innerHTML = caseStudies.map((study, index) => `
            <article class="case-study-card" data-index="${index}">
                <a class="case-study-link" href="${escapeAttribute(study.link)}" aria-label="View ${escapeAttribute(study.title)}">
                    <div class="case-study-visual">
                        <div class="case-study-screen">
                            <img src="${escapeAttribute(study.image)}" alt="${escapeAttribute(study.title)}" loading="${index === 0 ? "eager" : "lazy"}" draggable="false">
                        </div>
                        <span class="case-study-visual-number">${String(index + 1).padStart(2, "0")}</span>
                        <span class="case-study-visual-arrow" aria-hidden="true">&#8599;</span>
                    </div>
                </a>
                <div class="case-study-content">
                    <div class="case-study-main">
                        <span class="case-study-index">PROJECT ${String(index + 1).padStart(2, "0")}</span>
                        <h3 class="case-study-card-title">${escapeHTML(study.title)}</h3>
                    </div>
                    <div class="case-study-details">
                        <span class="case-study-category">${escapeHTML(study.category)}</span>
                        <p class="case-study-description">${escapeHTML(study.description)}</p>
                    </div>
                </div>
            </article>
        `).join("");

        updateCarousel(false);
    }

    function escapeHTML(value) {
        return String(value).replace(/[&<>"']/g, character => ({
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;"
        })[character]);
    }

    function escapeAttribute(value) {
        return escapeHTML(value);
    }

    function updateCarousel(animate = true) {
        const cards = Array.from(track.querySelectorAll(".case-study-card"));

        if (!cards.length) {
            return;
        }

        activeIndex = Math.max(0, Math.min(activeIndex, cards.length - 1));

        cards.forEach((card, index) => {
            const active = index === activeIndex;
            card.classList.toggle("is-active", active);
            card.setAttribute("aria-current", active ? "true" : "false");
        });

        const activeCard = cards[activeIndex];
        const trackStyle = window.getComputedStyle(track);
        const gap = parseFloat(trackStyle.columnGap) || 0;
        const offset = activeCard.offsetLeft;

        track.style.transition = animate ? "transform 600ms cubic-bezier(0.22, 1, 0.36, 1)" : "none";
        track.style.transform = `translateX(${-offset}px)`;

        counter.textContent = `${String(activeIndex + 1).padStart(2, "0")} / ${String(cards.length).padStart(2, "0")}`;
        progress.style.width = `${((activeIndex + 1) / cards.length) * 100}%`;

        previousButton.disabled = cards.length <= 1;
        nextButton.disabled = cards.length <= 1;

        previousButton.setAttribute("aria-disabled", String(cards.length <= 1));
        nextButton.setAttribute("aria-disabled", String(cards.length <= 1));
    }

    function goToPrevious() {
        activeIndex = (activeIndex - 1 + caseStudies.length) % caseStudies.length;
        updateCarousel();
    }

    function goToNext() {
        activeIndex = (activeIndex + 1) % caseStudies.length;
        updateCarousel();
    }

    previousButton.addEventListener("click", goToPrevious);
    nextButton.addEventListener("click", goToNext);

    window.addEventListener("resize", () => {
        if (resizeFrame !== null) {
            cancelAnimationFrame(resizeFrame);
        }

        resizeFrame = requestAnimationFrame(() => {
            updateCarousel(false);
            resizeFrame = null;
        });
    });

    buildCards();
})();


/* ========================================
   SCROLL DROP & BOUNCE EFFECT
======================================== */

(() => {
    const banner = document.querySelector('.full-width-banner');
    const image = document.querySelector('.full-width-banner-image');

    if (!banner || !image) return;

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    let ticking = false;

    function updateBounce() {
        const rect = banner.getBoundingClientRect();
        const viewportHeight = window.innerHeight;

        if (rect.bottom <= 0 || rect.top >= viewportHeight) {
            ticking = false;
            return;
        }

        const progress = Math.max(
            0,
            Math.min(
                1,
                (viewportHeight - rect.top) /
                (viewportHeight + rect.height)
            )
        );

        /*
         * Scroll movement creates a drop,
         * followed by a spring-like upward bounce.
         */

        const wave = Math.sin(progress * Math.PI * 2.2);
        const damping = 1 - progress * 0.35;
        const drop = 34;

        const translateY = drop * wave * damping;
        const scaleY = 1 + Math.max(0, wave) * 0.025;

        image.style.transform =
            `translate3d(0, ${translateY}px, 0) scale(1.05, ${scaleY})`;

        ticking = false;
    }

    function onScroll() {
        if (!ticking) {
            requestAnimationFrame(updateBounce);
            ticking = true;
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll);

    updateBounce();
})();
