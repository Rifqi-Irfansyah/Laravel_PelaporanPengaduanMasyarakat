<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class YourReportController extends Controller
{
    public function index()
    {
        $id_user = Auth::user()->id;

        // Consume Database From Stored Procedure
        $report = DB::select("CALL get_reports_by_user($id_user)");

        return view('pages.yourreport', ['report' => $report]);
    }
}
