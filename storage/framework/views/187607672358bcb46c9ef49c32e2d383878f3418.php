<div class="container-fluid">
		
		<?php echo Form::open(['action' => 'Faculty\AttendanceController@showDefaulters', 'method' => 'POST']); ?>


			 <?php $i=1; ?>
			<select class= "form-group" name="subject_id">
              <?php foreach($subjects as $subject): ?>
                <option value=<?php echo e($i); ?>><?php echo e($subject->subject_name); ?></option>
              <?php $i++; ?>  
              <?php endforeach; ?>
          </select>
          <?php $i=1; ?>
          	<select class= "form-group" name="semester">
              <?php foreach($semesters as $semester): ?>
                <option value=<?php echo e($i); ?>><?php echo e($semester->semester); ?></option>
              <?php $i++; ?>  
              <?php endforeach; ?>
          </select>
          <?php $i=1; ?>
          <select class= "form-group" name="section_name">
              <?php foreach($sections as $section): ?>
                <option value=<?php echo e($i); ?>><?php echo e($section->section_name); ?></option>
              <?php $i++; ?>  
              <?php endforeach; ?>
          </select>
			<?php echo Form::submit('Show Defaulters'); ?>

		
		<?php echo Form::close(); ?>

	</div_name>
