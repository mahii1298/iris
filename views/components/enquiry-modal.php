<!-- Course Detail & Syllabus Modal -->
<div class="modal fade" id="courseDetailModal" tabindex="-1" aria-labelledby="modalCourseTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg rounded-3">
            <div class="modal-header text-white" style="background-color: var(--iris-navy);">
                <div>
                    <span class="badge bg-primary px-3 py-1 font-mono text-uppercase mb-1" id="modalCourseLevel">Level –II</span>
                    <h4 class="modal-title font-display fs-5" id="modalCourseTitle">Course Details</h4>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <span class="text-uppercase text-muted fw-bold d-block small mb-1">Required Duration:</span>
                            <strong class="fs-6 text-primary" id="modalCourseDuration">18 Days (8 Hours/Day)</strong>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <span class="text-uppercase text-muted fw-bold d-block small mb-1">Examination Venue:</span>
                            <strong class="fs-6 text-dark" id="modalCourseExam"><?= EXAM_CENTRE ?></strong>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <h5 class="fs-6 fw-bold text-dark mb-2">Program Overview:</h5>
                    <p class="text-secondary" id="modalCourseDesc" style="line-height: 1.7;"></p>
                </div>

                <div class="p-3 bg-primary-subtle rounded-3 border border-primary-subtle mb-3">
                    <h5 class="fs-6 fw-bold text-primary mb-1">Techniques Taught:</h5>
                    <p class="mb-0 text-dark small" id="modalCourseTech"></p>
                </div>

                <div class="p-3 bg-warning-subtle rounded-3 border border-warning-subtle mb-4">
                    <h5 class="fs-6 fw-bold text-dark mb-1">Sectors Covered (Welding, Casting & Forging):</h5>
                    <p class="mb-0 text-dark small" id="modalCourseSectors"></p>
                </div>

                <div class="d-flex justify-content-end gap-2 flex-wrap">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" id="modalWhatsAppBtn" target="_blank" class="btn btn-iris-primary">
                        Enquire / Register on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
