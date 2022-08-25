<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;

class PdfGenerateController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview(Request $request)
    {
        // pass view file
        $pdf = PDF::loadView('pdfview')->setPaper('a4')->setOrientation('portrait');
        // download pdf
        return $pdf->download('userlist.pdf');
    }
}

?>