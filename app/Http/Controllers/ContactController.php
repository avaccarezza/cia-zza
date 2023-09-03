<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function sendEmail(Request $request)
    {
        // Validación de datos de entrada
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'name' => $request->input('name'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            'email' => $request->input('email'),
        ];

        Mail::to('agustin.zza95@gmail.com')
            ->send(new ContactMailable($data));

            
            return redirect()->route('contact.form')->with(['data' => $data, 'status' => 'Tu correo electrónico se envió satisfactoriamente!']);
    }
}
