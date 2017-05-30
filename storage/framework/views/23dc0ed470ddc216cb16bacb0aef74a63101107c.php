<?php if(count($errors) > 0): ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 error">
            <ul>
                <?php foreach($errors->all() as $error): ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php if(Session::has('message')): ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 success">
            <?php echo e(Session::get('message')); ?>

        </div>
    </div>
<?php endif; ?>