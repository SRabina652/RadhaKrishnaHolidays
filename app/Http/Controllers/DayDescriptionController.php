<?php

namespace App\Http\Controllers;


use App\Models\DayDescription;
use App\Models\Pakages;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DayDescriptionController extends Controller
{

    /**
     * Display a listing of the day description.
     */
    public function index()
    {
        // if(Auth::guest()){
        //     return view("login");
        // }else{
        $data = DayDescription::with('pakage')->paginate(7);
        return view('DaysDescription.display', ['data' => $data]);
        // }
    }

    /**
     * Show the form for creating a new Days List.
     */
    public function create()
    {
        $daydata = Pakages::all();
        return view('DaysDescription.index', compact('daydata'));
    }

    /**
     * Store a newly created days resource in storage.
     */
    public function store(Request $request)
    {
        // validate the input fields
        $request->validate([
            'DayDescription.*' => ['required', 'string'],
            'pakage_id' => ['required', 'integer'],
        ]);

        //loop to insert all the day description one by one
        foreach ($request->DayDescription as $key => $value) {
            $day = new DayDescription();
            $saveRecord = [
                $day->pakage_id = $request->pakage_id,
                $day->days = $key + 1,
                $day->DayDescription = $request->DayDescription[$key],
            ];

            $day->save($saveRecord);
        }

        return redirect()->route('dayDesc.index')->with('success', 'Product Data Inserted Successfully');
    }

    /**
     * Show the form for editing the specified day resource.
     */
    public function edit($id)
    {
        $product = DayDescription::findorfail($id);
        if (is_null($product)) {
            return redirect('admin.display');
        } else {
            $data = compact('product');
            return view('DaysDescription.edit')->with($data);
        }
    }

    /**
     * Update the specified Day resource in storage.
     */
    public function update(Request $request, $id)
    {
        // validate all the input fields
        $request->validate([
            'DayDescription' => ['required', 'string'],
            'days' => ['required', 'integer'],
        ]);

        // updating specified day description details
        $updateDay = DayDescription::findorFail($id);
        $updateDay->days = $request->days;
        $updateDay->DayDescription = $request->DayDescription;
        $updateDay->save();
        return redirect()->route('dayDesc.index')->with('success', 'Day Data Updated Successfully');
    }

    /**
     * Remove the specified day resource from storage.
     */
    public function destroy($id)
    {
        $day = DayDescription::findorFail($id);
        if (!is_null($day)) {
            $day->delete();
        }
        return redirect()->back();
    }
}
