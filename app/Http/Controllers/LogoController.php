<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function index()
    {
        $logo = Logo::find(1);
        return view('logo.display', compact('logo'));
    }
    public function edit(Logo $logo)
    {

        if(is_null($logo)){
            return redirect('logo.display');
        }else{
            return view('logo.edit',compact('logo'))->with('success','Logo updated Successfully');
        }
    }

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
