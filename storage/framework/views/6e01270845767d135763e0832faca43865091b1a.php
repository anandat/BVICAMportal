<?php $__env->startSection('title', 'Student Panel'); ?>

<?php $__env->startSection('main'); ?>
    <div class="container-fluid">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>
                                <h4>Subject Name</h4>
                            </th>
                            <th>
                                <h4>Total lectures</h4>
                            </th>
                            <th>
                                <h4>Attendance</h4>
                            </th>
                            <th>
                                <h4>Percentage</h4>
                            </th>
                            </tr>
                        </thead>
                 
                        <tbody>
                        
                            <?php foreach($attendances as $attendance): ?>
                                <tr>
                                    <td><?php echo e($attendance['subject_name']); ?></td>
                                    <td><?php echo e($attendance['total_lecture']); ?></td>
                                    <td><?php echo e($attendance['student_attendance']); ?></td>
                                    <td><?php echo e($attendance['percentage']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td>Total</td>
                                <td><?php echo e($sum_total_lectures); ?></td>
                                <td><?php echo e($sum_attendance); ?></td>
                                <td><b><?php echo e($avg_percentage); ?></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('student.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>