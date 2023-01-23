@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Редактирование компании</h2>
        <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="company_name" class="form-label">Name</label>
                <input type="text" name="company_name" class="form-control" id="company_name" value="{{ $company->company_name }}">
            </div>
            <div class="mb-3">
                <label for="company_email" class="form-label">Email</label>
                <input type="email" name="company_email" class="form-control" id="company_email" value="{{ $company->company_email }}">
            </div>
            <div class="mb-3">
                <label for="company_address" class="form-label">Address</label>
                <input type="text" name="company_address" class="form-control" id="company_address" value="{{ $company->company_address }}">
            </div>
            <div class="mb-3">
                <img src="{{ public_path($company->company_logo) }}" alt="">
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
@endsection
