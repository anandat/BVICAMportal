<div class="container-fluid">
		
		<?php echo Form::open(['action' => 'Faculty\AttendanceController@showDefaulters', 'method' => 'POST']); ?>


			<?php $i=1; ?>
			<select class= "form-control" name="subject_id"> 
              <?php foreach($subjects as $subject): ?>
                <option value=<?php echo e($i); ?>><?php echo e($subject->subject_id); ?></option>
                <?php $i++; ?>
              <?php endforeach; ?>
          </select>

			<?php echo Form::submit('Show Defaulters'); ?>

		
		<?php echo Form::close(); ?>

	</div>
