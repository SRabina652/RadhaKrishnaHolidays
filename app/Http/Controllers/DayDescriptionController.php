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
        // dd($data);
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

       
            try{
                foreach($request->DayDescription as $key => $value){
                    $day = new DayDescription();
                    $saveRecord=[
                        $day->pakage_id = $request->pakage_id,
                        $day->days=$key + 1,
                        $day->DayDescription = $request -> DayDescription[$key],
                    ];
                    $day->save($saveRecord);
                    
                }
                return redirect()->route('pakages.display')->with('success','Product Data Inserted Successfully');
        
            }catch(Exception $e){
                 echo "unique key voilation";
            }
    }
        public function destroy($id)
        {
            $day=DayDescription::findorFail($id);
            if(!is_null($day)){
            $day->delete();
            }
            return redirect()->back();
        }
    
}
