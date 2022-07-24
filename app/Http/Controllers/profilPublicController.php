<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class profilPublicController extends Controller
{


    public function showProfils(){
        $dataProfilName = DB::table('my_form_models')->get();

        return view('profils', compact('dataProfilName'));
    }
}
