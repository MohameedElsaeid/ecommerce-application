<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;

class SendEmailController extends Controller
{
    public function send(string $email)
    {
        return $email;
    }
}
