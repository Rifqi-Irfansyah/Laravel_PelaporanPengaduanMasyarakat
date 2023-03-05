<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourReportController extends Controller
{
    public function index()
    {      
        return view('pages.yourreport');
    }
}
