<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Propaganistas\LaravelPhone\PhoneNumber;

class ContactController extends Controller
{
    public function __invoke()
    {
        $phoneCodes = config('phone_codes');
        return view('contact', [ "title" => 'contacto', 'phoneCodes' => $phoneCodes ]);
    }

    public function sendMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required|min:4',
            'phone_code' => 'required',
            'phone'      => 'required|phone:phone_code',
            'email'      => 'required|email',
            'message'    => 'required|min:4',
            'page'       => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('contact')
                ->withInput()
                ->withErrors($validator);
        }

        $phoneNumber = PhoneNumber::make($request->phone, $request->phone_code)->formatE164();

        $email = new ContactMail(
            $request->name,
            $phoneNumber,
            $request->email,
            $request->company,
            $request->message
        );

        Mail::to('contacto@yeniliktec.com')->send($email);

        return redirect()->route('contact.tankyou');
    }
}
