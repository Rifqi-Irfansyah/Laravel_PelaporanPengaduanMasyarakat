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
            'description_report' => 'required',
            'image_report' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        // dd($request->image_report);
        
        // get original name file & store in public/images_report
        $image = $request->image_report;
        $filename =  $request->image_report->getClientOriginalName();
        $request->image_report->storeAs('public/images_report',$filename);

        $data = Report::create([
            'id_user' => $userId,
            'title' => $request->title_report,
            'message' => $request->description_report,
            'destination_agency' => $request->destination_agency,
            'images' => $filename,
            'incident_date' => $request->incident_date,
        ]);

        return redirect()->route('report')->with('success_sendreport', 'Pengaduan berhasil dikirimkan!');

    }
}