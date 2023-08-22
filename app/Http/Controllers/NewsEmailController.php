<?php

namespace App\Http\Controllers;

use App\Models\NewsEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\YourEmailMailable;

class NewsEmailController extends Controller
{
    public function storeNewsEmail(Request $request){
        $email = new NewsEmail();
        $email->email = $request->input('email');
        $email->save();
        return redirect()->back()->with('status', 'Thanks for subscribing to our newsletter');
    }

    public function letter(){
        $view = NewsEmail::paginate(16);
        return view('admin.newsletter.emails', compact('view'));
    }

    public function index()
{
    return view('admin.email.index');
}

    public function sendEmail(Request $request)
{
    $request->validate([
        'recipients' => 'required|array',
        'recipients.*' => 'email',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    $recipients = $request->input('recipients');
    $emailData = [
        'subject' => $request->input('subject'),
        'message' => $request->input('message'),
    ];
 $recipients = $request->input('recipients');
    $emailData = [
        'subject' => $request->input('subject'),
        'message' => $request->input('message'),
    ];

    foreach ($recipients as $recipient) {
        Mail::to($recipient)->send(new YourEmailMailable($emailData));
    }

    return redirect()->back()->with('status', 'Emails sent successfully.');
}

}
