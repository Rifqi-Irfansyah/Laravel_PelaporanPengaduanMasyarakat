<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {      
        return view('pages.report');
    }

    // Send Data Report To Database
    public function submit(Request $request)
    {
        $userId = Auth::id();

        $this->validate($request, [
            'description_report' => ['required'],
        ]);

        $data = Report::create([
            'id_user' => $userId,
            'title' => $request->title_report,
            'message' => $request->description_report,
            'destination_agency' => $request->destination_agency,
            'incident_date' => $request->incident_date,
        ]);

        return redirect()->back()->with('success', 'Pengaduan berhasil ditambahkan!');
    }
}