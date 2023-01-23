@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3" style="display: flex">
            <a href="{{ route('person.edit', $person->id) }}" class="btn btn-info" style="margin-right: 20px">Редактировать</a>
            <form action="" method="POST" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>

        </div>
        <br>
        <br>

        <h2>{{ $person->person_name }}</h2>
        <br>
        <div class="mb-3">
            <h3>{{ $person->person_email }}</h3>
        </div>
        <br>
        <div class="mb-3">
            <h3>{{ $person->person_phone }}</h3>
        </div>
        <br>

    </div>
@endsection
