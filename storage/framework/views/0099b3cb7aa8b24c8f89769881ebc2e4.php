<?php $__env->startSection('content'); ?>

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Questions for Exam: <?php echo e($exam->title); ?>

                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="<?php echo e(route('exams.index')); ?>" class="text-muted text-hover-primary">Exams</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Questions</li>
                    </ul>
                </div>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if(\Session::has('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(\Session::get('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <!--end::Toolbar-->

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="d-flex flex-wrap flex-stack my-5">
                    <h2 class="fs-2 fw-semibold my-2">
                        Manage Questions
                        <span class="fs-6 text-gray-400 ms-1">for <?php echo e($exam->title); ?></span>
                    </h2>
                </div>

                <!--begin::Card-->
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_question">
                                    <i class="ki-duotone ki-plus fs-2"></i> Add New Question
                                </button>
                            </div>

                            <!--begin::Modal - Add question-->
                            <div class="modal fade" id="kt_modal_add_question" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered mw-900px">
                                    <div class="modal-content">
                                        <div class="modal-header" id="kt_modal_add_question_header">
                                            <h2 class="fw-bold">Add New Question</h2>
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                        </div>
                                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                            <form id="kt_modal_add_question_form" class="form" action="<?php echo e(route('questions.store', $exam->id)); ?>" method="POST" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="exam_id" value="<?php echo e($exam->id); ?>">

                                                <div id="questions-container">
                                                    <div class="question-field mb-7 border p-5 rounded">
                                                        <div class="fv-row mb-7">
                                                            <label class="required fw-semibold fs-6 mb-2">Question Text</label>
                                                            <textarea name="question_text" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter question text..." rows="3" required></textarea>
                                                        </div>
                                                        <div class="fv-row mb-7">
                                                            <label class="required fw-semibold fs-6 mb-2">Question Type</label>
                                                            <select name="type" class="form-control form-control-solid mb-3 mb-lg-0 question-type" required>
                                                                <option value="" disabled selected>Select a type</option>
                                                                <option value="mcq">Multiple Choice (MCQ)</option>
                                                                <option value="true_false">True/False</option>
                                                                <option value="short_answer">Short Answer</option>
                                                            </select>
                                                        </div>

                                                        <!-- Image Upload -->
                                                        <div class="fv-row mb-7">
                                                            <label class="fw-semibold fs-6 mb-2">Upload Image (Optional)</label>
                                                            <input type="file" name="image" class="form-control form-control-solid mb-3 mb-lg-0" accept="image/*" />
                                                            <div id="image-preview" class="mt-3" style="display: none;">
                                                                <img id="preview-img" src="#" alt="Image Preview" style="max-width: 200px; max-height: 200px;">
                                                            </div>
                                                        </div>

                                                        <!-- MCQ Options -->
                                                        <div class="mcq-options options-container" style="display: none;">
                                                            <h4 class="fw-bold mb-5">Options (A-E, at least 2 required)</h4>
                                                            <div class="options-fields">
                                                                <div class="option-field mb-5">
                                                                    <div class="d-flex align-items-center">
                                                                        <label class="fw-semibold me-3">A:</label>
                                                                        <input type="text" name="options[a][option_text]" class="form-control form-control-solid me-3" placeholder="Enter option A..." />
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input is-correct" type="radio" name="correct_option" value="a" />
                                                                            <label class="form-check-label">Correct</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="option-field mb-5">
                                                                    <div class="d-flex align-items-center">
                                                                        <label class="fw-semibold me-3">B:</label>
                                                                        <input type="text" name="options[b][option_text]" class="form-control form-control-solid me-3" placeholder="Enter option B..." />
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input is-correct" type="radio" name="correct_option" value="b" />
                                                                            <label class="form-check-label">Correct</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="option-field mb-5">
                                                                    <div class="d-flex align-items-center">
                                                                        <label class="fw-semibold me-3">C:</label>
                                                                        <input type="text" name="options[c][option_text]" class="form-control form-control-solid me-3" placeholder="Enter option C..." />
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input is-correct" type="radio" name="correct_option" value="c" />
                                                                            <label class="form-check-label">Correct</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="option-field mb-5">
                                                                    <div class="d-flex align-items-center">
                                                                        <label class="fw-semibold me-3">D:</label>
                                                                        <input type="text" name="options[d][option_text]" class="form-control form-control-solid me-3" placeholder="Enter option D..." />
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input is-correct" type="radio" name="correct_option" value="d" />
                                                                            <label class="form-check-label">Correct</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="option-field mb-5">
                                                                    <div class="d-flex align-items-center">
                                                                        <label class="fw-semibold me-3">E:</label>
                                                                        <input type="text" name="options[e][option_text]" class="form-control form-control-solid me-3" placeholder="Enter option E..." />
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input is-correct" type="radio" name="correct_option" value="e" />
                                                                            <label class="form-check-label">Correct</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- True/False Options -->
                                                        <div class="tf-options options-container" style="display: none;">
                                                            <h4 class="fw-bold mb-5">Options</h4>
                                                            <div class="options-fields">
                                                                <div class="option-field mb-5">
                                                                    <div class="d-flex align-items-center">
                                                                        <input type="hidden" name="options[true][option_text]" value="True">
                                                                        <label class="fw-semibold me-3">True</label>
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input is-correct" type="radio" name="correct_option" value="true" />
                                                                            <label class="form-check-label">Correct</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="option-field mb-5">
                                                                    <div class="d-flex align-items-center">
                                                                        <input type="hidden" name="options[false][option_text]" value="False">
                                                                        <label class="fw-semibold me-3">False</label>
                                                                        <div class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input is-correct" type="radio" name="correct_option" value="false" />
                                                                            <label class="form-check-label">Correct</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Short Answer Correct Answer -->
                                                        <div class="sa-options options-container" style="display: none;">
                                                            <h4 class="fw-bold mb-5">Correct Answer</h4>
                                                            <div class="fv-row mb-7">
                                                                <textarea name="options[answer][option_text]" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter the correct answer..." rows="3"></textarea>
                                                                <!-- Removed hidden correct_option input -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Hidden input for correct_option, managed by JavaScript -->
                                                <input type="hidden" name="correct_option" id="correct_option_hidden" value="">

                                                <div class="text-center pt-15">
                                                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                                    <button type="submit" id="submit-btn" class="btn btn-primary">
                                                        <span class="indicator-label">Submit</span>
                                                        <span class="indicator-progress" style="display: none;">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Modal - Add question-->

                            <div class="modal fade" id="questionModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title fw-bold">Question Details</h3>
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                        </div>
                                        <div class="modal-body p-0" id="questionModalBody">
                                            <!-- Content will be loaded here via JavaScript -->
                                            <div class="d-flex align-items-center justify-content-center min-h-200px">
                                                <div class="spinner-border text-primary" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- Edit Question Modal -->
                        <div class="modal fade" id="kt_modal_edit_question" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered mw-900px">
                                <div class="modal-content">
                                    <div class="modal-header" id="kt_modal_edit_question_header">
                                        <h2 class="fw-bold">Edit Question</h2>
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                        </div>
                                    </div>
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <form id="kt_modal_edit_question_form" class="form" action="" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <input type="hidden" name="exam_id" id="edit_exam_id">

                                            <div class="question-field mb-7 border p-5 rounded">
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">Question Text</label>
                                                    <textarea name="question_text" id="edit_question_text" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter question text..." rows="3" required></textarea>
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">Question Type</label>
                                                    <select name="type" id="edit_question_type" class="form-control form-control-solid mb-3 mb-lg-0 question-type" readonly>
                                                        <option value="mcq">Multiple Choice (MCQ)</option>
                                                        <option value="true_false">True/False</option>
                                                        <option value="short_answer">Short Answer</option>
                                                    </select>
                                                    <div class="form-text text-muted">Question type cannot be changed after creation.</div>
                                                </div>

                                                <!-- Image Upload -->
                                                <div class="fv-row mb-7">
                                                    <label class="fw-semibold fs-6 mb-2">Upload Image (Optional)</label>
                                                    <div class="d-flex flex-column">
                                                        <div id="edit_current_image" class="mb-3">
                                                            <!-- Current image will be displayed here -->
                                                        </div>
                                                        <input type="file" name="image" id="edit_image" class="form-control form-control-solid mb-3 mb-lg-0" accept="image/*" />
                                                        <div id="edit_image_preview" class="mt-3" style="display: none;">
                                                            <img id="edit_preview_img" src="#" alt="Image Preview" style="max-width: 200px; max-height: 200px;">
                                                        </div>
                                                        <div class="form-check form-check-custom form-check-solid mt-2">
                                                            <input class="form-check-input" type="checkbox" name="remove_image" id="remove_image_checkbox" />
                                                            <label class="form-check-label" for="remove_image_checkbox">
                                                                Remove current image
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Options containers for different question types -->
                                                <!-- MCQ Options -->
                                                <div id="edit_mcq_options" class="options-container" style="display: none;">
                                                    <h4 class="fw-bold mb-5">Options (A-E, at least 2 required)</h4>
                                                    <div class="options-fields">
                                                        <!-- Option fields will be populated via JavaScript -->
                                                    </div>
                                                </div>

                                                <!-- True/False Options -->
                                                <div id="edit_tf_options" class="options-container" style="display: none;">
                                                    <h4 class="fw-bold mb-5">Options</h4>
                                                    <div class="options-fields">
                                                        <!-- Options will be populated via JavaScript -->
                                                    </div>
                                                </div>

                                                <!-- Short Answer Correct Answer -->
                                                <div id="edit_sa_options" class="options-container" style="display: none;">
                                                    <h4 class="fw-bold mb-5">Correct Answer</h4>
                                                    <div class="fv-row mb-7">
                                                        <textarea name="options[answer][option_text]" id="edit_sa_answer" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter the correct answer..." rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="correct_option" id="edit_correct_option" value="">

                                            <div class="text-center pt-15">
                                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" id="edit_submit_btn" class="btn btn-primary">
                                                    <span class="indicator-label">Update</span>
                                                    <span class="indicator-progress" style="display: none;">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="kt_modal_delete_question" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <div class="modal-content">
                                    <div class="modal-header pb-0 border-0 justify-content-end">
                                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                        </div>
                                    </div>
                                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                        <div class="text-center">
                                            <i class="ki-duotone ki-warning fs-5tx text-warning mb-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <div class="d-flex flex-column mb-10">
                                                <h2 class="mb-5">Are you sure?</h2>
                                                <div class="text-muted fs-6">
                                                    This will permanently delete this question and its options. This action cannot be undone.
                                                </div>
                                            </div>
                                            <form id="delete_question_form" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">
                                                    <span class="indicator-label">Yes, Delete</span>
                                                    <span class="indicator-progress d-none">
                                                        Deleting... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                            


                            
                        </div>
                    </div>

                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_questions_table">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_questions_table .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-50px">ID</th>
                                    <th class="min-w-300px">Question Text</th>
                                    <th class="min-w-100px">Type</th>
                                    <th class="min-w-100px">Image</th>
                                    <th class="min-w-100px">Options</th>
                                    <th class="min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <?php $i = 0 ?>
                                <?php $__currentLoopData = $exam->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td><?php echo e(++$i); ?></td>
                                    <td><?php echo e(Str::limit($question->question_text, 50)); ?></td>
                                    <td><?php echo e(ucfirst(str_replace('_', ' ', $question->type))); ?></td>
                                    <td>
                                        <?php if($question->image): ?>
                                        
                                            <img src="<?php echo e(asset('storage/' . $question->image)); ?>" alt="Question Image" style="max-width: 100px; max-height: 100px;">
                                           
                                        <?php else: ?>
                                            No Image
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($question->options->count()); ?></td>
                                    <td>
                                      
                                               <div class="d-flex justify-content-end">
                                                    <!-- View Button -->
                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 view-question" 
                                                    data-id="<?php echo e($question->id); ?>" title="View">view
                                                        <i class="ki-duotone ki-eye fs-2"></i>
                                                    </a>
                                                    
                                                    <!-- Edit Button -->
                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 edit-question" 
                                                    data-id="<?php echo e($question->id); ?>" title="Edit">Edit
                                                        <i class="ki-duotone ki-pencil fs-2"></i>
                                                    </a>
                                                    
                                                    <!-- Delete Button -->
                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm delete-question" 
                                                    data-id="<?php echo e($question->id); ?>" title="Delete">Delete
                                                        <i class="ki-duotone ki-trash fs-2"></i>
                                                    </a>
                                                </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
</div>



<!-- JavaScript to handle the modal -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // View Question Modal
    document.querySelectorAll('.view-question').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const questionId = this.getAttribute('data-id');
            
            // Show the modal
            const modal = new bootstrap.Modal(document.getElementById('questionModal'));
            modal.show();
            
            // Fetch question details via AJAX
            fetch(`/questions/${questionId}/details`)
                .then(response => response.json())
                .then(data => {
                    // Format the question display with better UI
                    let html = `
                        <div class="card card-bordered shadow-none mb-0">
                            <div class="card-header bg-light">
                                <h4 class="card-title fw-bold">Question</h4>
                            </div>
                            <div class="card-body">
                                <div class="fs-5 mb-4">${data.question_text}</div>`;
                    
                    // Show image if exists
                    if (data.image) {
                        html += `
                            <div class="text-center mb-4">
                                <img src="/storage/${data.image}" alt="Question image" 
                                    class="img-fluid rounded border" style="max-height: 300px;">
                            </div>`;
                    }
                    
                    // Display question type
                    let typeName = {
                        'mcq': 'Multiple Choice',
                        'true_false': 'True/False',
                        'short_answer': 'Short Answer'
                    }[data.type];
                    
                    html += `<div class="badge badge-light-primary mb-4">Type: ${typeName}</div>`;
                    
                    // Show options based on question type
                    html += `<h5 class="fw-bold mb-3">Answer Options</h5>`;
                    
                    if (data.type === 'true_false') {
                        html += `<div class="row g-3">`;
                        data.options.forEach(option => {
                            html += `
                                <div class="col-6">
                                    <div class="card ${option.is_correct ? 'bg-light-success' : 'bg-light'} h-100">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px me-3">
                                                    <span class="symbol-label ${option.is_correct ? 'bg-success' : 'bg-light-primary'}">
                                                        <i class="ki-duotone ${option.is_correct ? 'ki-check text-white' : 'ki-minus text-primary'} fs-2"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="fw-semibold d-block">${option.option_text}</span>
                                                    ${option.is_correct ? '<span class="text-success fs-7">Correct Answer</span>' : ''}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                        });
                        html += `</div>`;
                    }
                    else if (data.type === 'mcq') {
                        html += `<div class="row g-3">`;
                        const optionLabels = ['A', 'B', 'C', 'D', 'E'];
                        data.options.forEach((option, index) => {
                            const label = index < optionLabels.length ? optionLabels[index] : index + 1;
                            html += `
                                <div class="col-md-6">
                                    <div class="card ${option.is_correct ? 'bg-light-success' : 'bg-light'} h-100">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px me-3">
                                                    <span class="symbol-label ${option.is_correct ? 'bg-success' : 'bg-light-primary'}">
                                                        ${label}
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="fw-semibold d-block">${option.option_text}</span>
                                                    ${option.is_correct ? '<span class="text-success fs-7">Correct Answer</span>' : ''}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                        });
                        html += `</div>`;
                    }
                    else if (data.type === 'short_answer') {
                        html += `
                            <div class="card bg-light-success">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="symbol symbol-30px me-3">
                                            <span class="symbol-label bg-success">
                                                <i class="ki-duotone ki-check text-white fs-2"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="fw-bold">Correct Answer</span>
                                        </div>
                                    </div>
                                    <div class="fs-5 ps-9">${data.options[0].option_text}</div>
                                </div>
                            </div>`;
                    }
                    
                    html += `</div></div>`;
                    
                    document.getElementById('questionModalBody').innerHTML = html;
                })
                .catch(error => {
                    document.getElementById('questionModalBody').innerHTML = `
                        <div class="alert alert-danger m-5">
                            <div class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2hx text-danger me-4"><span class="path1"></span><span class="path2"></span></i>
                                <div class="d-flex flex-column">
                                    <h4 class="mb-1 text-danger">Error Loading Question</h4>
                                    <span>Unable to load question details. Please try again later.</span>
                                </div>
                            </div>
                        </div>`;
                    console.error('Error:', error);
                });
        });
    });


    // Edit Question Modal
    document.querySelectorAll('.edit-question').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const questionId = this.getAttribute('data-id');
        
        // Show loading state
        const modal = new bootstrap.Modal(document.getElementById('kt_modal_edit_question'));
        modal.show();
        
        // Fetch question data
        fetch(`/questions/${questionId}/edit`, {
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Set the form action
            document.getElementById('kt_modal_edit_question_form').action = `/questions/${questionId}`;
            // Populate form fields
            document.getElementById('edit_exam_id').value = data.exam_id;
            document.getElementById('edit_question_text').value = data.question_text;
            document.getElementById('edit_question_type').value = data.type;
            
            // Handle image
            const currentImageDiv = document.getElementById('edit_current_image');
            currentImageDiv.innerHTML = data.image ? 
                `<img src="/storage/${data.image}" class="img-fluid mb-3" style="max-height: 150px;">` : 
                '<div class="text-muted">No image</div>';
            
            // Handle options based on type
            document.querySelectorAll('.options-container').forEach(c => c.style.display = 'none');
            
            if (data.type === 'mcq') {
                const container = document.getElementById('edit_mcq_options');
                container.style.display = 'block';
                const optionsFields = container.querySelector('.options-fields');
                optionsFields.innerHTML = '';
                
                data.options.forEach((option, index) => {
                    const letter = String.fromCharCode(97 + index);
                    optionsFields.innerHTML += `
                        <div class="option-field mb-5">
                            <div class="d-flex align-items-center">
                                <label class="fw-semibold me-3">${letter.toUpperCase()}:</label>
                                <input type="text" name="options[${letter}][option_text]" 
                                    class="form-control me-3" value="${option.option_text || ''}" />
                                <div class="form-check">
                                    <input class="form-check-input is-correct" type="radio" 
                                        name="correct_option_radio" value="${letter}" 
                                        ${option.is_correct ? 'checked' : ''} />
                                    <label class="form-check-label">Correct</label>
                                </div>
                            </div>
                        </div>`;
                    
                    // Set hidden correct_option if this is the correct answer
                    if (option.is_correct) {
                        document.getElementById('edit_correct_option').value = letter;
                    }
                });
            } 
            else if (data.type === 'true_false') {
                const container = document.getElementById('edit_tf_options');
                container.style.display = 'block';
                const optionsFields = container.querySelector('.options-fields');
                optionsFields.innerHTML = `
                    <div class="option-field mb-5">
                        <div class="d-flex align-items-center">
                            <input type="radio" name="correct_option_radio" value="true" 
                                ${data.options[0]?.is_correct ? 'checked' : ''}>
                            <label class="ms-2">True</label>
                        </div>
                    </div>
                    <div class="option-field mb-5">
                        <div class="d-flex align-items-center">
                            <input type="radio" name="correct_option_radio" value="false"
                                ${data.options[1]?.is_correct ? 'checked' : ''}>
                            <label class="ms-2">False</label>
                        </div>
                    </div>`;
                
                // Set initial correct_option value
                document.getElementById('edit_correct_option').value = 
                    data.options[0]?.is_correct ? 'true' : 'false';
            }
            else if (data.type === 'short_answer') {
                const container = document.getElementById('edit_sa_options');
                container.style.display = 'block';
                document.getElementById('edit_sa_answer').value = data.options[0]?.option_text || '';
                document.getElementById('edit_correct_option').value = 'answer';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to load question data');
        });
    });
});

// Form submission handler
document.getElementById('kt_modal_edit_question_form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const submitBtn = document.getElementById('edit_submit_btn');
    submitBtn.setAttribute('data-kt-indicator', 'on');
    submitBtn.disabled = true;

    try {
        // Set correct_option value
        const questionType = document.getElementById('edit_question_type').value;
        if (questionType === 'mcq' || questionType === 'true_false') {
            const correctOption = document.querySelector('input[name="correct_option_radio"]:checked');
            if (!correctOption) {
                throw new Error('Please select the correct answer!');
            }
            document.getElementById('edit_correct_option').value = correctOption.value;
        }

        // Debug: Log form data before sending
        const formData = new FormData(this);
        console.log('Submitting:', Object.fromEntries(formData.entries()));

        const response = await fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        });

        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Failed to update question');
        }

        if (data.errors) {
            throw new Error(Object.values(data.errors).join('\n'));
        }

        alert('Question updated successfully!');
        location.reload(); // Or refresh your question list
    } catch (error) {
        console.error('Update error:', error);
        alert(error.message);
    } finally {
        submitBtn.removeAttribute('data-kt-indicator');
        submitBtn.disabled = false;
    }
});


    // Delete Question Modal
    document.querySelectorAll('.delete-question').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const questionId = this.getAttribute('data-id');
            const form = document.getElementById('delete_question_form');
            form.action = `/questions/${questionId}`;
            const modal = new bootstrap.Modal(document.getElementById('kt_modal_delete_question'));
            modal.show();
        });
    });

    
    // Delete form submission
    const deleteForm = document.getElementById('delete_question_form');
    deleteForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = this.querySelector('button[type="submit"]');
        submitBtn.querySelector('.indicator-label').classList.add('d-none');
        submitBtn.querySelector('.indicator-progress').classList.remove('d-none');
        submitBtn.disabled = true;
        
        fetch(this.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({
                _method: 'DELETE'
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.reload();
            } else {
                alert('Error deleting question: ' + (data.message || 'Unknown error'));
                submitBtn.querySelector('.indicator-label').classList.remove('d-none');
                submitBtn.querySelector('.indicator-progress').classList.add('d-none');
                submitBtn.disabled = false;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to delete question. Please try again.');
            submitBtn.querySelector('.indicator-label').classList.remove('d-none');
            submitBtn.querySelector('.indicator-progress').classList.add('d-none');
            submitBtn.disabled = false;
        });
    });

    document.getElementById('edit-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const questionType = document.getElementById('edit_question_type').value;

    // Validate correct option selection
    if (questionType !== 'short_answer') {
        const correctOption = document.querySelector('input[name="correct_option"]:checked');
        if (!correctOption) {
            alert('Please select the correct answer!');
            return;
        }
        formData.append('correct_option', correctOption.value);
    }

    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.errors) {
            alert('Error: ' + Object.values(data.errors).join('\n'));
        } else {
            location.reload();
        }
    });
});


});



// Image preview for add form (kept from original)
document.addEventListener('DOMContentLoaded', function() {
    const imageInput = document.querySelector('input[name="image"]');
    const previewContainer = document.getElementById('image-preview');
    const previewImg = document.getElementById('preview-img');

    if (imageInput && previewContainer && previewImg) {
        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    previewContainer.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                previewContainer.style.display = 'none';
            }
        });
    }

    // Additional code for question type selection in add form
    const typeSelect = document.querySelector('.question-type');
    if (typeSelect) {
        typeSelect.addEventListener('change', function() {
            document.querySelectorAll('.options-container').forEach(container => {
                container.style.display = 'none';
            });

            if (this.value === 'mcq') {
                document.querySelector('.mcq-options').style.display = 'block';
            } else if (this.value === 'true_false') {
                document.querySelector('.tf-options').style.display = 'block';
            } else if (this.value === 'short_answer') {
                document.querySelector('.sa-options').style.display = 'block';
            }

            updateCorrectOption();
        });

        function updateCorrectOption() {
            const correctOptionHidden = document.getElementById('correct_option_hidden');
            if (!correctOptionHidden) return;

            const type = typeSelect.value;
            if (type === 'short_answer') {
                correctOptionHidden.value = 'answer';
            } else {
                const selectedRadio = document.querySelector('.is-correct:checked');
                correctOptionHidden.value = selectedRadio ? selectedRadio.value : '';
            }
        }

        // Update correct_option on radio change
        document.querySelectorAll('.is-correct').forEach(radio => {
            radio.addEventListener('change', updateCorrectOption);
        });
    }
});
</script>


<!-- JavaScript for form handling -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('kt_modal_add_question_form');
    const typeSelect = document.querySelector('.question-type');
    const submitBtn = document.getElementById('submit-btn');
    const imageInput = document.querySelector('input[name="image"]');
    const previewContainer = document.getElementById('image-preview');
    const previewImg = document.getElementById('preview-img');
    const correctOptionHidden = document.getElementById('correct_option_hidden');

    function toggleOptions() {
        document.querySelectorAll('.options-container').forEach(container => {
            container.style.display = 'none';
            // Clear radio selections in hidden containers
            container.querySelectorAll('.is-correct').forEach(radio => {
                radio.checked = false;
            });
        });

        if (typeSelect.value === 'mcq') {
            document.querySelector('.mcq-options').style.display = 'block';
        } else if (typeSelect.value === 'true_false') {
            document.querySelector('.tf-options').style.display = 'block';
        } else if (typeSelect.value === 'short_answer') {
            document.querySelector('.sa-options').style.display = 'block';
        }
    }

    typeSelect.addEventListener('change', function() {
        toggleOptions();
        updateCorrectOption();
    });

    function updateCorrectOption() {
        const type = typeSelect.value;
        if (type === 'short_answer') {
            correctOptionHidden.value = 'answer';
        } else {
            const selectedRadio = document.querySelector('.is-correct:checked');
            correctOptionHidden.value = selectedRadio ? selectedRadio.value : '';
        }
    }

    // Update correct_option on radio change
    document.querySelectorAll('.is-correct').forEach(radio => {
        radio.addEventListener('change', updateCorrectOption);
    });

    imageInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewContainer.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            previewContainer.style.display = 'none';
        }
    });

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const errors = [];
        const questionText = document.querySelector('textarea[name="question_text"]').value.trim();

        if (!questionText) {
            errors.push('Question text is required');
        }

        if (!typeSelect.value) {
            errors.push('Please select a question type');
        } else {
            if (typeSelect.value === 'mcq') {
                const mcqInputs = document.querySelectorAll('.mcq-options input[type="text"]');
                const filledOptions = Array.from(mcqInputs).filter(input => input.value.trim() !== '').length;
                const correctSelected = document.querySelector('.mcq-options .is-correct:checked');

                if (filledOptions < 2) {
                    errors.push('At least 2 MCQ options must be filled');
                }
                if (!correctSelected) {
                    errors.push('Please select a correct option for MCQ');
                }
            } else if (typeSelect.value === 'true_false') {
                const correctSelected = document.querySelector('.tf-options .is-correct:checked');
                if (!correctSelected) {
                    errors.push('Please select a correct option for True/False');
                }
            } else if (typeSelect.value === 'short_answer') {
                const answerText = document.querySelector('.sa-options textarea').value.trim();
                if (!answerText) {
                    errors.push('Please provide a correct answer for Short Answer');
                }
            }
        }

        if (errors.length > 0) {
            alert('Please fix the following errors:\n' + errors.join('\n'));
            return;
        }

        submitBtn.querySelector('.indicator-label').style.display = 'none';
        submitBtn.querySelector('.indicator-progress').style.display = 'inline-block';
        submitBtn.disabled = true;

        console.log('Submitting form with:', new FormData(form));
        form.submit();
    });

    toggleOptions(); // Initial call to set correct state
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/question/index.blade.php ENDPATH**/ ?>