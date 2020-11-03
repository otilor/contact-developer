<?php

namespace GabrielFemi\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\PreventRequestsDuringMaintenance;
use App\Notifications\DeveloperContacted;
use Composer\EventDispatcher\Event;
use DoctrineTest\InstantiatorTestAsset\WakeUpNoticesAsset;
use GabrielFemi\Contact\jobs\SendMailToDeveloper;
use GabrielFemi\Contact\Mail\ContactDeveloperMail;
use GabrielFemi\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        $payload = $request->all();

        SendMailToDeveloper::dispatch($payload);
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
