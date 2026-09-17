/**
 * IRIS MVC Application - Frontend Scripts
 */

document.addEventListener('DOMContentLoaded', () => {
    initNavbarScroll();
    initAnimatedCounters();
    initCourseFilter();
    initWhatsAppForm();
});

function initNavbarScroll() {
    const navbar = document.querySelector('.navbar-iris');
    if (!navbar) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

function initAnimatedCounters() {
    const counters = document.querySelectorAll('.metric-val-num');
    let animated = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !animated) {
                animated = true;
                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-count'), 10);
                    const duration = 2000;
                    const steps = 50;
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

    const metricStrip = document.querySelector('.metrics-strip');
    if (metricStrip) observer.observe(metricStrip);
}

function initCourseFilter() {
    const buttons = document.querySelectorAll('.btn-course-filter');
    const items = document.querySelectorAll('.course-filter-item');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.classList.remove('active', 'btn-iris-primary'));
            buttons.forEach(b => b.classList.add('btn-iris-outline'));

            btn.classList.add('active', 'btn-iris-primary');
            btn.classList.remove('btn-iris-outline');

            const filter = btn.getAttribute('data-filter');

            items.forEach(item => {
                const category = item.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
}

function openCourseModal(title, level, duration, hours, examCentre, description, techniques, sectors) {
    document.getElementById('modalCourseTitle').textContent = title;
    document.getElementById('modalCourseLevel').textContent = level;
    document.getElementById('modalCourseDuration').textContent = duration + ' (' + hours + ')';
    document.getElementById('modalCourseExam').textContent = examCentre;
    document.getElementById('modalCourseDesc').textContent = description;
    document.getElementById('modalCourseTech').textContent = techniques;
    document.getElementById('modalCourseSectors').textContent = sectors;

    const waBtn = document.getElementById('modalWhatsAppBtn');
    if (waBtn) {
        const text = encodeURIComponent(`Hello IRIS Trichy, I would like to inquire about the ${title} (${level}) course.`);
        waBtn.href = `https://wa.me/919944674608?text=${text}`;
    }

    const modalElement = document.getElementById('courseDetailModal');
    if (modalElement && typeof bootstrap !== 'undefined') {
        const modalInstance = new bootstrap.Modal(modalElement);
        modalInstance.show();
    }
}

function initWhatsAppForm() {
    const form = document.getElementById('irisEnquiryForm');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = document.getElementById('enqName').value.trim();
        const phone = document.getElementById('enqPhone').value.trim();
        const email = document.getElementById('enqEmail').value.trim();
        const course = document.getElementById('enqCourse').value;
        const type = document.getElementById('enqType').value;
        const msg = document.getElementById('enqMessage').value.trim();

        const waText = `*IRIS Trichy - Web Enquiry & Registration*\n` +
            `*Name:* ${name}\n` +
            `*Phone:* ${phone}\n` +
            `*Email:* ${email || 'N/A'}\n` +
            `*Category:* ${type}\n` +
            `*Selected Program / Service:* ${course}\n` +
            `*Message:* ${msg || 'Please provide details on syllabus and fee structure.'}`;

        const url = `https://wa.me/919944674608?text=${encodeURIComponent(waText)}`;
        window.open(url, '_blank');
    });
}
