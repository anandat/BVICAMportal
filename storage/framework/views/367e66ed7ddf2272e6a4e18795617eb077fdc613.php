<?php $__env->startSection('page-header'); ?>
	<h4>Faculty Dashboard</h4>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Faculty Info</h1>
                <h1 class="page-subhead-line"> Faculty ID:<?php echo e(Auth::guard('faculty')->user()->id); ?> </h1>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    hello hello<br />
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>