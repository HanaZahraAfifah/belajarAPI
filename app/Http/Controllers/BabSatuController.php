<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabSatuController extends Controller
{
    public function a1()
    {
       $artikel=Artikel::where('id',1)->where('users_id',1)->get();

       return $artikel;
    }

    public function a2()
    {
       
    }
}
