<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'content' => 'required|min:3'
        ],[
            'name.required' => __('I nedd your name')
        ]);

        // return request()->all();

        Mail::to('brayandaga5@gmail.com')->queue(new MessageReceived($message));
        return 'Mensaje enviado';
    }
}
