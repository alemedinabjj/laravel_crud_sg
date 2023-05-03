<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {

        // var_dump($_POST);
        return view('site.contact', ['titulo' => 'Contato']);
    }
}
