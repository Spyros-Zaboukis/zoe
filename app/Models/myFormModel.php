<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class myFormModel extends Model
{
    use HasFactory;
    protected $fillable = ['firstName','lastName','gender','birthday','email','company','message'];
}
