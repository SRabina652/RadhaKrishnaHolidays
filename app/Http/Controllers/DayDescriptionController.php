<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\DayDescription;
use App\Models\Pakages;
use Illuminate\Http\Request;

class DayDescriptionController extends Controller
{

  

    public function index()
    {
        $data = Pakages::all();
        return view('DaysDescription.index', compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'DayDescription.*' => ['required', 'string'],
            'Pakage_id' => ['required', 'integer'],
            ]);

       

        foreach($request->DayDescription as $key => $value){
            $day = new DayDescription();
            $saveRecord=[
                $day->Pakage_id = $request->Pakage_id,
                $day->days=$key,
                $day->DayDescription = $request -> DayDescription[$key],
            ];
            $day->save($saveRecord);
            
        }
        return redirect()->route('pakages.display')->with('success','Product Data Inserted Successfully');

        // dd($request->all());
    }
}
