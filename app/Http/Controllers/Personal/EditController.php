<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Person;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke (Person $person)
    {
        $companies = Company::all();

        return view('person.edit', compact('person', 'companies'));
    }
}
