<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecsController extends Controller
{
    public function create(){
        return view('register.createSpecs');
    }
}
