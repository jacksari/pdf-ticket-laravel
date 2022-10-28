<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class pdfController extends Controller
{
    //

    public function generatePdfTicket(Request $request)
    {

        // $file_name = $this->path . '/pdf/'.$request->tipoDocumento.'-'. $request->codigo .'.pdf'; 
        // $view = \View::make('pdf.ticket',compact('request'))->render();
        // $pdf = \App::make('dompdf.wrapper');
        // $pdf->loadHTML($view);
        // $pdf->setPaper(array(0,0,150,600));
        // $pdf->render();
        // $content = $pdf->output();
        // $bytes = file_put_contents($file_name, $content);

        // $pdf = Pdf::loadView('pdf.ticket', []);
        // $pdf->setPaper(array(0,0,150,600));
        // return $pdf->download('invoice.pdf');

        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isPhpEnabled' => true, 'isRemoteEnabled' => true])
        ->setPaper(array(0,0,150,600))
        ->loadView('pdf.ticket', [
        ]);
  
      return $pdf->download('lotesStageFour.pdf');
    }
}
