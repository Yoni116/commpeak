<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class importTaskController extends Controller
{
    public function create()
    {
        return view('importTask');
    }

    public function import()
    {
        importToDB();
    }
}
