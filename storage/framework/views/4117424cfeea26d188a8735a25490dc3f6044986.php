<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Редактирование компании</h2>
        <form action="<?php echo e(route('company.update', [$company->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="company_name" class="form-label">Name</label>
                <input type="text" name="company_name" class="form-control" id="company_name" value="<?php echo e($company->company_name); ?>">
            </div>
            <div class="mb-3">
                <label for="company_email" class="form-label">Email</label>
                <input type="email" name="company_email" class="form-control" id="company_email" value="<?php echo e($company->company_email); ?>">
            </div>
            <div class="mb-3">
                <label for="company_address" class="form-label">Address</label>
                <input type="text" name="company_address" class="form-control" id="company_address" value="<?php echo e($company->company_address); ?>">
            </div>
            <div class="mb-3">
                <img src="<?php echo e(public_path($company->company_logo)); ?>" alt="">
                <label for="formFile" class="form-label">Logo</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="company_map" class="form-label">Map</label>
                <input type="text" name="company_map" class="form-control" id="company_map">
            </div>
            <button type="submit" class="btn btn-primary">Редактировать компанию</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Server\OpenServer\domains\new.tz\resources\views\company\edit.blade.php ENDPATH**/ ?>