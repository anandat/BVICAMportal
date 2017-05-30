<?php $__env->startSection('title', 'Faculty Register'); ?>

<?php $__env->startSection('form-action', route('faculty.auth.register')); ?>

<?php $__env->startSection('login', route('faculty.auth.login')); ?>

<?php echo $__env->make('auth.register', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>