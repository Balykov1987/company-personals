<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $companies = Company::all();

        return view('person.create', compact('companies'));
    }
}
