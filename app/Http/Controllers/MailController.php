<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContractMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        $mailData=[
            'title' => 'Radha Krishna Travels',
            'body' => 'Thank you for Your query. We will review Your Query.<br>Thank you.',

        ];
        Mail::to('srabina19@tbc.edu.np')->send(new ContractMail($mailData));
        echo "Email Send Successfully....";
       
    }
}
