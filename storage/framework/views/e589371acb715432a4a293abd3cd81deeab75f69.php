<?php $__env->startSection('title', 'Users Auth'); ?>

<?php $__env->startSection('form-action', route('users.auth.login')); ?>

<?php $__env->startSection('register', route('users.auth.register')); ?>

<?php $__env->startSection('password', route('users.password.reset')); ?>

<?php echo $__env->make('auth.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>