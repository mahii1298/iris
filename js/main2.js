/**
 * IRIS Design Variant 2 - GSAP Powered Interactive Engine
 * Uses GSAP 3 + ScrollTrigger
 */

document.addEventListener('DOMContentLoaded', () => {
    // Register ScrollTrigger if loaded
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
    }

    initCustomCursor();
    initHeroAnimations();
    initScrollTriggers();
    init3DCardTilt();
    initLaserScanner();
    initMarqueeGSAP();
    initAcademyFilterGSAP();
    initTerminalCalculator();
    initModalsGSAP();
});

/* ==========================================================================
   1. GSAP Custom Cursor
   ========================================================================== */
function initCustomCursor() {
    const cursor = document.querySelector('.custom-cursor');
    const dot = document.querySelector('.custom-cursor-dot');
    if (!cursor || !dot || window.innerWidth < 768) return;

    let mouseX = 0, mouseY = 0;
    let cursorX = 0, cursorY = 0;

    window.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        gsap.to(dot, { x: mouseX, y: mouseY, duration: 0.05 });
    });

    gsap.ticker.add(() => {
        cursorX += (mouseX - cursorX) * 0.15;
        cursorY += (mouseY - cursorY) * 0.15;
        gsap.set(cursor, { x: cursorX, y: cursorY });
    });

    const interactiveElements = document.querySelectorAll('a, button, .service-hud-card, .course-hud-card, input, select, textarea');
    interactiveElements.forEach(el => {
        el.addEventListener('mouseenter', () => cursor.classList.add('hovered'));
        el.addEventListener('mouseleave', () => cursor.classList.remove('hovered'));
    });
}

/* ==========================================================================
   2. GSAP Hero Sequence
   ========================================================================== */
function initHeroAnimations() {
    if (typeof gsap === 'undefined') return;

    const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

    tl.from('.navbar-hud', {
        y: -50,
        opacity: 0,
        duration: 0.8
    })
    .from('.hero-accreditations .acc-chip', {
        scale: 0.8,
        opacity: 0,
        stagger: 0.1,
        duration: 0.6
    }, '-=0.4')
    .from('.hero-display-title', {
        y: 40,
        opacity: 0,
        duration: 1
    }, '-=0.3')
    .from('.hero-description', {
        y: 20,
        opacity: 0,
        duration: 0.8
    }, '-=0.6')
    .from('.hero-actions .btn-hud', {
        scale: 0.9,
        opacity: 0,
        stagger: 0.15,
        duration: 0.7
    }, '-=0.5')
    .from('.hud-visual-card', {
        x: 60,
        opacity: 0,
        duration: 1.1,
        ease: 'power2.out'
    }, '-=0.8');
}

/* ==========================================================================
   3. GSAP ScrollTrigger Elements
   ========================================================================== */
function initScrollTriggers() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    // Sticky Navbar Glass transition
    ScrollTrigger.create({
        start: 'top -50',
        end: 99999,
        toggleClass: { className: 'scrolled', targets: '.navbar-hud' }
    });

    // Metric Counters with GSAP
    const counters = document.querySelectorAll('.metric-number');
    counters.forEach(counter => {
        const targetVal = parseInt(counter.getAttribute('data-target'), 10);

        ScrollTrigger.create({
            trigger: counter,
            start: 'top 85%',
            once: true,
            onEnter: () => {
                gsap.to(counter, {
                    innerText: targetVal,
                    duration: 2.2,
                    snap: { innerText: 1 },
                    ease: 'power2.out'
                });
            }
        });
    });

    // Staggered reveal for Service HUD Cards
    gsap.from('.service-hud-card', {
        scrollTrigger: {
            trigger: '.services-hud-grid',
            start: 'top 80%'
        },
        y: 60,
        opacity: 0,
        stagger: 0.15,
        duration: 0.9,
        ease: 'power3.out'
    });

    // Staggered reveal for Courses
    gsap.from('.course-hud-card', {
        scrollTrigger: {
            trigger: '.courses-hud-grid',
            start: 'top 80%'
        },
        y: 50,
        opacity: 0,
        stagger: 0.15,
        duration: 0.8,
        ease: 'power3.out'
    });

    // RFQ Terminal Reveal
    gsap.from('.rfq-terminal-card', {
        scrollTrigger: {
            trigger: '.rfq-terminal-card',
            start: 'top 80%'
        },
        scale: 0.96,
        opacity: 0,
        duration: 1,
        ease: 'power2.out'
    });
}

/* ==========================================================================
   4. 3D Card Tilt Mouse Physics
   ========================================================================== */
function init3DCardTilt() {
    if (window.innerWidth < 1024) return;
    const cards = document.querySelectorAll('.service-hud-card, .hud-visual-card');

    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            const rotateX = -(y / (rect.height / 2)) * 8;
            const rotateY = (x / (rect.width / 2)) * 8;

            gsap.to(card, {
                transformPerspective: 1000,
                rotateX: rotateX,
                rotateY: rotateY,
                duration: 0.3,
                ease: 'power1.out'
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                rotateX: 0,
                rotateY: 0,
                duration: 0.6,
                ease: 'power2.out'
            });
        });
    });
}

/* ==========================================================================
   5. Laser Scanner Animation
   ========================================================================== */
function initLaserScanner() {
    if (typeof gsap === 'undefined') return;
    const scanLine = document.querySelector('.laser-scan-line');
    if (!scanLine) return;

    gsap.to(scanLine, {
        top: '100%',
        duration: 3,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });
}

/* ==========================================================================
   6. GSAP Infinite Client Marquee
   ========================================================================== */
function initMarqueeGSAP() {
    if (typeof gsap === 'undefined') return;
    const strip = document.querySelector('.marquee-strip-hud');
    if (!strip) return;

    gsap.to(strip, {
        xPercent: -50,
        duration: 25,
        repeat: -1,
        ease: 'none'
    });
}

/* ==========================================================================
   7. Academy Category Filter with GSAP Fade
   ========================================================================== */
function initAcademyFilterGSAP() {
    const tabs = document.querySelectorAll('.tab-btn-hud');
    const cards = document.querySelectorAll('.course-hud-card');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const filter = tab.getAttribute('data-filter');

            cards.forEach(card => {
                const category = card.getAttribute('data-category');
                const shouldShow = (filter === 'all' || category === filter);

                if (shouldShow) {
                    card.style.display = 'block';
                    gsap.fromTo(card, 
                        { opacity: 0, scale: 0.95 },
                        { opacity: 1, scale: 1, duration: 0.4, ease: 'power2.out' }
                    );
                } else {
                    gsap.to(card, {
                        opacity: 0,
                        scale: 0.95,
                        duration: 0.3,
                        onComplete: () => { card.style.display = 'none'; }
                    });
                }
            });
        });
    });
}

/* ==========================================================================
   8. RFQ Interactive Terminal & WhatsApp Dispatch
   ========================================================================== */
function initTerminalCalculator() {
    const form = document.getElementById('hudRfqForm');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const clientName = document.getElementById('rfqName').value.trim();
        const clientPhone = document.getElementById('rfqPhone').value.trim();
        const assetType = document.getElementById('rfqAssetType').value;
        const testMethod = document.getElementById('rfqMethod').value;
        const notes = document.getElementById('rfqNotes').value.trim();

        const message = `*IRIS High-Tech Portal Inquiry*\n` +
            `*Client Name:* ${clientName}\n` +
            `*Phone:* ${clientPhone}\n` +
            `*Asset / Component:* ${assetType}\n` +
            `*Inspection / Course Method:* ${testMethod}\n` +
            `*Scope & Details:* ${notes || 'Immediate engineering assessment requested.'}`;

        const encodedMsg = encodeURIComponent(message);
        const waUrl = `https://wa.me/919944674608?text=${encodedMsg}`;

        // Terminal animation feedback
        const btn = document.getElementById('rfqSubmitBtn');
        btn.innerHTML = `<span>DISPATCHING...</span>`;
        
        setTimeout(() => {
            btn.innerHTML = `<span>TRANSMITTED TO WHATSAPP</span>`;
            window.open(waUrl, '_blank');
            setTimeout(() => {
                btn.innerHTML = `<span>SUBMIT SPECIFICATION & CONNECT</span>`;
            }, 3000);
        }, 600);
    });
}

/* ==========================================================================
   9. GSAP Modal Controller
   ========================================================================== */
const COURSE_SYLLABUS_DB = {
    'tpi': {
        title: 'Third Party Inspection (TPI) Engineering Scope',
        badge: 'IBR / ASME Sec VIII Standards',
        bullets: [
            'Boiler & High-Pressure Vessel inspection under IBR regulations',
            'Cross-country transmission pipelines (API 570 / API 1104)',
            'Structural weldments & fabrication shop surveillance',
            'Protective coatings, surface preparation (SSPC) & painting QC'
        ]
    },
    'wqt': {
        title: 'Welder Qualification Testing (WQT) Protocols',
        badge: 'ASME Sec IX / AWS D1.1',
        bullets: [
            'SMAW (Stick), GMAW (MIG/MAG), GTAW (TIG) and SAW qualifications',
            'Plate and pipe coupons up to 50mm thickness',
            'High tensile steel, Austenitic stainless steel and Carbon steel',
            'Non-destructive examination and mechanical destructive bend/tensile tests'
        ]
    },
    'ndt2': {
        title: 'NDT Level II ASNT SNT-TC-1A Comprehensive',
        badge: '6 Industrial Inspection Methods',
        bullets: [
            'Ultrasonic Testing (UT) flaw detectors, angled probes & thickness gauges',
            'Magnetic Particle Inspection (MPI) yoke calibration & wet fluorescent testing',
            'Liquid Penetrant Testing (PT) solvent and water-washable methods',
            'Radiographic Testing (RT) and Film Interpretation (RTFI) flaws evaluation'
        ]
    },
    'advance': {
        title: 'Advanced Phased Array & TOFD Specialist Program',
        badge: 'Master Level Technology',
        bullets: [
            'Phased Array Ultrasonic Testing (PAUT) linear and sectorial scanning',
            'Time of Flight Diffraction (TOFD) defect depth sizing and diffraction signals',
            'Eddy Current Testing (ECT) condenser and heat exchanger tubing evaluation',
            'Plant turnaround corrosion mapping and lifetime assessment'
        ]
    }
};

function initModalsGSAP() {
    const backdrop = document.getElementById('hudModal');
    const closeBtn = document.getElementById('hudModalClose');
    const modalTitle = document.getElementById('hudModalTitle');
    const modalBadge = document.getElementById('hudModalBadge');
    const modalList = document.getElementById('hudModalList');
    const triggers = document.querySelectorAll('[data-hud-modal]');

    if (!backdrop) return;

    triggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const key = btn.getAttribute('data-hud-modal');
            const data = COURSE_SYLLABUS_DB[key];
            if (!data) return;

            modalTitle.textContent = data.title;
            modalBadge.textContent = data.badge;
            modalList.innerHTML = data.bullets.map(b => `
                <li style="display:flex; gap:12px; margin-bottom:12px; color:#CBD5E1; font-family:var(--font-mono); font-size:0.875rem;">
                    <span style="color:var(--cyan);">[+]</span>
                    <span>${b}</span>
                </li>
            `).join('');

            backdrop.style.display = 'flex';
            gsap.fromTo(backdrop, { opacity: 0 }, { opacity: 1, duration: 0.3 });
            gsap.fromTo('.hud-modal-box', 
                { scale: 0.85, opacity: 0, y: 30 }, 
                { scale: 1, opacity: 1, y: 0, duration: 0.4, ease: 'back.out(1.5)' }
            );
        });
    });

    function closeModal() {
        gsap.to(backdrop, {
            opacity: 0,
            duration: 0.25,
            onComplete: () => { backdrop.style.display = 'none'; }
        });
    }

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    backdrop.addEventListener('click', (e) => {
        if (e.target === backdrop) closeModal();
    });
}
