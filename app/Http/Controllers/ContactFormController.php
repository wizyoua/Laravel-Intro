<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function create(){
        return view('contact.create');
    }
    public function store(){

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        //send an email
        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect('contact')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');

    }
}
