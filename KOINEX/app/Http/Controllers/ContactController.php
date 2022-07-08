<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact.show');
    }

    public function submit(ContactRequest $request)
    {
        Mail::to('my@mail.com')->send(new ContactMail($request->name, $request->email, $request->phone, $request->msg));

        return view('index');
    }
}
