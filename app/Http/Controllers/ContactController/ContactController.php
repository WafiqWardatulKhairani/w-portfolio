<?php

namespace App\Http\Controllers\ContactController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        return view ('public.contact');
    }
}
