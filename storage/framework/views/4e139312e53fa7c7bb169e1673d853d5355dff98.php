<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Добавление сотрудника</h2>
        <form action="<?php echo e(route('persons.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="person_name" class="form-label">Name</label>
                <input type="text" name="company_name" class="form-control" id="person_name">
            </div>
            <div class="mb-3">
                <label for="person_phone" class="form-label">Phone</label>
                <input type="text" name="person_phone" class="form-control" id="person_phone">
            </div>
            <div class="mb-3">
                <label for="person_email" class="form-label">Email</label>
                <input type="text" name="person_email" class="form-control" id="person_email">
            </div>

            <button type="submit" class="btn btn-primary">Добавить сотрудника</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Server\OpenServer\domains\new.tz\resources\views\person\create.blade.php ENDPATH**/ ?>