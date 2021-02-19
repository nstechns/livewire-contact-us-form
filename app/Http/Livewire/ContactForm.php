<?php

namespace App\Http\Livewire;

use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $successMessage;

    protected $rules = [
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'required|min:10',
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitFormContact()
    {
        $contact = $this->validate();

        $contact_us =  ContactUs::create($contact);
        Mail::to('abc@gmail.com')->send(new ContactUsMail($contact_us));
        $this->successMessage = 'We received your message successfully and will get back to you shortly!';
        $this->reset('name','email','phone','message');
    }

}
