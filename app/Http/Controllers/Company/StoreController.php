<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function store (CompanyRequest $request)
    {
        $data = $request->validated();
        $data['company_logo'] = Storage::put('/images', $data['company_logo']);;

        Company::firstOrCreate($data);
        return view('company.index');
    }
}
