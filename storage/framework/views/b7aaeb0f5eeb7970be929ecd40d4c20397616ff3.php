<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="mb-3" style="display: flex">
            <a href="<?php echo e(route('company.edit', $company->id)); ?>" class="btn btn-info" style="margin-right: 20px">Редактировать</a>
            <form action="<?php echo e(route('company.delete', $company->id)); ?>" method="POST" >
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>

        </div>
        <br>
        <br>

        <h2><?php echo e($company->company_name); ?></h2>
        <br>
        <div class="mb-3">
            <h3><?php echo e($company->company_email); ?></h3>
        </div>
        <br>
        <div class="mb-3">
            <h3><?php echo e($company->company_address); ?></h3>
        </div>
        <br>
        <div class="mb-3">
            <img src="<?php echo e(asset('storage/' . $company->company_logo)); ?>" alt="logo" class="w-50">
        </div>
        <br>
        <div class="mb-3">
            <?php echo e($company->company_map); ?>

        </div>
        <br>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Server\OpenServer\domains\new.tz\resources\views\company\show.blade.php ENDPATH**/ ?>