<?php

namespace App\Http;



class DateTable{

  /*




 $table =  DB::table('gn_leads_table')->where('user_id',auth()->user()->id)->where('slug',$request->slug)->first();

        $filters         = ($table->filters) ? json_decode($table->filters,true) : [];
        $order              = ($table->orderBy) ? $table->orderBy : ''; 
        $order_column       = ($table->orderColumn) ? $table->orderColumn : ''; 




        $start = $request->input('start');
        $length = $request->input('length');
        $limit = $table->limit;

       $leads = [];

      

        
  
        $leads = DB::table('leads') ->join('companies','companies.id','leads.company_id')->select([
            'leads.createdAt',
            'leads.leadId',
            'leads.name',
            'leads.firstName',
            'leads.lastName',
            'leads.orders',
            'leads.email',
            'leads.phone',
            'leads.zipdigit',
            'leads.zipname',
            'leads.status',
            'leads.buyPrice',
            'leads.sellPrice',
            'leads.area',
            'leads.sitekey',
            'leads.clicId',
            'leads.adId',
            'leads.campaignId',
            'leads.siteId',
            'leads.audience',
            'leads.adtext',
            'leads.keyword',
            'leads.device',
            'leads.clients',
            'leads.margin',
            'companies.display_name as companyName',
        ]);


  
        if(isset($filters['date']) && !empty($filters['date'])){


      
            $dates = $this->getPeriodDate($filters['show'],$filters['date']);

            $date_start = $dates[0];
            $date_end    = $dates[1];
            if($filters['show'] != "all"){
                $leads->whereDate('leads.createdAt','>=', $date_start)->whereDate('leads.createdAt','<=', $date_end);
            }
           

        }
        

  
        if(isset($filters['areas']) && !empty($filters['areas']) && count($filters['areas']) > 0){
            $leads->whereIn('leads.area_id',$filters['areas']);
         }

         if(isset($filters['companies']) && !empty($filters['companies'])   && count($filters['companies']) > 0){
            $leads->whereIn('leads.company_id',$filters['companies']);
         }
 
         if(isset($filters['sitekeys']) && !empty($filters['sitekeys'])  && count($filters['sitekeys']) > 0){
            $leads->whereIn('leads.site_key_id',$filters['sitekeys']);
         }
         



         
        if(isset($filters['zipnames']) && !empty($filters['zipnames'])  && count($filters['zipnames']) > 0){
            $leads->whereIn('leads.zipname',$filters['zipnames']);
        }

        if(isset($filters['status']) && !empty($filters['status'])  && count($filters['status']) > 0){
            $leads->whereIn('leads.status',$filters['status']);
        }


        
        if(isset($filters['clients']) && !empty($filters['clients'])  && count($filters['clients']) > 0){

          

            foreach($filters['clients']  as $key => $client){

               $leads->where(function($query) use ($key,$client)
               {
             
                     $query->Where('leads.clients','like','%'.$client.'%');
                  
       
               });
               
             
            }

      
         }

      

                if ($request->has('order')) {

                    $column = $request->input('order')[0]['column'];
                    $direction = $request->input('order')[0]['dir'];
                    $leads->orderBy($column, $direction);

                }elseif(!empty($order) && !empty($order_column)){
                    $leads->orderBy($order_column,$order);
                }





                $start = $request->input('start');
                $length = $request->input('length');
                $limit = $table->limit;

                if($limit == 0){
                    $limit =  $leads->count();
                }

               if($length > $limit){
                $leads =  $leads->offset($start)->take($limit)->get();
               }else{
                $leads =  $leads->offset($start)->take($length)->get();
               }
              

          
            
            $length = $length + $start;
        
  


        
        $data  = [];


        foreach ($leads as $key=>$lead) {
         
            $data[$key]['createdAt_html'] = "<span style='font-weight:bold;'>".Carbon::parse($lead->createdAt)->format('d/m/Y H:i:s')."</span>";
            $data[$key]['leadId_html'] = "<span class='badge rounded-pill badge-soft-info py-2 px-3' style='width: 100%;'>ID-".$lead->leadId."</span>";
            $data[$key]['name_html'] = "<span class='fw-bold'>".ucfirst($lead->name)."</span>";
            $data[$key]['email_html'] = "<a class='text-info' href='mailto:".$lead->email."' style='font-weight:bold ;'>".$lead->email."</a>";
            $data[$key]['phone_html'] = "<a class='text-info' href='tel:".$lead->phone."' style='font-weight:bold ;'>".$lead->phone."</a>";
            $data[$key]['zipdigit_html'] = "<span class='text-info'>".$lead->zipdigit."</span>";
            $data[$key]['zipname_html'] = "<span class='fw-bold'>".$lead->zipname."</span>";
            $data[$key]['orders_html'] = "<span class='fw-bold'>".$lead->orders."</span>";

            $data[$key]['firstName_html'] = "<span class='fw-bold'>".ucfirst($lead->firstName)."</span>";
            $data[$key]['lastName_html'] = "<span class='fw-bold'>".ucfirst($lead->lastName)."</span>";

            $data[$key]['status_html'] =  $lead->status;

            if(strcasecmp($lead->status,'SOLD_EXCLU') == 0) {
                $data[$key]['status_html'] =  '<span style="width:150px !important;"   class=" badge rounded-pill  badge-soft-success py-2 px-2">
                         <span style="margin-right:5px !important;">  Vendu exclusif </span>
                         <span  class="fa-solid fa-user-large"></span> 
                   </span>';
              }
      
      
              if(strcasecmp($lead->status,'SOLD_MUTU') == 0) {
                $data[$key]['status_html'] =  '<span  style="width:150px !important;"  class="badge rounded-pill  badge-soft-info py-2 px-2">
                           <span style="margin-right:5px !important;"> Vendu mutualisé</span>
                        <span  class="fa-duotone fa-user-group"></span> 
                  </span>';
              }
      
              if(strcasecmp($lead->status,'WAITING_DEMAND') == 0) {
           
                $data[$key]['status_html'] =  '<span  style="width:150px !important;"  class=" badge rounded-pill  badge-soft-warning py-2 px-2">
                            <span style="margin-right:5px !important;">  En attente </span>
                      <span  class="fa-duotone fa-spinner"></span> 
                   </span>'; 
              }
      
              if(strcasecmp($lead->status,'MATCHING') == 0) {
                $data[$key]['status_html'] =  '<span  style="width:150px !important;"  class=" badge rounded-pill  badge-soft-danger py-2 px-2">
                            <span style="margin-right:5px !important;">  Rejeté </span>
                      <span  class="fa-solid fa-xmark"></span> 
                   </span>'; 
              }


            if($lead->buyPrice > 0){
                $data[$key]['buyPrice_html'] =   "<span class='text-success fw-bold' >".$lead->buyPrice."€</span>";
            }else{
                $data[$key]['buyPrice_html'] =   "<span class='text-danger fw-bold' >".$lead->buyPrice."€</span>";
            }

            if($lead->sellPrice > 0){
                $data[$key]['sellPrice_html'] =   "<span class='text-success fw-bold' >".$lead->sellPrice."€</span>";
            }else{
                $data[$key]['sellPrice_html'] =   "<span class='text-danger fw-bold' >".$lead->sellPrice."€</span>";
            }
                  
            
            $data[$key]['area_html'] = "<span class='fw-bold'>".$lead->area."</span>";

            $data[$key]['sitekey_html'] =  "<span class='fw-bold'>".$lead->sitekey."</span>";


            $data[$key]['clients_html'] =  "<span class='fw-bold' >".$lead->clients."</span>";
            //$data[$key]['client_html'] =  "<span class='fw-bold' >".$lead->clients."</span>";


            if($lead->margin > 0){
                $data[$key]['margin_html'] = "<span class='fw-bold text-success' >".$lead->margin."€</span>";
             }else{
                $data[$key]['margin_html'] = "<span class='fw-bold text-danger' >".$lead->margin."€</span>";
             }


             $data[$key]['company_html']  =   "<span class='fw-bold text-info' >".$lead->companyName."</span>";
             $data[$key]['name_html']     =  $lead->name;
            
         
                
             
   

            $data[$key]['createdAt']     = Carbon::parse($lead->createdAt)->format('d/m/Y H:i:s');
            $data[$key]['leadId']        = $lead->leadId;
            $data[$key]['name']          = $lead->name;
            $data[$key]['email']         = $lead->email;
            $data[$key]['phone']         = $lead->phone;
            $data[$key]['zipdigit']      = $lead->zipdigit;
            $data[$key]['zipname']       = $lead->zipname;
            $data[$key]['orders']        = $lead->orders;

            $data[$key]['status']        = $lead->status;
            $data[$key]['buyPrice']        = $lead->buyPrice;
            $data[$key]['sellPrice']        = $lead->sellPrice;
            $data[$key]['area']        = $lead->area;
            $data[$key]['sitekey']        = $lead->sitekey;
            $data[$key]['margin']        = $lead->margin;
            $data[$key]['companyName']        = $lead->companyName;
            $data[$key]['companyName_html']        = '<span class="text-info">'.$lead->companyName.'</span>';

            

            
       
        }



        //return $data;

       $result = [];
       $result['draw'] = $request->input('draw');
       $result['recordsTotal'] = $limit;
       $result['recordsFiltered'] = $limit;
       $result['data'] = $data;

       $result['input'] = $request->all();



       return response()->json($result);






  */

}