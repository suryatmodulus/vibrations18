<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\RegExport;
use App\Exports\RegExportSheets;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function export() 
    {
        return Excel::download(new RegExport, 'vib18-all-registrations.xlsx');
    }

    public function exportsheets() 
    {
        return (new RegExportSheets)->download('vib18-sheets.xlsx');
    }
}
