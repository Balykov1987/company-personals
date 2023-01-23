<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="mb-3" style="display: flex">
            <a href="<?php echo e(route('company.edit', $company->id)); ?>" class="btn btn-info" style="margin-right: 20px">Редактировать</a>
            <form action="" method="POST" >
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

        <div class="mb-3">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Телефон</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $persons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($person->id); ?></th>
                    <td><?php echo e($person->person_name); ?></td>
                    <td><?php echo e($person->person_email); ?></td>
                    <td><?php echo e($person->person_phone); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <br>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Server\OpenServer\domains\new.tz\resources\views/company/show.blade.php ENDPATH**/ ?>