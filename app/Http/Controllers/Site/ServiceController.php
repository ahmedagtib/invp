<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Cache;
use Exception;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    public function getCountries(){
            try{

                $countries = Cache::rememberForever('countries', function () {
                    return DB::table('countries')->get(['country']);
                });


                return response()->json(['countries'=>$countries],200);

            }catch(Exception $e){
                 Log::error($e);
                 
                 return response()->json(['error'=>''],500); 
            }
    }
}
