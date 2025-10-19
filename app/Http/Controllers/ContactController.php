<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|min:3',
            'email'   => 'required|email',
            'message' => 'required|min:5',
        ]);

        Contact::create($request->only('name','email','message'));

        return redirect()->route('contacts.index')->with('success', 'Pesan berhasil ditambahkan!');
    }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name'    => 'required|min:3',
            'email'   => 'required|email',
            'message' => 'required|min:5',
        ]);

        $contact->update($request->only('name','email','message'));

        return redirect()->route('contacts.index')->with('success', 'Pesan berhasil diupdate!');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Pesan berhasil dihapus!');
    }
}

