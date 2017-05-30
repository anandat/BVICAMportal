<?php $__env->startSection('page-header'); ?>
    <h3>Details</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

	<div class="container-fluid">
		<div id="page-wrapper">
    		<div id="page-inner">

				<table class="table table-striped">
			   				
				  	<tr>
						<td>Enroll No.</td>
					 	<td><?php echo e($student->enrollment_number); ?></td>
					</tr>

					<tr>
						<td>Roll No.</td>
					 	<td><?php echo e($student->roll_number); ?></td>
					</tr>

					<tr>
						<td>Name</td>
					 	<td><?php echo e($student->name); ?></td>
					</tr>

					<tr>
						<td>Gender</td>
					 	<td><?php echo e($student->gender); ?></td>
					</tr>

					<tr>
						<td>DOB</td>
					 	<td><?php echo e($student->DOB); ?></td>
					</tr>

					<tr>
						<td>Email ID</td>
					 	<td><?php echo e($student->email); ?></td>
					</tr>

					<tr>
						<td>Phone</td>
					 	<td><?php echo e($student->phone); ?></td>
					</tr>			

					<tr>
						<td>Parent Phone</td>
					 	<td><?php echo e($student->parent_phone); ?></td>
					</tr>

					<tr>
						<td>Semester</td>
					 	<td><?php echo e($student->semester); ?></td>
					</tr>

					<tr>
						<td>Section</td>
					 	<td><?php echo e($student->section); ?></td>
					</tr>

					<tr>
						<td>Batch</td>
					 	<td><?php echo e($student->batch); ?></td>
					</tr>

				</table>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>