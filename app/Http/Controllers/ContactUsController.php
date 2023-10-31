<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact-us');
    }

    public function store(ContactUsRequest $request)
    {
        ContactUs::create($request->validated());
        return redirect()->back();
    }

}
