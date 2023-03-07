<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreviewReportController extends Controller
{
    public function index()
    {
        // Call the stored procedure with the modified parameter
        $report = DB::select('CALL get_reports_by_status(?)', ['Terkirim']);

        return view('pages.previewReport', ['report' => $report]);
    }

    public function updateStatus(Request $request, $id)
    {
        // Update Status
        $newValue = $request->input('new_value');
        
        DB::select('CALL update_record(?, ?)', array($id, $newValue));

        // Call the stored procedure again to fetch the updated data
    // Call the stored procedure again to fetch the updated data
    $report = DB::select('CALL get_reports_by_status(?)', ['Terkirim']);

    return response()->json(['success' => true, 'report' => $report]);
        
    }
}