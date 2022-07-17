<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilFormController extends Controller
{
    public function showForm(){
        return view('myForm');
    }

}
