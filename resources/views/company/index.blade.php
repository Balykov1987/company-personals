@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="{{ route('company.create') }}" class="btn btn-warning">Создать компанию</a>
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
@endsection
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
