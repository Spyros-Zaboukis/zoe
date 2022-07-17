<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilForm extends Controller
{
    public function showForm(){
        return view('myForm');
    }
}
