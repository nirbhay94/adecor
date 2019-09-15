<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Notifications\NewContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        //store contact
        $contact = Contact::create($request->only(['message','name','email','subject']));
        //send notification
        Notification::route('mail',env('APP_EMAIL','adecordesigner@gmail.com'))->notify(new NewContact($contact));
        return ['status' => 'success'];
    }
}
