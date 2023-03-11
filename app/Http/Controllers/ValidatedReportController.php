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
        $pdf->setPaper('A4', 'landscape');
        $pdf->loadHtml($view);
        $pdf->render();

        // Mengatur nama file yang akan diunduh
        $filename = 'report-' . date('Ymd_His') . '.pdf';

        // Melakukan proses download
        return response($pdf->output(), 200)
        ->header('Content-Type', 'application/pdf')
        ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }
}