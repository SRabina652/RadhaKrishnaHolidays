<?php

namespace App\Http\Controllers;

use App\Models\IncludeDescription;
use Illuminate\Http\Request;

class IncludeDescriptionController extends Controller
{

    public function index()
    {
        $incDesc = IncludeDescription::latest()->paginate(7);
        return view('includeDescription.index', compact('incDesc'));
    }
    public function create()
    {
        $incDesc = IncludeDescription::all();
        return view('includeDescription.index', ['incDesc' => $incDesc]);
    }
}
