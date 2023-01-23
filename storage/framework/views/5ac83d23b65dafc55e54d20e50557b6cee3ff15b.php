<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Добавление сотрудника</h2>
        <form action="<?php echo e(route('person.update', $person->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            <div class="mb-3">
                <label for="person_name" class="form-label">Name</label>
                <input type="text" name="person_name" value="<?php echo e($person->person_name); ?>" class="form-control" id="person_name">
            </div>
            <div class="mb-3">
                <label for="person_email" class="form-label">Email</label>
                <input type="text" name="person_email" value="<?php echo e($person->person_email); ?>" class="form-control" id="person_email">
            </div>
            <div class="mb-3">
                <label for="person_phone" class="form-label">Phone</label>
                <input type="text" name="person_phone" value="<?php echo e($person->person_phone); ?>" class="form-control" id="person_phone">
            </div>
            <div class="mb-3">
                <select class="form-select" name="company_id">
                    <option selected>Выберите компанию</option>
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($company->id); ?>"><?php echo e($company->company_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Добавить сотрудника</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Server\OpenServer\domains\new.tz\resources\views/person/edit.blade.php ENDPATH**/ ?>