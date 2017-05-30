<?php $__env->startSection('page-header'); ?>
    <h3>Faculty Portal</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
	<div class="container-fluid">
		<div id="page-wrapper">
        	<div id="page-inner">
				<div class="table-responsive">
        			<table class="table table-striped">
		                <thead>
		                	<tr>
		                    <th>
		                        <h4>Student ID</h4>
		                    </th>
		                    <th>
		                        <h4>Percentage</h4>
		                    </th>
		                    </tr>
		                </thead>
		         
		        		<tbody>
				
				   			<?php foreach($students as $student): ?>
							  	<tr>
									<td><a href="<?php echo e(URL::route('faculty.showStudentDetails', $student['student_id'])); ?>"><?php echo e($student['student_id']); ?></a></td>
								 	<td><?php echo e($student['percentage']); ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>