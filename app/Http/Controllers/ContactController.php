<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('admin.pages.contact.index', compact('contact'));
    }
    public function create()
    {
        return view('client.pages.contact');
    }
    public function store(Request $request)
    {
        $contact = Contact::create($request->all());
        return redirect()->back()->with('status', 'Your Message Sent to Admin');
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()->with('delete', "Message Deleted Successfully");
    }
}
