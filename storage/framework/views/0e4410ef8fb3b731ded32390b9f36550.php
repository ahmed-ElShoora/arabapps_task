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

                    <form action="/form_two" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                          <label for="exampleInputEmail1">email</label>
                          <input required type="email" name="email" value="<?php echo e($email); ?>" class="form-control" placeholder="Enter email">
                          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <small class="form-text text-muted"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">passport id 16 number</label>
                            <input required type="number" value="<?php echo e($passport_id); ?>" minlength="16" maxlength="16" name="passport_id" class="form-control" placeholder="Enter your passport id">
                            <?php $__errorArgs = ['passport_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <small class="form-text text-muted"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                          <br>
                        <button type="submit" class="btn btn-success">next</button>
                        <a href="/form_one" class="btn btn-danger">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmed/Desktop/Web Projects/arab_apps/resources/views/form/two.blade.php ENDPATH**/ ?>