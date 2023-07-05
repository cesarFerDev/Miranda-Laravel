<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

function uniqidReal($lenght) {
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($lenght / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
    } else {
        throw new Exception("no cryptographically secure random function available");
    }
    return substr(bin2hex($bytes), 0, $lenght);
}

class ContactController extends Controller
{

    public function store(Request $request)
    {
        if (filter_var($request->contact, FILTER_VALIDATE_INT)) {
            $contact = new Contact();
            $contact->id = uniqidReal(24);
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