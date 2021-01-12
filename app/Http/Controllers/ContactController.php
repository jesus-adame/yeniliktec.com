<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __invoke()
    {
        return view('contact', [ "title" => 'contacto' ]);
    }

    public function sendMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'message' => 'required|min:4',
            'page' => 'required',
        ]);

        $redirectUrl = route('welcome') . '#contacto';

        if ($request->page == 'contact') {
            $redirectUrl = route('contact');
        }

        if ($validator->fails()) {
            return redirect($redirectUrl)
                ->withErrors($validator);
        }

        $email = new ContactMail(
            $request->name,
            $request->email,
            $request->message
        );

        Mail::to('contacto@yeniliktec.com')->send($email);

        return redirect($redirectUrl)
            ->with("success", "Gracias por tu mensaje, en breve nos comunicamos contigo.");
    }
}
