<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonStoreRequest;
use App\Models\Person;

class StoreController extends Controller
{
    public function __invoke(PersonStoreRequest $request)
    {
        $data = $request->validated();
        Person::firstOrCreate($data);
        return redirect()->route('person.index');
    }
}
