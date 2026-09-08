/**
 * IRIS Design Variant 3 - International Corporate Light Theme Engine
 */

document.addEventListener('DOMContentLoaded', () => {
    initCorpNavbar();
    initCorpCounters();
    initCorpCourseFilter();
    initCorpModal();
    initCorpForm();
});

function initCorpNavbar() {
    const navbar = document.querySelector('.navbar-corp');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 30) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

function initCorpCounters() {
    const counters = document.querySelectorAll('.corp-counter');
    let triggered = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !triggered) {
                triggered = true;
                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-target'), 10);
                    const duration = 1800;
                    const steps = 60;
                    const stepVal = target / steps;
                    let current = 0;

                    const timer = setInterval(() => {
                        current += stepVal;
                        if (current >= target) {
                            counter.textContent = target.toLocaleString();
                            clearInterval(timer);
                        } else {
                            counter.textContent = Math.floor(current).toLocaleString();
                        }
                    }, duration / steps);
                });
            }
        });
    }, { threshold: 0.3 });

    const metricBar = document.querySelector('.metrics-corp-bar');
    if (metricBar) observer.observe(metricBar);
}

function initCorpCourseFilter() {
    const filterButtons = document.querySelectorAll('.filter-btn-corp');
    const courseCards = document.querySelectorAll('.course-corp-card');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const selected = btn.getAttribute('data-filter');

            courseCards.forEach(card => {
                const cat = card.getAttribute('data-category');
                if (selected === 'all' || cat === selected) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}

const CORP_SYLLABUS = {
    'tpi': {
        title: 'Third Party Inspection (TPI) Accreditation Standards',
        standard: 'ASME Sec VIII / IBR / API 570',
        points: [
            'Independent vendor surveillance & fabrication audit',
            'Pressure vessel & boiler hydrotesting compliance under IBR',
            'Cross-country transmission pipeline weldment testing',
            'Protective industrial painting & coating inspection (SSPC/NACE)'
        ]
    },
    'wqt': {
        title: 'Welder Qualification Testing (WQT) Procedure',
        standard: 'ASME Sec IX / AWS D1.1',
        points: [
            'WPS & PQR development, validation, and review',
            'SMAW, GMAW (MIG), GTAW (TIG), and SAW processes',
            'Carbon steel, austenitic stainless steel, and alloy plates up to 50mm',
            'Radiographic examination & destructive tensile/bend test reports'
        ]
    },
    'qaqc': {
        title: 'QA/QC Welding & Coating Engineering Program',
        standard: 'International Quality Assurance Curriculum',
        points: [
            'Welding metallurgy, defects etiology, and joint configurations',
            'Interpretation of ASME, AWS, and API fabrication codes',
            'Surface preparation, blast profiles, and dry film thickness (DFT) QC',
            'Quality Dossier compilation, NDT reports, and final client sign-off'
        ]
    },
    'ndt2': {
        title: 'NDT Level II Certification (6 Testing Disciplines)',
        standard: 'ASNT SNT-TC-1A Certified',
        points: [
            'Ultrasonic Testing (UT) flaw detection & angle probe shear wave scanning',
            'Magnetic Particle Inspection (MPI) yoke calibration and flaw identification',
            'Liquid Penetrant Testing (PT) fluorescent and color-contrast methods',
            'Radiography Testing (RT) and Film Interpretation (RTFI) flaws classification'
        ]
    }
};

function initCorpModal() {
    const modal = document.getElementById('corpModal');
    const closeBtn = document.getElementById('corpModalClose');
    const title = document.getElementById('corpModalTitle');
    const standard = document.getElementById('corpModalStandard');
    const list = document.getElementById('corpModalList');
    const triggers = document.querySelectorAll('[data-corp-modal]');

    if (!modal) return;

    triggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const key = btn.getAttribute('data-corp-modal');
            const item = CORP_SYLLABUS[key];
            if (!item) return;

            title.textContent = item.title;
            standard.textContent = item.standard;
            list.innerHTML = item.points.map(p => `
                <li style="display: flex; gap: 10px; margin-bottom: 10px; color: #334155; font-size: 0.9rem;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0052CC" stroke-width="2.5" style="flex-shrink:0; margin-top:2px;">
                        <path d="M20 6L9 17l-5-5"/>
                    </svg>
                    <span>${p}</span>
                </li>
            `).join('');

            modal.style.display = 'flex';
        });
    });

    function close() { modal.style.display = 'none'; }
    if (closeBtn) closeBtn.addEventListener('click', close);
    modal.addEventListener('click', (e) => { if (e.target === modal) close(); });
}

function initCorpForm() {
    const form = document.getElementById('corpContactForm');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = document.getElementById('corpName').value.trim();
        const phone = document.getElementById('corpPhone').value.trim();
        const org = document.getElementById('corpOrg').value.trim();
        const service = document.getElementById('corpService').value;
        const msg = document.getElementById('corpMessage').value.trim();

        const waText = `*IRIS Trichy - Corporate Consultation Request*\n` +
            `*Representative:* ${name}\n` +
            `*Organization:* ${org || 'Not Specified'}\n` +
            `*Contact Phone:* ${phone}\n` +
            `*Scope of Work:* ${service}\n` +
            `*Notes:* ${msg || 'Immediate technical discussion requested.'}`;

        const waUrl = `https://wa.me/919944674608?text=${encodeURIComponent(waText)}`;
        window.open(waUrl, '_blank');
    });
}
