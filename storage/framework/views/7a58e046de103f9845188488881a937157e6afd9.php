<?php $__env->startSection('body'); ?>
    <div class="col-md-4 col-md-offset-4 text-center">
        <h1><?php echo $__env->yieldContent('title'); ?></h1>
        <form action="<?php echo $__env->yieldContent('form-action'); ?>" method="post">
            <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
            <div class="form-group">
                <input name="email" type="email" value="<?php echo e(old('email')); ?>" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" value="Sign In" class="btn btn-default pull-left">
                <a href="<?php echo $__env->yieldContent('register'); ?>" class="btn btn-default pull-right">Register</a>
            </div>
        </form>
        <a href="<?php echo $__env->yieldContent('password'); ?>">Forgotten password?</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>