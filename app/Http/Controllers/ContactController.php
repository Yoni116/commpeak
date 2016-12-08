<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function save(ContactFormRequest $request)
    {
        $requestData = $request->get('name').",".$request->get('email').",".$request->get('subject').",".$request->get('content');
        saveToCSV($requestData);
        return view('response')->with('message',"Thank you " .$request->get('name'). " for contacting us!");
    }


}
