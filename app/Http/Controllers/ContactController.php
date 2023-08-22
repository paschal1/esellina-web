<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
       public function connect(Request $request){

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect('contact_us')->with('status', 'Message sent Successfully');



    }

     public function messages(){
        $messages = Contact::paginate(10);
        return view('admin.messages.message', compact('messages'));
    }

    public function about_us()
    {
          
            return view('esellina.about_us');
   
    }


    public function contact_us()
    {
          
            return view('esellina.contact_us');
   
    }
}
