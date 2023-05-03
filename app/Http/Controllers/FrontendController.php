<?php

namespace App\Http\Controllers;

use App\Models\DayDescription;
use App\Models\IncludeDescription;
use App\Models\Pakages;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Include_;

class FrontendController extends Controller
{
    public  function index(){
        $search =$request['search']??"";
        if($search != ""){
            $allProducts=Pakages::where('pakageName','LIKE',"%$search%")->paginate(6);
            return view('index', compact('allProducts','search'));
        }else{
            $allProducts=Pakages::latest()->paginate(6);
            return view('index', compact('allProducts','search'))->with('i',(request()->input('page',1) - 1)*12);
        }
        return view('index', compact('allProducts','search'));
    }

    public function include($id){
        if(!is_null($id)){
           $includes=IncludeDescription::where('pakage_id',$id)->get();
           dd($includes->toArray());
          // return view('')//path wherse you want to send the data with the array value of compact
        }
    }
}
