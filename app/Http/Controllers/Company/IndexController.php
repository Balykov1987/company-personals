<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->ajax()) {
            $company = Company::all();
            return DataTables::of($company)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="company/'.$row->id.'" class="edit btn btn-primary">Открыть</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('company.index');
    }
}
