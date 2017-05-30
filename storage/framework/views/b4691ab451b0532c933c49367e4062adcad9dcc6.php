<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $__env->yieldContent('title'); ?></title>

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>

    <?php echo $__env->make('layouts.frontend.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <body>
        <div class="container">
            <div class="row">
                <?php echo $__env->make('layouts.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->yieldContent('body'); ?>
            </div>
        </div>
    </body>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
