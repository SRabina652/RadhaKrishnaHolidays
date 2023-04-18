<?php

namespace App\Http\Controllers;

use App\Models\IncludeDescription;
use Illuminate\Http\Request;
use App\Models\Pakages;
use Illuminate\Support\Facades\Auth;


class IncludeDescriptionController extends Controller
{

     /**
     * Display a listing of the Include Description resource.
     */
    public function index()
    {
        // if(Auth::guest()){
        //     return view("login");
        // }else{
        $includeDataDisplay = IncludeDescription::with('pakage')->paginate(10);
        return view('includeDescription.display', ['includeDataDisplay' => $includeDataDisplay]);
        // }
    }

    /**
     * Show the form for Creating the specified Include resource.
     */
    public function create()
    {
        $includedata = Pakages::all();
        return view('includeDescription.index', compact('includedata'));
    }

    /**
     * store the Include resource in storage or database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'IncludePoints.*' => ['required', 'string'],
            'pakage_id' => ['required', 'integer'],
        ]);

        foreach ($request->IncludePoints as $key => $value) {
            $day = new IncludeDescription();
            $saveRecord = [
                $day->pakage_id = $request->pakage_id,
                $day->IncludePoints = $request->IncludePoints[$key],
            ];

            $day->save($saveRecord);
        }
        return redirect()->route('dayDesc.index')->with('success', 'Include Data Inserted Successfully');
    }

     /**
     * Show the form for editing the specified Include resource.
     */
    public function edit($id)
    {
        $product = IncludeDescription::findorfail($id);
        if (is_null($product)) {
            return redirect('admin.display');
        } else {
            $data = compact('product');
            return view('includeDescription.edit')->with($data);
        }
    }
    /**
     * Update the specified Include resource in storage or database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'IncludePoints'=>['required','string'],
        ]);
        $updateDay = IncludeDescription::findorFail($id);
        $updateDay->IncludePoints = $request -> IncludePoints;
        $updateDay->save();
        return redirect()->route('include.index')->with('success','Product Data Updated Successfully');
    }
    
    /**
     * Remove the specified Include resource from database or storage.
     */
    public function destroy($id)
    {
        $day=IncludeDescription::findorFail($id);
        if(!is_null($day)){
        $day->delete();
        }
        return redirect()->back();
    }
}
