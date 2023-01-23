<?php $__env->startSection('content'); ?>
    <div class="container">

        <a href="<?php echo e(route('company.create')); ?>" class="btn btn-warning">Создать компанию</a>
        <br>
        <br>
        <table class="table company">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function () {
        var table = $('.company').DataTable({
            processing: true,
            serverSide: true,
            ajax: "",
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
                {
                    data: 'company_name',
                    name: 'name'
                },
                {
                    data: 'company_email',
                    name: 'email'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Server\OpenServer\domains\new.tz\resources\views/company/index.blade.php ENDPATH**/ ?>