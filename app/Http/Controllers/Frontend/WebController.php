<?php

namespace App\Http\Controllers\Frontend;


use App\Models\RegForWho;
use App\Models\LookingFor;
use App\Models\MaritalStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index(){
        $lookingfor =LookingFor::all();
        $regforwho = RegForWho::all();
        $maritalstatus = MaritalStatus::all();
        return view('frontend.pages.index', compact('lookingfor','regforwho','maritalstatus'));
    }



}
