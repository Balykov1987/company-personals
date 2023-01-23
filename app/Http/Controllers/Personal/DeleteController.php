<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Person $person)
    {
        $person->delete();
        return redirect()->route('person.index');
    }
}
