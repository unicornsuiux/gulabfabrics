<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Contactform;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use View;

class HomeController extends JoshController
{

    /*
     * $user_activation set to false makes the user activation via user registered email
     * and set to true makes user activated while creation
     */
    private $user_activation = false;

    /**
     * Account sign in.
     *
     * @return View
     */
    public function home()
    {
        return view('home');
    }
    public function servicesOne()
    {
        return view('services.service-1');
    }
    public function getContent(Request $request)
    {
        $page = Page::where('type', 'default')->where('slug', $request->slug)->with('banner')->firstOrFail();
        return view('default', compact('page'));
    }

    public function getContact()
    {
        $page = Page::where('type', 'contact')->with('banner')->firstOrFail();
        return view('contact-us',compact('page'));
    }

    public function saveconatactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            // 'g-recaptcha-response' => 'required|captcha',
        ]);

        $contact = new Contactform();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        // $contact->phone = $validatedData['phone'];
        // $contact->subject = $validatedData['subject'];
        $contact->message = $validatedData['message'];
        $contact->save();

        $allRec = explode(',', env('CONTACT_US_RECIPIENT'));
        Mail::to($contact->email) // Send to the user's email
            ->bcc($allRec) // BCC the recipients from the config
            ->send(new ContactFormMail($contact));

        return redirect()->route('thank-you');
    }

}
