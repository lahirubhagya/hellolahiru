<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller {
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index() {
        return view('appContact');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request) {
        $contact            = new Contact;
        $contact->name      = $request->name;
        $contact->email     = $request->email;
        $contact->phone     = $request->phone;
        $contact->subject   = $request->subject;
        $contact->message   = $request->message;
        $contact->save();
        return response()->json(['success' => 'Thank you for contact me. I will contact you shortly.']);
    }
}
