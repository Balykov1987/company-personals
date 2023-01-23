<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonUpdateRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(PersonUpdateRequest $request, Person $person)
    {
        $data = $request->validated();
        $person->update($data);
        return view('person.show', compact('person'));
    }
}
