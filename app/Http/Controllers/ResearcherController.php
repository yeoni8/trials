<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Researcher;
use App\Trial;

class ResearcherController extends Controller
{
    public function index(){

        return Trial::where('researcher_id','=',2)->get();

        return Researcher::all();

    }
    //
}
