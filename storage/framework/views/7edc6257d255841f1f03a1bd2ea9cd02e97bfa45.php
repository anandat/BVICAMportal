<?php $__env->startSection('page-header'); ?>
    <h3><?php echo e($student->name); ?>'s Details</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<div id="page-wrapper">
    <div id="page-inner">

		<table class="table table-striped">
	   				
		  	<tr>
				<td>Enroll No.</td>
			 	<td><?php echo e($student->enrollment_number); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Roll No.</td>
			 	<td><?php echo e($student->roll_number); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Name</td>
			 	<td><?php echo e($student->name); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Gender</td>
			 	<td><?php echo e($student->gender); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>DOB</td>
			 	<td><?php echo e($student->DOB); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Email ID</td>
			 	<td><?php echo e($student->email); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Phone</td>
			 	<td><?php echo e($student->phone); ?></td>
			 	<td></td>
			</tr>			

			<tr>
				<td>Parent Phone</td>
			 	<td><?php echo e($student->parent_phone); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Semester</td>
			 	<td><?php echo e($student->semester); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Section</td>
			 	<td><?php echo e($student->section); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Batch</td>
			 	<td><?php echo e($student->batch); ?></td>
			 	<td></td>
			</tr>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>