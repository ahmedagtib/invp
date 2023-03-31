<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NumberToWords\NumberToWords;
use App\Http\Template;
use Barryvdh\DomPDF\Facade\Pdf;



class PdfGenerate extends Controller
{
   public function index($lang,$number){
      
    $total =  NumberToWords::transformNumber($lang, $number);

    return $total;

   }


   public function getpdf(){
    
    $template = new Template();
    $page = $template->auto();
   //  return $page;
       return Pdf::loadHTML($page)->setPaper('a4', 'landscape')->setWarnings(false)->stream('myfile.pdf');

    return 200;
   }
}
