@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Добавление компании</h2>
        <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="company_name" class="form-label">Name</label>
                <input type="text" name="company_name" class="form-control" id="company_name">
            </div>
            <div class="mb-3">
                <label for="company_email" class="form-label">Email</label>
                <input type="email" name="company_email" class="form-control" id="company_email">
            </div>
            <div class="mb-3">
                <label for="company_address" class="form-label">Address</label>
                <input type="text" name="company_address" class="form-control" id="company_address">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Logo</label>
                <input class="form-control" name="company_logo" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="company_map" class="form-label">Map</label>
                <input type="text" name="company_map" class="form-control" id="company_map">
            </div>
            <button type="submit" class="btn btn-primary">Добавить компанию</button>
        </form>
    </div>
@endsection
