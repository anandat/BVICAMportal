<?php $__env->startSection('title', 'Admin Auth'); ?>

<?php $__env->startSection('form-action', route('admin.auth.login')); ?>

<?php $__env->startSection('password', route('admin.password.reset')); ?>

<?php echo $__env->make('auth.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>