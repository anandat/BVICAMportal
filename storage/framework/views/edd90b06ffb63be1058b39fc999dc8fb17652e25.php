<?php $__env->startSection('title', 'User Register'); ?>

<?php $__env->startSection('form-action', route('users.auth.register')); ?>

<?php $__env->startSection('login', route('users.auth.login')); ?>

<?php echo $__env->make('auth.register', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>