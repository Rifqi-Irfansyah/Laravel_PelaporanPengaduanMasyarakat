<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreviewReportController extends Controller
{
    public function index()
    {
    // Set the collation of the parameter to match the collation of the column
    $status = 'Terkirim';

    // Call the stored procedure with the modified parameter
    $report = DB::select('CALL get_reports_by_status(?)', ['Terkirim']);

    return view('pages.previewReport', ['report' => $report]);
    }
}