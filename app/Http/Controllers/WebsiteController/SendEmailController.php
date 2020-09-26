<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use App\Mail\SubscribeEmail;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function send(string $email)
    {
        Mail::to($email)->send(new SubscribeEmail(['hello' => 'hi']));
    }
}
