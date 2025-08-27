<?php

namespace App\Livewire;

use App\Mail\ContactEmail;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.main', ['title' => 'Web & App Development | Cybersecurity Services | Ilvarire Technologies'])]
class Home extends Component
{
    public $name = null;
    public $email = null;
    public $message = null;
    public $subject = null;
    public $website = null;
    public function sendMail()
    {
        if (!empty($this->website)) {
            return;
        }

        $key = 'contact-form:' . request()->ip();
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $this->addError('rate_limit', 'Too many submissions. Please try again later.');
            return;
        }

        RateLimiter::hit($key, 60);
        $validatedData = $this->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s\-\'.]+$/'],
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ], [
            'name.required' => 'Please enter your name.',
            'name.regex' => 'The name may only contain letters, spaces, dashes, apostrophes, and periods.',
            'email.required' => 'Your email is required.',
            'email.email' => 'Please enter a valid email address.',
            'subject.required' => 'Subject cannot be empty.',
            'message.required' => 'Message cannot be empty.',
            'message.min' => 'Message should be at least :min characters.',
        ]);
        $contact = Contact::create($validatedData);
        Mail::to('support@ilvariretechnologies.com')->send(
            new ContactEmail($contact)
        );
        $this->reset(['name', 'email', 'subject', 'message']);
        session()->flash('success', 'Thank you! Your Message has been sent.!');
    }

    public function render()
    {
        $year = Carbon::now()->year;
        return view('livewire.home', [
            'year' => $year
        ]);
    }
}
