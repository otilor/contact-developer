<?php


namespace GabrielFemi\Contact\jobs;


use GabrielFemi\Contact\Mail\ContactDeveloperMail;
use GabrielFemi\Contact\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailToDeveloper implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;


    /**
     * @var array
     */
    private $payload;

    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }


    public function handle()
    {
        // Notifying the user in response to an action that took place on the website.
        Mail::to(config('contact.addresses.developer'))
            ->send(new ContactDeveloperMail($this->payload['message'], $this->payload['name']));
    }
}
