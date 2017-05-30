<?php $__env->startSection('page-header'); ?>
	<h4>Faculty Dashboard</h4>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Post a Notice</h1>
                <h1 class="page-subhead-line">Faculty ID:<?php echo e(Auth::guard('faculty')->user()->id); ?>  </h1>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <br />
                    <?php echo $__env->make('faculty.includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <section class="row new-post">
                            <div class="col-md-6 col-md-offset-3">
                            
                                <form action="<?php echo e(route('faculty.post.create')); ?>" method="post"> 
                                    <div class="form-group">
                                        <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Notice"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create Notice</button>
                                    <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                                    
                                    
                                </form>
                            </div>
                        </section>

                </div>
            </div>
        </div>
        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>