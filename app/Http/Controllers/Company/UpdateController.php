<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Company $company)
    {
        $data = $request->validated();
        $company->update($data);
        return view('company.show', compact('company'));
    }
}
