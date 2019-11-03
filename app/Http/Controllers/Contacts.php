<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Contacts extends Controller
{

    public function index()
    {
        return view('contacts');
    }

    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $contact = new Contact;
        
        $contact->name        = $request->name;
        $contact->email       = $request->email;
        $contact->tell        = $request->tell;
        $contact->social      = $request->social;
        $contact->save();

        return redirect()->route('contacts.index')->with('message', 'O contao foi criado com sucesso!');
    }


    public function show(User $user)
    {
        
    }

    public function edit(User $user)
    {

    }

    public function update(Request $request, User $user)
    {
      
    }

    public function destroy(User $user)
    {
    }
}
