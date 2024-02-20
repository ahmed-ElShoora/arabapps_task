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

                    <center>
                        <?php if(Session::has('notification')): ?>
    <div class="alert alert-info">
        <?php echo e(Session::get('notification')); ?>

    </div>
<?php endif; ?>
                        <?php if($count == 0 || $step == '1' || $step == '2' || $step == '3'): ?>
                            <a 
                            <?php if($count == 0): ?>
                                href="/form_one"
                            <?php elseif($step == '1'): ?>
                                href="/form_two"
                            <?php elseif($step == '2'): ?>
                                href="/form_three"    
                            <?php elseif($step == '3'): ?>
                                href="/sure_page" 
                            <?php endif; ?>
                            class="btn btn-success" >انشاء او متابعه الحاله السابقه</a>
                        <?php else: ?>
                            <p class="btn btn-danger" >تم الانشاء من قبل</p>
                        <?php endif; ?>
                    </center>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmed/Desktop/Web Projects/arab_apps/resources/views/home.blade.php ENDPATH**/ ?>