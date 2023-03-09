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
        
        DB::statement('CALL update_record(?, ?)', array($id, $newValue));

        return response()->json(['success' => true]);
    }

    public function insertComment(Request $request, $id)
    {
        // Insert Comments
        $comment = $request->input('view_comment');
        $id_user = $request->input('view_id_user');
        
        DB::statement('CALL insert_comment(?, ?, ?)', array($comment, $id, $id_user));

        return response()->json(['success' => true]);
    }
}