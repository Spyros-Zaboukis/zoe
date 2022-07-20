<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilFormController extends Controller
{
    public function showForm(){
        return view('myForm');
    }
    public function myFormStore ( Request $request){

        $profil = new \App\Models\myFormModel();
        $profil->firstName = $request->firstName;
        $profil->lastName = $request->lastName;
        $profil->gender = $request->gender;
        $profil->birthday = $request->birthday;
        $profil->email = $request->email;
        $profil->company = $request->company;
        $profil->message = $request->message;
        $profil->save();

        return view('dashboard');
    }

}




