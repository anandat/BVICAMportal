<?php $__env->startSection('title', 'Fac Panel'); ?>

<?php $__env->startSection('body', 'You are logged in as fac.'); ?>

<?php echo e(Auth::guard('fac')->user()); ?>


<?php echo $__env->make('fac.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>