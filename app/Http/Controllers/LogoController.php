<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class LogoController extends Controller
{
    /**
     * Display the Logo Description resource.
     */
    public function index()
    {
        // if(Auth::guest()){
        //     return view("login");
        // }else{
        $logo = Logo::find(1);
        return view('logo.display', compact('logo'));
        // }
    }
    /**
     * Show the form for editing the specified Logo resource.
     */
    public function edit(Logo $logo)
    {

        if(is_null($logo)){
            return redirect('logo.display');
        }else{
            return view('logo.edit',compact('logo'))->with('success','Logo updated Successfully');
        }
    }

     /**
     * Update the specified Logo resource in storage or database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'TextLogo' => ['nullable', 'string', 'max:200'],
            'ImageLogo'=>['nullable','image','mimes:jpeg,png,jpg,gif'],
        ]);
        $image='';
        if($request->ImageLogo){
            $image = time() . '.' . $request->ImageLogo->extension();
            $request->ImageLogo->move(public_path('uploads'),$image);
        }
        $logo = Logo::findorFail($id);
        $logo->TextLogo = $request->TextLogo;
        if($request->hasFile('ImageLogo')){
            Storage::delete($logo->ImageLogo);
            $logo->ImageLogo = $image;
        }
        $logo->save();
       return redirect()->route('logo.index')->with('success','Logo Inserted Successfully');
    }
}
