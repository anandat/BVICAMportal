<?php $__env->startSection('title', 'student Panel'); ?>


<?php $__env->startSection('title', 'Student Panel'); ?>


<?php $__env->startSection('main'); ?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> Info</h1>
                <h1 class="page-subhead-line"> </h1>

            </div>
        </div> 
        <div class="row">
                
                <div class="col-md-4">
                <form action="<?php echo e(route('/student/changePassword')); ?>" method="post">
                       <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                    <label for="password">Old Password</label>
                    <input class="form-control" type="password" name="old" id="password" }}">
                        </div>
                
                
                       <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                    <label for="password">New Password</label>
                    <input class="form-control" type="password" name="new" id="password" }}">
                        </div>
                 
                
                       <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                    <label for="password">Re-New Password</label>
                    <input class="form-control" type="password" name="re_new" id="password" }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Change Password</button>
                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                </div>
            </form>
                
            
        </div>
        
    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('student.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>