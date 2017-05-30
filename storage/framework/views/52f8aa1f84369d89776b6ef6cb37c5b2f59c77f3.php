<?php $__env->startSection('page-header'); ?>
    <h3>Faculty Portal</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

	<?php foreach($students as $student): ?>
		<?php echo e($student[]); ?>

		<?php echo e($student[]); ?>

	<?php endforeach; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>