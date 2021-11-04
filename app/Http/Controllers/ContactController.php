<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\model\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

       $contact = [
         'name' => $request->name,
         'email' => $request->email,
         'message' => $request->message
       ];

       Contact::create($contact);

        return redirect()->back()->with('success', 'Wir haben Ihre Informationen erhalten. wir werden innerhalb von 24 Stunden eine Rückmeldung geben.');
    }
}
