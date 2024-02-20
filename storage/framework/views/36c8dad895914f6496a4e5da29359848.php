<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <h1>Sure ?</h1>
                        <p>first name : <?php echo e($data->first_name); ?></p><br>
                        <p>last name : <?php echo e($data->last_name); ?></p><br>
                        <p>email : <?php echo e($data->email); ?></p><br>
                        <p>passport id : <?php echo e($data->number_passport); ?></p><br>
                        <p>status : <?php echo e($data->status); ?></p><br>
                        <p>age : <?php echo e($data->age); ?></p><br>
                    <br>
                    <a href="/end" class="btn btn-success">Send</a>
                    <a href="/form_three" class="btn btn-danger">back</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmed/Desktop/Web Projects/arab_apps/resources/views/submition/index.blade.php ENDPATH**/ ?>