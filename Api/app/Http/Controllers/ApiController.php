<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function myapi(){
        $data=['name'=>'anmol',
        'mobile'=>'8802125201',
    'status'=>0];
    return response()->json($data);
    }
}
