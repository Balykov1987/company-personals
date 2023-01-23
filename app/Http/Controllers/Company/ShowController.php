<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Person;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $company = Company::where('id', $id)->first();
        $persons = Person::where('company_id', $id)->get();

        return view('company.show', compact('company', 'persons'));
    }
}
