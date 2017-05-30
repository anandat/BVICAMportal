<?php $__env->startSection('title', 'Fac Register'); ?>

<?php $__env->startSection('form-action', route('fac.auth.register')); ?>

<?php $__env->startSection('login', route('fac.auth.login')); ?>

<?php echo $__env->make('auth.register', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>