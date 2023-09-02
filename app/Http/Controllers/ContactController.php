<?php
namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailable;
class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

public function sendEmail(Request $request)
{
    $data = [
        'name' => $request->input('name'),
        'subject' => $request->input('subject'),
        'message' => $request->input('message'),
    ];

    Mail::to('agustin.zza95@gmail.com')->send(new ContactMailable($data));

    return redirect('/contact')->with('success', '¡Correo enviado correctamente!');
}
}