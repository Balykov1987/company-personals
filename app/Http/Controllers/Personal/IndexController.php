<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->ajax()) {
            $person = Person::all();
            return DataTables::of($person)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="personal/'.$row->id.'" class="edit btn btn-primary">Открыть</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('person.index');
    }
}
