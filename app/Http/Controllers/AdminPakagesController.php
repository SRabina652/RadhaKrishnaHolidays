<?php

namespace App\Http\Controllers;

use App\Models\AdminPakages;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminPakagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.layouts.admin-dash-layout');
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
    public function show(AdminPakages $adminPakages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminPakages $adminPakages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminPakages $adminPakages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminPakages $adminPakages)
    {
        //
    }
}
