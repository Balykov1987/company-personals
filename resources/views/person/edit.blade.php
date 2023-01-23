@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Добавление сотрудника</h2>
        <form action="{{ route('person.update', $person->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="person_name" class="form-label">Name</label>
                <input type="text" name="person_name" value="{{ $person->person_name }}" class="form-control" id="person_name">
            </div>
            <div class="mb-3">
                <label for="person_email" class="form-label">Email</label>
                <input type="text" name="person_email" value="{{ $person->person_email }}" class="form-control" id="person_email">
            </div>
            <div class="mb-3">
                <label for="person_phone" class="form-label">Phone</label>
                <input type="text" name="person_phone" value="{{ $person->person_phone }}" class="form-control" id="person_phone">
            </div>
            <div class="mb-3">
                <select class="form-select" name="company_id">
                    <option selected>Выберите компанию</option>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Добавить сотрудника</button>
        </form>
    </div>
@endsection
