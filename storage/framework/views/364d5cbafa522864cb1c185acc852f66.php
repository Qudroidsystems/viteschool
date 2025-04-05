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
                        My Exams
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="<?php echo e(route('cbt.index')); ?>" class="text-muted text-hover-primary">Exams</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">List</li>
                    </ul>
                </div>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems.<br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if(session('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo e(session('error')); ?>

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
                        Exams for <?php echo e($student->firstname); ?> <?php echo e($student->lastname); ?>

                        <span class="fs-6 text-gray-400 ms-1">(<?php echo e($class->schoolclass); ?> - <?php echo e($term->term); ?> - <?php echo e($session->session); ?>)</span>
                    </h2>
                </div>

                <!--begin::Card-->
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <h3 class="card-label">Available Exams</h3>
                        </div>
                    </div>

                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <?php if($exams->isEmpty()): ?>
                            <div class="alert alert-info">
                                No exams available for your registered subjects at this time.
                            </div>
                        <?php else: ?>
                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_exams_table">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-50px">ID</th>
                                        <th class="min-w-200px">Title</th>
                                        <th class="min-w-200px">Description</th>
                                        <th class="min-w-100px">Duration</th>
                                        <th class="min-w-150px">Start Time</th>
                                        <th class="min-w-150px">End Time</th>
                                        <th class="min-w-100px">Status</th>
                                        <th class="min-w-100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    <?php $i = 0 ?>
                                    <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$i); ?></td>
                                        <td><?php echo e($exam->title); ?></td>
                                        <td><?php echo e(Str::limit($exam->description ?? '', 50)); ?></td>
                                        <td><?php echo e($exam->duration); ?> mins</td>
                                        <td><?php echo e($exam->start_time); ?></td>
                                        <td><?php echo e($exam->end_time); ?></td>
                                        <td>
                                            <?php
                                                $now = now();
                                                $start = \Carbon\Carbon::parse($exam->start_time);
                                                $end = \Carbon\Carbon::parse($exam->end_time);
                                            ?>
                                            <?php if($now->lt($start)): ?>
                                                <span class="badge badge-light-warning">Upcoming</span>
                                            <?php elseif($now->between($start, $end)): ?>
                                                <span class="badge badge-light-success">Ongoing</span>
                                            <?php else: ?>
                                                <span class="badge badge-light-danger">Ended</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($now->between($start, $end)): ?>
                                                <a href="<?php echo e(route('cbt.take', $exam->id)); ?>" class="btn btn-sm btn-primary">
                                                    Take Exam
                                                </a>
                                            <?php else: ?>
                                                <span class="text-muted">N/A</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->

                <!-- Additional Info -->
                <div class="mt-5">
                    <p class="text-muted">Total Subjects Offered: <?php echo e($totalreg); ?> | Subjects Registered: <?php echo e($reg); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/cbt/index.blade.php ENDPATH**/ ?>