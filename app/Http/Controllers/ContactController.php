<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        if (filter_var($request->contact, FILTER_VALIDATE_INT)) {
            $contact = new Contact();
            $contact->contact_date = date('Y-m-d H:i:s');
            $contact->guest_name = trim(htmlspecialchars($request->name));
            $contact->guest_email = trim(htmlspecialchars($request->email));
            $contact->guest_contact = trim(htmlspecialchars($request->contact));
            $contact->content_title = trim(htmlspecialchars($request->title));
            $contact->content_text = trim(htmlspecialchars($request->content));
            $contact->save();
            return redirect()->back()->with('success', 'Message sent succesfully. We will contact you soon!');
        } else {
            return redirect()->back()->with('error', 'Invalid inputs');
        }
    }
}