<?php $__env->startSection('page-header'); ?>
	<h3>Faculty Portal</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
	<div class="container-fluid">
		<div id="page-wrapper">
        	<div id="page-inner">
        	<div class="row">
            <div class="col-md-12">
                <h1>Attendance List</h1>
            </div>
        </div>
				<div class="table-responsive">
        			<table class="table table-striped">
		                <thead>
		                	<tr>
		                    <th>
		                        <h4>Roll No</h4>
		                    </th>
		                    <th>
		                        <h4>Name</h4>
		                    </th>
		                    <th>
		                        <h4>Attendance</h4>
		                    </th>
		                    </tr>
		                </thead>
		         
		        		<tbody>

				    

							<?php echo Form::open(array('route' => 'faculty.attendance.store', 'method' => 'POST')); ?>  
							  
							  <?php foreach($students as $student): ?>
							    <tr>
							    <td><?php echo e($student->roll_number); ?></td>
							    <td><?php echo e($student->name); ?></td>
							    <td><?php echo Form::checkbox('student[]', $student->id); ?></td>
								</tr>
							  <?php endforeach; ?>
							<br><br>
							<?php echo Form::hidden('subject_id'); ?>

							<?php echo Form::submit('Submit'); ?>

							<?php echo Form::close(); ?>


						</tbody>
					</table>
                   
					<script>var token = '<?php echo e(Session::token()); ?>';</script>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>