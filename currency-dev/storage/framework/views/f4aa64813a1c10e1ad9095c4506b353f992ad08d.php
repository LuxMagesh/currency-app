<!doctype html>
            <html lang="en" data-bs-theme="auto">
              <?php echo $__env->make('layout.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body>
               <?php echo $__env->make('layout.partials._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="container-fluid">
            <div class="row">
                <?php echo $__env->make('layout.partials._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('layout.partials._complex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
                <?php echo $__env->make('layout.partials._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\ticket-support\resources\views/layout\main4.blade.php ENDPATH**/ ?>