<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{

    public function validateAll(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'message' =>['required', 'string'],
            ]);
    }
    public function index()
    {
        $contract = Contract::latest()->paginate(1);
        return view('contract.index', compact('contract'));
    }

    public function store(Request $request)
    {
        $this->validateAll($request);
        $data = new Contract();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('contact.index');
    }

}
