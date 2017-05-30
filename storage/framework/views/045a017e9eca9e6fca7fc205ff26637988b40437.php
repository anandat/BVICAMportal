<?php $__env->startSection('title', 'Student Auth'); ?>

<?php $__env->startSection('form-action', route('student.auth.login')); ?>

<?php $__env->startSection('register', route('student.auth.register')); ?>

<?php $__env->startSection('password', route('student.password.reset')); ?>

<?php echo $__env->make('auth.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>