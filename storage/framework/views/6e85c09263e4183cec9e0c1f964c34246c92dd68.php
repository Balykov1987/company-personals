<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="mb-3" style="display: flex">
            <a href="<?php echo e(route('person.edit', $person->id)); ?>" class="btn btn-info" style="margin-right: 20px">Редактировать</a>
            <form action="" method="POST" >
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>

        </div>
        <br>
        <br>

        <h2><?php echo e($person->person_name); ?></h2>
        <br>
        <div class="mb-3">
            <h3><?php echo e($person->person_email); ?></h3>
        </div>
        <br>
        <div class="mb-3">
            <h3><?php echo e($person->person_phone); ?></h3>
        </div>
        <br>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Server\OpenServer\domains\new.tz\resources\views/person/show.blade.php ENDPATH**/ ?>