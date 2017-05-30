<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger alert-dismissable">
        <i class="fa fa-check"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <b>Error!</b>
        <?php foreach($errors->all() as $error): ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if(Session::has('success')): ?>
    <div class="alert alert-success alert-dismissable">
        <i class="fa fa-check"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <b>Success!</b> <?php echo e(Session::get('success')); ?>

    </div>
<?php endif; ?>

<?php if(Session::has('warning')): ?>
    <div class="alert alert-warning alert-dismissable">
        <i class="fa fa-warning"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <b>Warning!</b> <?php echo e(Session::get('warning')); ?>

    </div>
<?php endif; ?>
