<?php

namespace App\Http\Controllers;

use App\Mail\DummyEmail;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send()
    {
    	Mail::to("testing@example.com")->send(new DummyEmail());

    	return "Email berhasil dikirim";
    }
}
