<?php

namespace GabrielFemi\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use GabrielFemi\Contact\Mail\ContactDeveloperMail;
use GabrielFemi\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        Mail::to(config('contact.addresses.developer'))
            ->send(new ContactDeveloperMail($request->message, $request->name));
        Contact::create($request->all());
        redirect(route('contact'));
    }
}
