
<?php $__env->startSection('content'); ?>

     <!-- Start Page title and tab -->
     <div class="section-body">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center ">
                <div class="header-action">
                    <h1 class="page-title">School</h1>
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Parent</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Parent</li>
                    </ol>
                </div>
                <ul class="nav nav-tabs page-header-tab">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('parent-list')): ?>
                        <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#parent">List View</a></li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add-subject')): ?>
                    <li class="nav-item"><a class="nav-link" id="Library-tab-Boot" data-toggle="tab" href="#parent-add"> </a></li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('subject-class-list')): ?>
                        <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#class subject"></a></li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add-student')): ?>
                    <li class="nav-item"><a class="nav-link" id="Library-tab-Boot" data-toggle="tab" href="#student-add"> </a></li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('subject-class-list')): ?>
                        <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#classsubject"></a></li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assign-subject-class')): ?>
                    <li class="nav-item"><a class="nav-link" id="Library-tab-Boot" data-toggle="tab" href="#student-add"> </a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <?php if(\Session::has('status')): ?>
           <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"></button>
                <p><?php echo e(\Session::get('status')); ?></p>
            </div>
        <?php endif; ?>
        <?php if(\Session::has('success')): ?>
           <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"></button>
                <p><?php echo e(\Session::get('success')); ?></p>
            </div>
        <?php endif; ?>
        <?php if(\Session::has('danger')): ?>
        <div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert"></button>
             <p><?php echo e(\Session::get('danger')); ?></p>
         </div>
     <?php endif; ?>

     <?php if(count($errors) > 0): ?>
     <div class="alert alert-success alert-dismissible">
         <button type="button" class="close" data-dismiss="alert"></button>
         <strong>Opps!</strong> Something went wrong, please check where you  add data .<br><br>
         <ul>
             <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li><?php echo e($error); ?></li>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
     </div>
 <?php endif; ?>
    </div>
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="tab-content">



                <div class="tab-pane active" id="parent">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-striped table_custom">
                                    <thead>

                                            <tr>
                                                <th>SN</th>
                                                <th>Student Admin NO.</th>
                                                <th> Father's Name</th>
                                                 <th> Mother's Name</th>
                                                <th>Phone Number</th>
                                                <th>Action</th>

                                            </tr>

                                    </thead>
                                    <tbody>
                                        <?php $sn = 1; ?>
                                     <?php $__currentLoopData = $parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <tr id="sid<?php echo e($sc->id); ?>">
                                         <td><?php echo e($sn++); ?></td>
                                         <td><?php echo e($sc->admissionNo); ?> </td>
                                         <td><?php echo e($sc->father); ?></td>
                                         <td><?php echo e($sc->mother); ?></td>
                                         <td><?php echo e($sc->father_phone); ?>  <?php echo e($sc->mother_phone); ?> </td>

                                         <td>
                                             <div class="btn-group">
                                                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('parent-edit')): ?>
                                                 <a href="<?php echo e(route('parent.edit',$sc->studentID)); ?>" class="btn fa fa-pencil" data-toggle="tooltip" title="Edit Parent Bio Data"></a>
                                                 <?php endif; ?>
                                                 </div>
                                             <div class="btn-group">

                                         </div>
                                     </td>

                                     </tr>

                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>


    <script>

        function check(id){

            var id = id;
            var spinner = $('#loader');

          Swal.fire({
          title: 'Are you sure?',
          text: "Deleting this record will affect other associated records (e.g Any Record where this Class Subject is featured)",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            spinner.show();
            $.ajax({

                url: 'ajaxsubclass/'+id,
                async: false,
                type: "DELETE",
                cache: false,
                data:{
                    _token:'<?php echo e(csrf_token()); ?>',
                   id: id
                },
                dataType: 'JSON',

            }).done(function(resp) {
          spinner.hide();

            });
            Swal.fire(
              'Deleted!',
              'This Record is now  Deleted. You can Check Other Records to make neccessary Editing!',
              'success'
            )

            var myobj = document.getElementById("sid"+id);
             myobj.remove();

          }
        })

        }
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/parent/index.blade.php ENDPATH**/ ?>