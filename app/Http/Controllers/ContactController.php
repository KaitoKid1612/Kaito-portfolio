<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Mail::to('leviet1612@gmail.com')->send(new ContactMail(
            $request->name,
            $request->email,
            $request->message
        ));

        return redirect()->back()->with('message', 'Message sent successfully!');
    }
}
