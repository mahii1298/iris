/**
 * IRIS (Integrity Reliability Inspection Service)
 * Core Interactive Scripts & Features
 */

document.addEventListener('DOMContentLoaded', () => {
    initNavigation();
    initStatsCounter();
    initPillarSwitcher();
    initCourseFiltering();
    initModals();
    initInquiryForm();
    initScrollReveal();
});

/* ==========================================================================
   Navigation & Mobile Drawer
   ========================================================================== */
function initNavigation() {
    const navbar = document.querySelector('.navbar');
    const mobileToggle = document.getElementById('mobileToggle');
    const navMenu = document.getElementById('navMenu');
    const navLinks = document.querySelectorAll('.nav-link');

    // Sticky navbar on scroll
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        updateActiveNavLink();
    });

    // Mobile menu toggle
    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('open');
            const isOpen = navMenu.classList.contains('open');
            mobileToggle.innerHTML = isOpen 
                ? '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>'
                : '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>';
        });

        // Close mobile menu on link click
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('open');
                mobileToggle.innerHTML = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>';
            });
        });
    }

    // ScrollSpy active link updater
    function updateActiveNavLink() {
        const sections = document.querySelectorAll('section[id], div[id]');
        const scrollPosition = window.scrollY + 120;

        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            const id = section.getAttribute('id');

            if (scrollPosition >= top && scrollPosition < top + height) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }
}

/* ==========================================================================
   Animated Numbers Counter
   ========================================================================== */
function initStatsCounter() {
    const statNumbers = document.querySelectorAll('.stat-number');
    let hasAnimated = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated) {
                hasAnimated = true;
                statNumbers.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-target'), 10);
                    const duration = 2000;
                    const stepTime = 20;
                    const steps = duration / stepTime;
                    const increment = target / steps;
                    let current = 0;

                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            counter.textContent = target.toLocaleString();
                            clearInterval(timer);
                        } else {
                            counter.textContent = Math.floor(current).toLocaleString();
                        }
                    }, stepTime);
                });
            }
        });
    }, { threshold: 0.3 });

    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        observer.observe(statsSection);
    }
}

/* ==========================================================================
   Dual Pillar Switcher (Commercial Inspection vs Training Academy)
   ========================================================================== */
function initPillarSwitcher() {
    const tabButtons = document.querySelectorAll('.pillar-tab-btn');
    const inspectionSection = document.getElementById('services');
    const academySection = document.getElementById('academy');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            tabButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const targetPillar = button.getAttribute('data-pillar');
            if (targetPillar === 'services' && inspectionSection) {
                inspectionSection.scrollIntoView({ behavior: 'smooth' });
            } else if (targetPillar === 'academy' && academySection) {
                academySection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
}

/* ==========================================================================
   Course Directory & Filtering
   ========================================================================== */
const COURSE_DETAILS = {
    'qa-qc': {
        title: 'QA/QC Engineering Certification',
        level: 'Professional Certification',
        duration: '4 to 6 Weeks (Full-Time / Part-Time)',
        eligibility: 'Diploma / B.E / B.Tech in Mechanical, Automobile, Metallurgy or Production Engineering',
        overview: 'Comprehensive Quality Assurance and Quality Control program tailored for pressure vessels, piping, structural fabrications, and offshore construction.',
        syllabus: [
            'Welding Technology & Metallurgy fundamentals',
            'Welding Inspection Standards (ASME Sec IX, AWS D1.1, API 1104)',
            'Painting & Protective Coating Inspection (SSPC, NACE standards)',
            'WPS (Welding Procedure Specification) & PQR preparation and review',
            'Material Test Reports (MTR) and traceability verification',
            'Documentation, NDT coordination, and Final Dossier preparation'
        ]
    },
    'ndt-level-2': {
        title: 'NDT Level II Certification (ASNT SNT-TC-1A)',
        level: 'Industry Certified NDT Inspector',
        duration: '3 to 5 Weeks (Intensive Practical + Theory)',
        eligibility: 'Engineering graduates, diploma holders, science graduates, or experienced technicians',
        overview: 'Comprehensive training covering all primary non-destructive testing disciplines with extensive hands-on laboratory practicals on real industrial defect specimens.',
        syllabus: [
            'Ultrasonic Testing (UT): Pulse-echo method, angle beam shear wave inspection, calibration blocks (V1, V2, ASME)',
            'Magnetic Particle Inspection (MPI): Wet fluorescent & dry powder techniques, yoke calibration',
            'Liquid Penetrant Testing (PT): Solvent removable, water washable & post-emulsifiable methods',
            'Radiographic Testing (RT): Radiation safety, exposure charts, sensitivity calculations',
            'Radiographic Film Interpretation (RTFI): Flaw sizing, defect categorization in accordance with ASME codes',
            'Visual Testing (VT): Direct and remote inspection, weld gauges, defect evaluation criteria'
        ]
    },
    'advance-ndt': {
        title: 'Advanced NDT Technologies',
        level: 'Master Specialist Program',
        duration: '3 to 4 Weeks',
        eligibility: 'Certified NDT Level II personnel with field inspection experience',
        overview: 'Master modern advanced digital inspection techniques utilized in mission-critical aerospace, nuclear, pipeline, and power-generation facilities.',
        syllabus: [
            'Phased Array Ultrasonic Testing (PAUT): Sectorial & linear scanning, focal law generation',
            'Time of Flight Diffraction (TOFD): High-precision defect sizing and depth profiling',
            'Eddy Current Testing (ECT): Tube inspection, impedance planes, conductivity testing',
            'In-Service & Pre-Service Inspection Activities: Plant shutdown and turnaround procedures',
            'Digital Corrosion Mapping & Remaining Life Assessment'
        ]
    },
    'ndt-level-3': {
        title: 'NDT Level III Preparatory Training',
        level: 'Consultant & Executive Level',
        duration: 'Flexible Schedule / Executive Mentorship',
        eligibility: 'Experienced Level II NDT Inspectors or Senior Quality Managers',
        overview: 'Preparation for ASNT NDT Level III examination covering Basic, Method, and Procedure writing with guidance from senior industry intellects.',
        syllabus: [
            'ASNT Basic Examination preparation (Materials & Processes, SNT-TC-1A, CP-189)',
            'Method Specific Training: UT, MT, PT, RT, and VT advanced theory',
            'Written Practice generation and company-specific NDT program drafting',
            'NDT procedure writing and compliance validation to ASME, ASTM, and API codes',
            'Mock examinations, case studies, and failure analysis reviews'
        ]
    },
    'welder-qual': {
        title: 'Welder Qualification Testing (WQT) & Training',
        level: 'Industrial Skill Certification',
        duration: 'Customized based on process requirement',
        eligibility: 'Welders, operators, and technicians seeking third-party certification',
        overview: 'Certification and testing under AWS, ASME Sec IX, and IBR standards across multiple processes and exotic metals.',
        syllabus: [
            'Shielded Metal Arc Welding (SMAW / Stick)',
            'Gas Metal Arc Welding (GMAW / MIG)',
            'Gas Tungsten Arc Welding (GTAW / TIG)',
            'Submerged Arc Welding (SAW) for thick plate fabrications up to 50mm',
            'Bend tests, tensile tests, macro-etching, and non-destructive examination compliance'
        ]
    },
    'tpi-services': {
        title: 'Third Party Inspection (TPI) Consultancy',
        level: 'Commercial Industrial Service',
        duration: 'Per Project / Plant Turnaround',
        eligibility: 'For EPC Contractors, Fabricators, Refineries, and Power Plants',
        overview: 'Independent third-party verification ensuring vendor compliance, structural safety, and adherence to international design codes.',
        syllabus: [
            'Boiler & Pressure Vessel Inspection (IBR, ASME Sec VIII)',
            'In-Service Cross-Country Pipeline Inspection (API 570, API 1104)',
            'Sand Blasting & Industrial Painting Quality Assurance',
            'Heavy Structural Steel Fabrication & Erection Inspection',
            'Vendor assessment, stage-wise inspection, and factory acceptance test (FAT)'
        ]
    }
};

function initCourseFiltering() {
    const filterButtons = document.querySelectorAll('.filter-pill');
    const courseCards = document.querySelectorAll('.course-card');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const selectedCategory = btn.getAttribute('data-filter');

            courseCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                    card.style.display = 'flex';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(15px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 250);
                }
            });
        });
    });
}

/* ==========================================================================
   Interactive Modals
   ========================================================================== */
function initModals() {
    const backdrop = document.getElementById('modalBackdrop');
    const closeBtn = document.getElementById('modalCloseBtn');
    const modalTitle = document.getElementById('modalTitle');
    const modalContent = document.getElementById('modalContent');
    const viewButtons = document.querySelectorAll('[data-action="view-course"]');

    function openModal(courseKey) {
        const data = COURSE_DETAILS[courseKey];
        if (!data || !backdrop) return;

        modalTitle.textContent = data.title;
        
        let syllabusHtml = data.syllabus.map(item => `
            <li style="display: flex; gap: 10px; margin-bottom: 10px; color: #CBD5E1; font-size: 0.9rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#06B6D4" stroke-width="2.5" style="flex-shrink:0; margin-top:2px;">
                    <path d="M20 6L9 17l-5-5"/>
                </svg>
                <span>${item}</span>
            </li>
        `).join('');

        modalContent.innerHTML = `
            <div style="margin-bottom: 20px;">
                <span class="section-tag blue" style="margin-bottom: 10px;">${data.level}</span>
                <p style="color: #94A3B8; font-size: 0.95rem; line-height: 1.6; margin-top: 8px;">${data.overview}</p>
            </div>

            <div style="background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 18px; margin-bottom: 24px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; font-size: 0.85rem;">
                    <div>
                        <strong style="color: #F59E0B; display: block; margin-bottom: 4px; font-family: var(--font-mono);">DURATION</strong>
                        <span style="color: #F8FAFC;">${data.duration}</span>
                    </div>
                    <div>
                        <strong style="color: #F59E0B; display: block; margin-bottom: 4px; font-family: var(--font-mono);">ELIGIBILITY</strong>
                        <span style="color: #F8FAFC;">${data.eligibility}</span>
                    </div>
                </div>
            </div>

            <h4 style="font-size: 1.1rem; margin-bottom: 14px; color: #FFFFFF;">Key Curriculum Modules</h4>
            <ul style="margin-bottom: 28px;">
                ${syllabusHtml}
            </ul>

            <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                <a href="https://wa.me/919944674608?text=Hello%20IRIS%20Trichy,%20I%20would%20like%20more%20information%20about%20the%20${encodeURIComponent(data.title)}." 
                   target="_blank" 
                   class="btn btn-primary" 
                   style="flex: 1;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    Apply / Inquire via WhatsApp
                </a>
                <button onclick="document.getElementById('modalBackdrop').classList.remove('active'); document.getElementById('contact').scrollIntoView({behavior: 'smooth'});" 
                        class="btn btn-outline">
                    Request Prospectus
                </button>
            </div>
        `;

        backdrop.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        if (!backdrop) return;
        backdrop.classList.remove('active');
        document.body.style.overflow = '';
    }

    viewButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const courseKey = btn.getAttribute('data-course-id');
            openModal(courseKey);
        });
    });

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (backdrop) {
        backdrop.addEventListener('click', (e) => {
            if (e.target === backdrop) closeModal();
        });
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
    });
}

/* ==========================================================================
   Dual-Mode Lead Generation / Inquiry Form
   ========================================================================== */
function initInquiryForm() {
    const formTabButtons = document.querySelectorAll('.form-tab-btn');
    const formTypeInput = document.getElementById('formType');
    const serviceSelectionGroup = document.getElementById('serviceSelectionGroup');
    const inquiryForm = document.getElementById('inquiryForm');
    const formSuccessAlert = document.getElementById('formSuccessAlert');

    formTabButtons.forEach(tabBtn => {
        tabBtn.addEventListener('click', () => {
            formTabButtons.forEach(btn => btn.classList.remove('active'));
            tabBtn.classList.add('active');

            const mode = tabBtn.getAttribute('data-tab');
            if (formTypeInput) formTypeInput.value = mode;

            if (mode === 'inspection') {
                serviceSelectionGroup.innerHTML = `
                    <label class="form-label">Select Inspection Service</label>
                    <select class="form-control" name="interest" id="interestField" required>
                        <option value="Third Party Inspection (TPI)">Third Party Inspection (TPI - Boilers / Vessels)</option>
                        <option value="Welder Qualification Testing (WQT)">Welder Qualification Testing (WQT - GMAW/SAW/GTAW)</option>
                        <option value="Ultrasonic Testing (UT)">Ultrasonic Testing (UT)</option>
                        <option value="Radiography & Film Interpretation (RT/RTFI)">Radiography Testing (RT/RTFI)</option>
                        <option value="Magnetic Particle Testing (MPI)">Magnetic Particle Inspection (MPI)</option>
                        <option value="Liquid Penetrant Testing (PT)">Liquid Penetrant Testing (PT)</option>
                        <option value="Advanced NDT (PAUT / TOFD / ECT)">Advanced NDT (PAUT / TOFD / ECT)</option>
                    </select>
                `;
            } else {
                serviceSelectionGroup.innerHTML = `
                    <label class="form-label">Select Training Program</label>
                    <select class="form-control" name="interest" id="interestField" required>
                        <option value="NDT Level II Certification (6 Methods)">NDT Level II (UT, MPI, PT, RT, RTFI, VT)</option>
                        <option value="QA/QC Welding & Painting Inspection">QA/QC Welding & Painting Inspection</option>
                        <option value="Advanced NDT (PAUT, TOFD, ECT)">Advanced NDT (PAUT, TOFD, ECT)</option>
                        <option value="NDT Level III Preparatory Masterclass">NDT Level III Preparatory Masterclass</option>
                        <option value="Welder Certification Course">Practical Welder Skill Certification</option>
                    </select>
                `;
            }
        });
    });

    if (inquiryForm) {
        inquiryForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const name = document.getElementById('fullName').value.trim();
            const phone = document.getElementById('phoneNumber').value.trim();
            const email = document.getElementById('emailAddress').value.trim();
            const interest = document.getElementById('interestField').value;
            const message = document.getElementById('inquiryNotes').value.trim();
            const mode = formTypeInput ? formTypeInput.value : 'inspection';

            // Construct WhatsApp Message
            const whatsappText = `*IRIS Trichy Inquiry - Website Form*\n` +
                `*Name:* ${name}\n` +
                `*Contact Phone:* ${phone}\n` +
                `*Email:* ${email || 'N/A'}\n` +
                `*Type:* ${mode === 'inspection' ? 'Industrial Inspection Quote' : 'Training Enrollment'}\n` +
                `*Selected Program/Service:* ${interest}\n` +
                `*Requirements:* ${message || 'Please contact me with more information.'}`;

            const encodedWa = encodeURI(whatsappText);
            const whatsappUrl = `https://wa.me/919944674608?text=${encodedWa}`;

            // Show confirmation UI
            if (formSuccessAlert) {
                formSuccessAlert.style.display = 'block';
                formSuccessAlert.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }

            // Provide direct one-click WhatsApp send
            setTimeout(() => {
                window.open(whatsappUrl, '_blank');
            }, 800);
        });
    }
}

/* ==========================================================================
   Scroll Reveal Animations
   ========================================================================== */
function initScrollReveal() {
    const revealElements = document.querySelectorAll('.reveal-fade-up');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, { threshold: 0.15 });

    revealElements.forEach(el => observer.observe(el));
}
