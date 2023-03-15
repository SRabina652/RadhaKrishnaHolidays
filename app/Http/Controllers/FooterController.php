<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::find(1);
        return view('footer.displayFooter', compact('footer'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {

        if(is_null($footer)){
            return redirect('footer.displayFooter');
        }else{
            return view('footer.index',compact('footer'))->with('success','Footer updated Successfully');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'facebook' => ['required', 'string', 'max:255'],
            'phone_number' => ['required'],
            'Twitter' => ['required'],
            'instagram' => ['required'],
            'WhatsApp' => ['required'],
        ]);
        $footer=Footer::findorFail($id);
        $footer->facebook = $request->facebook;
        $footer->instagram = $request->instagram;
        $footer->Twitter = $request->Twitter;
        $footer->WhatsApp=$request->WhatsApp;
        $footer->phone_number=$request->phone_number;
        $footer->save();
       return redirect()->route('footer.index')->with('success','Product Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
