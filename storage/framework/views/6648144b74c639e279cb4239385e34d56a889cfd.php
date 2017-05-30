<?php $__env->startSection('title', 'Student Register'); ?>

<?php $__env->startSection('form-action', route('student.auth.register')); ?>

<?php $__env->startSection('login', route('student.auth.login')); ?>

<?php echo $__env->make('auth.register', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>