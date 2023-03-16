<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExcludeDescription;
use App\Models\Pakages;

class ExcludeDescriptionController extends Controller
{
    public function index()
    {
        $excludeDataDisplay = ExcludeDescription::with('pakage')->paginate(10);
        return view('excludeDescription.display', ['excludeDataDisplay' => $excludeDataDisplay]);
    }
    public function create()
    {
        $excludedata = Pakages::all();
        return view('excludeDescription.index', compact('excludedata'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ExcludePoints.*' => ['required', 'string'],
            'pakage_id' => ['required', 'integer'],
        ]);

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

    public function update(Request $request, $id)
    {
        $request->validate([
            'ExcludePoints'=>['required','string'],
        ]);
        $updateDay = ExcludeDescription::findorFail($id);
        $updateDay->ExcludePoints = $request -> ExcludePoints;
        $updateDay->save();
        return redirect()->route('exclude.index')->with('success','Product Data Updated Successfully');
    }
    
    public function destroy($id)
    {
        $day=ExcludeDescription::findorFail($id);
        if(!is_null($day)){
        $day->delete();
        }
        return redirect()->back();
    }
}
