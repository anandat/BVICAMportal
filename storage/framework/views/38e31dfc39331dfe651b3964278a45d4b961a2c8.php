<?php $__env->startSection('title', 'Admin Register'); ?>

<?php $__env->startSection('form-action', route('admin.auth.register')); ?>

<?php $__env->startSection('login', route('admin.auth.login')); ?>

<?php echo $__env->make('auth.register', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>