<?php $__env->startSection('page-header'); ?>
    <h3>Admin Portal</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

	<div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">Student details stored successfully!</h1>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>