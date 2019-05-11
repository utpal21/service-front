<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function index(){
return  view("praxis.single");
    }
    public function show(){
        return view('praxis.service_provider');
    }
    public function profile(){
        return view('praxis.profile');
    }
}
