<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class YourReportController extends Controller
{
    public function index()
    {
        // Consume Database From Stored Procedure
        $report = DB::select('CALL get_all_reports()');
   
        return view('pages.yourreport',['report' => $report]);
    }
}
