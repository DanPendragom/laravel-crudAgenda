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
        return view('contatos.create');
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


    public function show($id)
    {
        $contact = User::find($id);
        return view('contatos.show')->with(['contact'=> $contact]);
    }

    public function edit($id)
    {
        $contact = User::find($id);
        return view('contatos.edit')->with(['contact'=> $contact]);
    }

    public function update(Request $request, $id)
    {
        $contact = User::find($id);
        $contact->name        = $request->nome;
        $contact->tell        = $request->telefone;
        $contact->email       = $request->email;
        $contact->social      = $request->social;
        $contact->save();
        return redirect()->route('contacts.index');
    }

    public function destroy($id)
    {
        $contact = User::find($id);
        $contact->delete();

        return redirect()->route('contacts.index');
    }
}
