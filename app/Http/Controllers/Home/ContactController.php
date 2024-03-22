<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;

use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function ContactMe()
    {
        return view('frontend.contact.contact_me');
    }

    public function StoreMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|',
            'subject' => 'required|',
            'address' => 'required|',
            'message' => 'required|',
            'budget' => 'required|',

        ]);
        $contact = Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'address' => $request->address,
            'budget' => $request->budget,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Your Message was sent! We will get back to you shortly',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ContactMessage()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.contact_message', compact('contacts'));
    }

    public function DeleteMessage($id)
    {
        Contact::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Message deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('contact.message')->with($notification);
    }

    public function GetInTouch(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|',

        ]);
        $contact = Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Thank you! We will get back to you shortly',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }



} // End Class
