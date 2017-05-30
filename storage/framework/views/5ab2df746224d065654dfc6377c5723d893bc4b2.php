<?php $__env->startSection('page-header'); ?>
    <h3><?php echo e($faculty->name); ?>'s Details</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<div id="page-wrapper">
    <div id="page-inner">

		<table class="table table-striped">
	   				
		  	<tr>
				<td>Name</td>
			 	<td><?php echo e($faculty->name); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Gender</td>
			 	<td><?php echo e($faculty->gender); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Designation</td>
			 	<td><?php echo e($faculty->designation); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Qualification</td>
			 	<td><?php echo e($faculty->qualification); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Area of Expertise</td>
			 	<td><?php echo e($faculty->area_of_expertise); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Email ID</td>
			 	<td><?php echo e($faculty->email); ?></td>
			 	<td></td>
			</tr>

			<tr>
				<td>Address</td>
			 	<td><?php echo e($faculty->address); ?></td>
			 	<td></td>
			</tr>			

			<tr>
				<td>Mobile</td>
			 	<td><?php echo e($faculty->mobile); ?></td>
			 	<td></td>
			</tr>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>