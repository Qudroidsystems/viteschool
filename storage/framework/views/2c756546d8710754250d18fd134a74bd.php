<table>
    <thead>
        <tr>

                <th>SN</th>
                <th>ADMISSION NO</th>
                <th>NAME</th>
                <th>CA 1</th>
                <th>CA 2</th>
                <th>EXAM</th>
                <th>BROADSHEETID</th>
                <th>STAFFID</th>
                <th>SUBJECTCLASSID</th>
                <th>TERMID</th>
                <th>SESSION</th>


        </tr>
    </thead>
    <tbody>
        <?php $sn = 1; ?>
        <?php $__currentLoopData = $broadsheets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $broadsheet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($sn++); ?></td>
            <td><?php echo e($broadsheet->admissionno); ?></td>
            <td><?php echo e($broadsheet->fname); ?> <?php echo e($broadsheet->lname); ?></td>
            <td><?php echo e($broadsheet->ca1); ?></td>
            <td><?php echo e($broadsheet->ca2); ?></td>
            <td><?php echo e($broadsheet->exam); ?></td>
            <td><?php echo e($broadsheet->id); ?></td>
            <td><?php echo e($broadsheet->staffid); ?></td>
            <td><?php echo e($broadsheet->subjectclassid); ?></td>
            <td><?php echo e($broadsheet->termid); ?></td>
            <td><?php echo e($broadsheet->sessionid); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
</table>
<?php /**PATH C:\xampp\htdocs\viteschool\resources\views/exports/studentscoresheet.blade.php ENDPATH**/ ?>