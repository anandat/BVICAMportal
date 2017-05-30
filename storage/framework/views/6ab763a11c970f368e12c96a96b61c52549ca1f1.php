<?php $__env->startSection('title', 'Fac Auth'); ?>

<?php $__env->startSection('form-action', route('fac.auth.login')); ?>

<?php $__env->startSection('register', route('fac.auth.register')); ?>

<?php $__env->startSection('password', route('fac.password.reset')); ?>

<?php echo $__env->make('auth.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>