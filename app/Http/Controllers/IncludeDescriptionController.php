<?php

namespace App\Http\Controllers;

use App\Models\IncludeDescription;
use Illuminate\Http\Request;
use App\Models\Pakages;

class IncludeDescriptionController extends Controller
{

    public function index()
    {
        $includeDataDisplay = IncludeDescription::with('pakage')->paginate(10);
        return view('includeDescription.display', ['includeDataDisplay' => $includeDataDisplay]);
    }
    public function create()
    {
        $includedata = Pakages::all();
        return view('includeDescription.index', compact('includedata'));
    }

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
    
    public function destroy($id)
    {
        $day=IncludeDescription::findorFail($id);
        if(!is_null($day)){
        $day->delete();
        }
        return redirect()->back();
    }
}
