<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ValidatedReportController extends Controller
{
    public function index()
    {
        // Call the stored procedure with the modified parameter
        $report = DB::select('CALL get_reports_by_status(?)', ['Proses']);

        return view('pages.validatedReport', ['report' => $report]);
    }

    public function downloadReport($id)
    {
        // Get Data
        $report = DB::select('CALL get_reports_by_id(?)', [$id]);

        // Send Data to View
        $view = View::make('components.reportDownload', ['report' => $report])->render();

        // Setting format paper
        $options = new Options();
        $options->set('isRemoteEnabled', true);

        // Generate PDF
        $pdf = new Dompdf($options);
        $pdf->setPaper('F4', 'potrait');
        $pdf->loadHtml($view);
        $pdf->render();

        // Setting filename
        $filename = 'report-' . $id . '.pdf';

        // Process Download
        return response($pdf->output(), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }
}