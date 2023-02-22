<?php

namespace App\Http\Controllers;

use App\Models\Pakages;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PakagesController extends Controller
{

    public function validateAll(Request $request){
        $request->validate([
            'pakageName' => ['required', 'string', 'max:255'],
            'Description'=>['required','string'],
            'totalDays' => ['required', 'integer'],
            'price' =>['required', 'integer'],
            'pakageImage' => ['required','image','mimes:jpeg,png,jpg,gif'],
            ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pakages $pakages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pakages $pakages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pakages $pakages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pakages $pakages)
    {
        //
    }
}
