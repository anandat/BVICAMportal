<?php $__env->startSection('page-header'); ?>
    <h3>Faculty Portal</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<div class="container-fluid">

<div id="page-wrapper">
    <div id="page-inner">
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>
                            <h3>Enroll No.</h3>
                        </td>
                        <td>
                            <h3>Name</h3>
                        </td>
                        <td>
                            <h3>Phone</h3>
                        </td>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach($students as $student): ?>

                    <tr>
                        <td>
                            <h6><?php echo e($student->enrollment_number); ?></h6>
                        </td>
                        <td>
                            <h5><?php echo e($student->name); ?></h5>
                        </td>
                        <td>
                            <h6><?php echo e($student->phone); ?></h6>                    
                        </td>
                        <td>
                            <a href="<?php echo e(URL::route('faculty.showStudentDetails', $student->id)); ?>">View more details</a> 
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>