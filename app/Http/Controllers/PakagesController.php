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
        $pakages = Pakages::latest()->paginate(1);
        return view('admin.display', compact('pakages'));
        // return view('admin.layouts.admin-dash-layout', compact('pakages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateAll($request);

        $image='';
        if($request->pakageImage){
            $image = time() . '.' . $request->pakageImage->extension();
            $request->pakageImage->move(public_path('uploads'),$image);
        }

        $data = new Pakages();
        $data->pakageName = $request->pakageName;
        $data->price = $request->price;
        $data->totalDays = $request->totalDays;
        $data->pakageImage = $image;
        $data->Description=$request->Description;
        $data->save();
       // print_r($request->all());
        return redirect()->route('pakages.index')->with('success','Product Data Inserted Successfully');
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
    public function edit($id)
    {
        $product=Pakages::findorFail($id);
        if(is_null($product)){
            return redirect('admin.index');
        }else{
            $data = compact('product');
            return view('admin.edit')->with($data);
        }
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
