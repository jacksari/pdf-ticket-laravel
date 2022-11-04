<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class pdfController extends Controller
{
  //

  public function generatePdfTicket(Request $request)
  {
    $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isPhpEnabled' => true, 'isRemoteEnabled' => true])
      ->setPaper(array(0, 0, 150, 600))
      ->loadView('pdf.ticket', []);

    return $pdf->download('lotesStageFour.pdf');
  }

  public function generatePdfFacturaA4(Request $request)
  {
    $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isPhpEnabled' => true, 'isRemoteEnabled' => true])
      ->setPaper('a4', 'portrait')
      ->loadView('pdf.facturaA4', []);

    return $pdf->download('factura.pdf');
  }
}
