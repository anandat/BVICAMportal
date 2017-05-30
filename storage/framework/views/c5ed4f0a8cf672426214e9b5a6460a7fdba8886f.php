<?php $__env->startSection('page-header'); ?>
	<h4>Student Dashboard</h4>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Notice Board</h1>
                <h1 class="page-subhead-line"></h1>
                <section class="row posts">
                    <div class="col-md-6 col-md-offset-3">
                        <?php foreach($posts as $post): ?>
                            <article class="post" data-postid="<?php echo e($post->id); ?>"> 
                                <p><?php echo e($post->body); ?></p>
                                <div class="info">
                                    Posted by <?php echo e($post->facultyID->name); ?> on <?php echo e($post->created_at); ?>

                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('student.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>