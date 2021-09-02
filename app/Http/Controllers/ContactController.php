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
            'phone' => 'required|min:10|max:15',
            'email' => 'required|email',
            'message' => 'required|min:4',
            'page' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('contact')
                ->withErrors($validator)
                ->with("errors", "Por favor completa todos los campos");
        }

        $email = new ContactMail(
            $request->name,
            $request->phone,
            $request->email,
            $request->message
        );

        Mail::to('contacto@yeniliktec.com')->send($email);

        return redirect()->route('contact.tankyou');
    }
}
