<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DoneReportController extends Controller
{
    public function index(){
        // Call the stored procedure with the modified parameter
        $report = DB::select('CALL get_reports_by_status(?)', ['Selesai']);

        return view('pages.doneReport', ['report' => $report]);
    }
}
