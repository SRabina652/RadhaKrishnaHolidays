<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExcludeDescription;
use App\Models\Pakages;
use Illuminate\Support\Facades\Auth;


class ExcludeDescriptionController extends Controller
{
    /**
     * Display a listing of the Exclude Description resource.
     */
    public function index()
    {
        //only show 10 exclude description details for one page
        // if(Auth::guest()){
        //     return view("login");
        // }else{
        $excludeDataDisplay = ExcludeDescription::with('pakage')->paginate(10);
        return view('excludeDescription.display', ['excludeDataDisplay' => $excludeDataDisplay]);
        // }
    }

     /**
     * Show the form for Creating the specified Exclude resource.
     */
    public function create()
    {
        $excludedata = Pakages::all();
        return view('excludeDescription.index', compact('excludedata'));
    }

     /**
     * store the Exclude resource in storage or database.
     */
    public function store(Request $request)
    {
        // validate all the input fields
        $request->validate([
            'ExcludePoints.*' => ['required', 'string'],
            'pakage_id' => ['required', 'integer'],
        ]);

        //loop to insert all the Exclude description one by one
        foreach ($request->ExcludePoints as $key => $value) {
            $day = new ExcludeDescription();
            $saveRecord = [
                $day->pakage_id = $request->pakage_id,
                $day->ExcludePoints = $request->ExcludePoints[$key],
            ];

            $day->save($saveRecord);
        }
        return redirect()->route('dayDesc.index')->with('success', 'Include Data Inserted Successfully');
    }

    /**
     * Show the form for editing the specified Exclude resource.
     */
    public function edit($id)
    {
        $product = ExcludeDescription::findorfail($id);
        if (is_null($product)) {
            return redirect('admin.display');
        } else {
            $data = compact('product');
            return view('excludeDescription.edit')->with($data);
        }
    }

     /**
     * Update specified Exclude resource in storage or database.
     */
    public function update(Request $request, $id)
    {
        // validate input fields
        $request->validate([
            'ExcludePoints'=>['required','string'],
        ]);

        // updating specified exclude description 
        $updateDay = ExcludeDescription::findorFail($id);
        $updateDay->ExcludePoints = $request -> ExcludePoints;
        $updateDay->save();
        return redirect()->route('exclude.index')->with('success','Product Data Updated Successfully');
    }
    
    /**
     * Remove the specified Exclude resource from database or storage.
     */
    public function destroy($id)
    {
        $excludeDataDisplay=ExcludeDescription::findorFail($id);
        if(!is_null($excludeDataDisplay)){
        $excludeDataDisplay->delete();
        }
        return redirect()->back();
    }
}
