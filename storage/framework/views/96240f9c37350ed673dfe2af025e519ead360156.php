<?php $__env->startSection('page-header'); ?>
	<h3>Faculty Portal</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1>Select Class</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">

                    <?php echo $__env->make('faculty.includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <section class="row new-post">
                            <div class="col-md-6">
    
                                <form action="<?php echo e(route('faculty.attendance.viewList')); ?>" method="post">
                                    <div class="form-group"> 
                                    <tr>
                                        <td>Subject></td>
                                        <td><select name="subject_id">
                                            <?php foreach($subjects as $subject): ?>
                                                <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->subject_name); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Section> </td>
                                        <td>
                                        <select name="section_id">
                                            <?php foreach($sections as $section): ?>
                                                <option value="<?php echo e($section->id); ?>"><?php echo e($section->section_name); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>
                                    </tr>
                                    </div>
                        
                                    <button type="submit" class="btn btn-primary">View List</button>
                                    <input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token">
                                </form>
                            </div>
                        </section>
                                
                        <script>
                            var token = '<?php echo e(Session::token()); ?>';
        
                        </script>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>