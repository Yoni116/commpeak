<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class DataController extends Controller
{
    function getData(){
        return view('showData')->with('contacts',Contact::all());
    }
}
