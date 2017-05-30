<?php $__env->startSection('page-header'); ?>
    <h3>Add Student</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="col-md-4 col-md-offset-4 text-center">

        <?php echo Form::open(array('action' => 'Admin\StudentController@saveStudentDetails', 'method' => 'post')); ?>


        	<?php echo e(csrf_field()); ?>


    			<div class="form-group">
            <?php echo Form::label('enrol_number', 'Enrollment Number'); ?>

    				<?php echo Form::number('enrol_number', 'value', ['class' => 'form-control', 'placeholder' => 'Enrollment Number']); ?>

    			</div>

    			<div class="form-group">
            <?php echo Form::label('roll_number', 'Roll Number'); ?>

    				<?php echo Form::number('roll_number', 'value', ['class' => 'form-control', 'placeholder' => 'Roll Number']); ?>

    			</div>			

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
                	<?php echo Form::label('phone', 'Phone Number '); ?>

                  	<?php echo Form::number('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']); ?>

    			</div>

          <div class="form-group">
            <?php echo Form::label('address', 'Address'); ?>

            <?php echo Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Address']); ?>

          </div>

          <div class="form-group">
          	<?php echo Form::label('parent_phone', 'Parent Phone Number '); ?>

            <?php echo Form::number('parent_phone', null, ['class' => 'form-control', 'placeholder' => 'Parent Phone Number']); ?>

			   </div>

  			<div class="form-group">
  			 <?php $i=1; ?>
          Semester: <select class= "form-control" name="semester"> 
              <?php foreach($semesters as $semester): ?>
                <option value=<?php echo e($i); ?>><?php echo e($semester->semester); ?></option>
                <?php $i++; ?>
              <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
  			   <?php $i=1; ?>
          Section: <select class= "form-control" name="section"> 
              <?php foreach($sections as $section): ?>
                <option value=<?php echo e($i); ?>><?php echo e($section->section_name); ?></option>
                <?php $i++; ?>
              <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <?php echo Form::label('batch', 'Batch'); ?>

          <?php echo Form::selectRange('batch', 2000, 2080, 2016, ['class' => 'form-control', 'placeholder' => 'Batch']); ?>

			   </div>

        <div class="form-group">
          <input type="submit" value="Add Student" class="btn btn-primary pull-left">
        </div>

        <?php echo Form::close(); ?>


    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>