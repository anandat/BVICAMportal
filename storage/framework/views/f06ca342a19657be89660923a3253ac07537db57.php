<?php $__env->startSection('title', 'Faculty Auth'); ?>

<?php $__env->startSection('form-action', route('faculty.auth.login')); ?>

<?php $__env->startSection('password', route('faculty.password.reset')); ?>

<?php echo $__env->make('auth.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>