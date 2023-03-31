<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class BusinessController extends Controller
{
    public function GetViewCreateNewBusiness(){

          return view('dashboard.pages.business.create');
    }


    public function GetViewCreateNewClientCompany(){

        return view('dashboard.pages.clients.create-company');
    }


    public function GetViewCreateNewClientEntrepreneur(){
        return view('dashboard.pages.clients.create-autoe');

    }

    
    public function GetViewCreateStatusAutoEntreprneur(){

        return view('dashboard.pages.business.create-auto');
    }


    public function GetViewCreateNewCompany(){
        return view('dashboard.pages.business.create-company');

    }


    public function StoreCreateNewCompany(CompanyRequest $request){

        try{

        

            DB::table('companies')->insert([
                'user_id' => 1,
                'name' => $request->name,
                'rc'   => $request->rc,
                'if'   => $request->if,
                'ice'  => $request->ice,
                'cnss' => $request->cnss,
                'tax' => $request->patente,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'city' =>  $request->city,
                'country' => $request->country,
            ]);

            return response()->json([
                "success" => true,
                'message'   => 'created ',
                'data'     => []
             ],200);
            

        }catch(Exception){
             return response()->json([
                "success" => false,
                'message'   => 'samthing was wrong',
                'data'     => []
             ],500);
        }

    

       

    }


    /*

              if($request->hasFile('logo')){
            $file = $request->file('logo');
          $filename = $file->getClientOriginalName();
          $file->storeAs('logos',$filename,'public');
        }

    */



}
