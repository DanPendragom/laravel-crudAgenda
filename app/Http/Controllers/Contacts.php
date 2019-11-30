<?php

namespace App\Http\Controllers;
// importando model 
use App\User;
use Illuminate\Http\Request;

class Contacts extends Controller
{

    public function index()
    {
        $contacts = User::all();
        return view('contatos.index')->with(['contacts' => $contacts]);
    }

    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $contact = new User;
        $contact->name        = $request->nome;
        $contact->tell        = $request->telefone;
        $contact->email       = $request->email;
        $contact->social      = $request->social;
        $contact->save();
        
        return redirect()->route('contacts.index');
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
