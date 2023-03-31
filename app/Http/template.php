<?php

namespace App\Http;



class Template{

  
   public function auto(){
      $logo = asset('logo.png');
      $content = '<!DOCTYPE html><html><head><title>Invoice Template</title><style>body, html{height: 100%;}body{font-family: Arial, sans-serif;}.page{max-width: 800px; margin: 10px auto; padding: 40px; font-size: 16px; line-height: 24px;}.header{text-align: center;padding: 10px;}.header img{display: inline-block;margin: 0 auto;}.title{background-color: #80808024;text-align: center;padding: 4px; margin-left: auto; margin-right: auto; width: 400px; color: #000000a6;}.address{margin-top: 20px;text-align: left;padding-right: 20px;}.date{margin-top: 20px;text-align: right;padding-right: 20px;}.table{border-collapse: collapse;margin-top: 20px;margin-bottom: 20px;width: 100%;}.table th, .table td{padding: 10px;text-align: center;border: 1px solid black;}.footer{margin-top: 10px; width: 100%;text-align: center;border-top: 1px solid black;padding-top: 20px; padding-bottom: 5px; margin-bottom: 0px;}@page{size: 21cm 29.7cm; margin: 0;}</style></head><body> <div class="page"><div class="header"><img src="'.$logo.'" height="200" width="200" alt="Logo"></div><div class="date"> <p> <strong>Date :</strong> 20/12/2023</p></div><div class="title"><h1>Facture numéro 000 001</h1></div><div class="address"><p><strong>Client : </strong> Myrtle S. Williams</p><p><strong>Adresse : </strong> 948 W Adams Blvd ,California </p></div><table class="table"><thead><tr><th>Label</th><th>Quantity</th><th>Total</th></tr></thead><tbody><tr><td>xxxxxxx</td><td>1</td><td>3500 $</td></tr></tbody></table> <table class="table"> <tbody> <tr> <td>Montant en euros <br/> (Hors champ de la TVA)</td><td> Total Net à payer <br/> 500$</td><td> Total Net à payer <br/> 1000$</td></tr></tbody> </table><div><p>ARRETE LA PRESENTE FACTURE A LA SOMME DE: </p><p>#Price in letters#</p></div><div class="footer"><p>SMART SERVICES & TOOLS SARL –AU</p><p>LOT 233 HAY EL MOHAMMADI SECT 1, 46000, Safi – MAROC</p><p>RC 9519 / IF 33633940 / Patente 50000494 / CNSS 1311857 / ICE 002213731000081 / </p><p>Tél (212) 0637166905</p></div></div></body></html>';

      return  $content;
   }
    



}

