<?php $__env->startSection('page-header'); ?>
    <h3>Add Student</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="col-md-4 col-md-offset-4 text-center">

        <?php echo Form::open(array('action' => 'Admin\FacultyController@saveFacultyDetails', 'method' => 'post')); ?>


        	<?php echo e(csrf_field()); ?>


        	<div class="form-group">
            <?php echo Form::label('name', 'Name'); ?>

            <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']); ?>

          </div>

          <div class="form-group"">
          	<?php echo Form::label('email', 'Email Address'); ?>

            <?php echo Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'Email']); ?>

		      </div>

    			<div class="form-group">
          	<?php echo Form::label('password', 'Password'); ?>

            <?php echo Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>

    			</div>

    			<div class="form-group">
          	<?php echo Form::label('dob', 'Date of Birth'); ?>

            <?php echo Form::date('dob', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Date of Birth']); ?>

    			</div>

    			<div class="form-group">
          	<?php echo Form::label('gender', 'Gender: '); ?>

            Male<?php echo Form::radio('gender', 'Male', ['class' => 'form-control']); ?>

            Female<?php echo Form::radio('gender', 'Female', ['class' => 'form-control']); ?>

    			</div>

          <div class="form-group">
            <?php echo Form::label('designation', 'Designation'); ?>

            <?php echo Form::textarea('designation', null, ['class' => 'form-control', 'placeholder' => 'Designation']); ?>

          </div>

          <div class="form-group">
            <?php echo Form::label('qualification', 'Qualification'); ?>

            <?php echo Form::textarea('qualification', null, ['class' => 'form-control', 'placeholder' => 'Qualification']); ?>

          </div>

          <div class="form-group">
            <?php echo Form::label('area_of_expertise', 'Area of Expertise'); ?>

            <?php echo Form::textarea('area_of_expertise', null, ['class' => 'form-control', 'placeholder' => 'Area of Expertise']); ?>

          </div>

          <div class="form-group">
            <?php echo Form::label('address', 'Address'); ?>

            <?php echo Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Address']); ?>

          </div>

    			<div class="form-group">
            <?php echo Form::label('mobile', 'Mobile'); ?>

            <?php echo Form::number('mobile', null, ['class' => 'form-control', 'placeholder' => 'Mobile']); ?>

    			</div>

          <div class="form-group">
              <input type="submit" value="Add Faculty" class="btn btn-primary pull-left">
          </div>

        <?php echo Form::close(); ?>


    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>