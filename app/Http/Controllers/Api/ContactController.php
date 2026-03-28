<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;

class ContactController
{
    public function send(ContactFormRequest $request) {
        $inputs = $request->validated();

        $contact = [
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'number' => $inputs['number'] ?? 'N/A',
            'message' => $inputs['message'],
        ];

        return response()->json(['success' => $contact]);
    }
}
