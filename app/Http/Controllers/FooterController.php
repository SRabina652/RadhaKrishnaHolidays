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
        $footer = Footer::latest()->paginate(2);
        return view('footer.displayFooter', compact('footer'));
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
            'Location' => ['required', 'string', 'max:255'],
            'Telephone' => ['required'],
            'MailId' => ['required'],
            'PhoneNumber' => ['required'],
        ]);
        $footer=Footer::findorFail($id);
        $footer->Location = $request->Location;
        $footer->Telephone = $request->Telephone;
        $footer->MailId = $request->MailId;
        $footer->PhoneNumber=$request->PhoneNumber;
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
