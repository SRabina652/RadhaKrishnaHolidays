<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContractController extends Controller
{

     /**
     *  function to validate all the input fields
     */
    public function validateAll(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'message' =>['required', 'string'],
            ]);
    }
      /**
     * Display a listing of the Contract Description resource.
     */
    public function index()
    {
        //only show 5 Contract description details for one page
        // if(Auth::guest()){
        //     return view("login");
        // }else{
        $contract = Contract::latest()->paginate(5);
        return view('contract.index', compact('contract'));
        // }
    }

    /**
     * store the Contract resource in storage or database.
     */
    public function store(Request $request)
    {
         // validating input fields
        $this->validateAll($request);

        //inserting all the Contract description one by one
        $data = new Contract();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->country = $request->country;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('contact.index');
    }

    /**
     * Update specified Contract resource in storage or database.
     */
    public function update(Request $request, $id){
        $updateDay = Contract::findorFail($id);
        $updateDay->replyStatus = $request->replyStatus;
        $updateDay->save();
        return redirect()->route('contact.index');
    }
}
