<?php

namespace App\Http\Controllers\Api;

use App\Mail\ContactPageMail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;

class ContactController
{
    public function send(ContactFormRequest $request) {
        $inputs = $request->validated();

        $data = array(
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'number' => $inputs['number'] ?? 'N/A',
            'message' => $inputs['message'],
        );

        Mail::send(new ContactPageMail($data));

        return response()->json(['success' => $data]);
    }
}
