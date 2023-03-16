<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\DayDescription;
use App\Models\Pakages;
use Exception;
use Illuminate\Http\Request;

class DayDescriptionController extends Controller
{

    public function index()
    {
        $data = DayDescription::with('pakage')->paginate(7);
        return view('DaysDescription.display',['data'=>$data]); 
    }

    public function create(){
        $daydata = Pakages::all();
        return view('DaysDescription.index', compact('daydata')); 
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'DayDescription.*' => ['required', 'string'],
            'pakage_id' => ['required', 'integer'],
            ]);

                foreach($request->DayDescription as $key => $value){
                    $day = new DayDescription();
                    $saveRecord=[
                        $day->pakage_id = $request->pakage_id,
                        $day->days=$key + 1,
                        $day->DayDescription = $request -> DayDescription[$key],
                    ];
                    
                     $day->save($saveRecord);
                    
                 }
                
                 return redirect()->route('dayDesc.index')->with('success','Product Data Inserted Successfully');
        
          
                
    }
        public function destroy($id)
        {
            $day=DayDescription::findorFail($id);
            if(!is_null($day)){
            $day->delete();
            }
            return redirect()->back();
        }

        public function edit($id)
        {
            $product=DayDescription::findorfail($id);
            if(is_null($product)){
                return redirect('admin.display');
            }else{
                $data = compact('product');
                return view('DaysDescription.edit')->with($data);
            }
            
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'pakageName' => ['required', 'string', 'max:255'],
                'Description'=>['required','string'],
                'totalDays' => ['required', 'integer'],
            ]);

            $updateDay = DayDescription::findorFail($id);
            $updateDay->days = $request->days;
            $updateDay->DayDescription = $request -> DayDescription;
            $updateDay->save();
            return redirect()->route('DaysDescription.display')->with('success','Product Data Inserted Successfully');
        }
}
