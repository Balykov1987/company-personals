@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3" style="display: flex">
            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-info" style="margin-right: 20px">Редактировать</a>
            <form action="" method="POST" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>

        </div>
        <br>
        <br>

        <h2>{{ $company->company_name }}</h2>
        <br>
        <div class="mb-3">
            <h3>{{ $company->company_email }}</h3>
        </div>
        <br>
        <div class="mb-3">
            <h3>{{ $company->company_address }}</h3>
        </div>
        <br>
        <div class="mb-3">
            <img src="{{ asset('storage/' . $company->company_logo) }}" alt="logo" class="w-50">
        </div>
        <br>
        <div class="mb-3">
            {{ $company->company_map }}
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
                @foreach( $persons as $person )
                <tr>
                    <th scope="row">{{ $person->id }}</th>
                    <td>{{ $person->person_name }}</td>
                    <td>{{ $person->person_email }}</td>
                    <td>{{ $person->person_phone }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <br>

    </div>
@endsection
