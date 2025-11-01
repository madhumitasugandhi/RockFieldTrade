<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AdminContactNotification;
use App\Mail\UserContactResponse;
use Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submitContact(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:20',
            ]);

            // Send email to admin
            Mail::to('info@rockfieldtrade.com')->send(new AdminContactNotification($data));

            // Send response to user
            Mail::to($data['email'])->send(new UserContactResponse());

            return response()->json(['message' => 'Thank you! We will get back to you soon.'], 200);
        } catch (\Exception $e) {
            Log::error('Contact form submission failed: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred. Please try again later.'], 500);
        }
    }
}