<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Researcher;


class ResearcherController extends Controller
{
    public function index(){

        return Researcher::all();
        
    }
    //
}
