@extends('dashboard.partials.app')
@section('style')

@endsection
@section('content')

@component('dashboard.components.card-title')
          <h5 class="mt-0">{{__('settings.titlepagenewbusiness')}}</h5>
          <p>{{__('settings.descriptionpagenewbusiness')}}</p>
@endcomponent

<div class="row"  x-data="app()">
    <div class="col-md-8">
        <div class="card"  >
            <div class="card-body">
                <div class="row">
        
                    <div class="col-md-4 mt-1">
                        <div>
                            <label  class="form-label">Company Name</label>
                            <input type="text" class="form-control"  placeholder="Company Name" x-model="data.name" />
                            <template x-if="errors.name != ''">
                               <p class="text-danger"  x-text="errors.name[0]"></p>
                            </template>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <div>
                            <label for="placeholderInput" class="form-label">RC</label>
                            <input type="text" class="form-control" id="placeholderInput" placeholder="RC" x-model="data.rc" />
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <div>
                            <label  class="form-label">IF</label>
                            <input type="text" class="form-control"  placeholder="IF" x-model="data.if"  />
                        </div>
                    </div>
                    
                    <div class="col-md-4 mt-1">
                        <div>
                            <label  class="form-label">ICE</label>
                            <input type="text" class="form-control"  placeholder="ICE" x-model="data.ice" />
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <div>
                            <label  class="form-label">CNSS</label>
                            <input type="text" class="form-control"  placeholder="CNSS" x-model="data.cnss" />
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <div>
                            <label  class="form-label">Patente</label>
                            <input type="text" class="form-control"  placeholder="Patente" x-model="data.patente" />
                        </div>
                    </div>
                    
                           
                    <div class="col-md-4 mt-1">
                        <div>
                            <label  class="form-label">Phone</label>
                            <input type="text" class="form-control"  placeholder="Phone" x-model="data.phone" />
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <div>
                            <label  class="form-label">Email</label>
                            <input type="text" class="form-control"  placeholder="Email" x-model="data.email" />
                        </div>
                    </div>
                    <div class="col-md-4 mt-1 d-none">
                        <div>
                            <label  class="form-label">logo</label>
                            <input type="file" class="form-control"  x-ref="logo"  placeholder="Logo" x-on:change="changeLogo()"  />
                        </div>
                    </div>
                    
                    
                    
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 mt-1">
                            <div>
                                <label  class="form-label">Address</label>
                                <input type="text" class="form-control"  placeholder="Address" x-model="data.address" />
                            </div>
                        </div>
                        <div class="col-md-3 mt-1">
                            <div>
                                <label  class="form-label">city</label>
                                <input type="text" class="form-control"  placeholder="city"  x-model="data.city" />
                            </div>
                        </div>
                        <div class="col-md-3 mt-1">
                            <div>
                                <label  class="form-label">country</label>
                                <input type="text" class="form-control"  placeholder="country" x-model="data.country" />
                            </div>
                        </div>
        
                    </div>
        
                    <div class="d-flex justify-content-end mt-3">
                          <button   class="btn btn-primary" @click="create()" type="button" x-bind:disabled="createDisabled">
                            <template x-if="createDisabled">
                            <span class="d-flex align-items-center">
                                <span class="spinner-border  spinner-border-sm flex-shrink-0" role="status">
                                  <span class="visually-hidden">Loading...</span>
                                </span>
                                <span class="ms-2">  create </span>
                              </span>
                            </template>
                            <template x-if="!createDisabled">
                               <span >  create </span>
                            </template>
                         </button>
                    </div>
                    
        
            </div>
        
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" id="company-view-detail">
            <div class="card-body text-center">
               
                <h5 class="mt-3 mb-1" x-text="data.name"></h5>
             

              
            </div>
            <div class="card-body">
        
                <div >
                    <div class="px-2">
                     
                            <div class="mt-1">
                                <span class="fw-medium" scope="row">RC :</span>
                                <span x-text="data.rc"></span>
                            </div>
                            <div class="mt-1">
                                <span class="fw-medium" scope="row">IF :</span>
                                <span x-text="data.if"></span>
                            </div>
                            <div class="mt-1">
                                <span class="fw-medium" scope="row">ICE :</span>
                                <span x-text="data.ice"></span>
                            </div>
                            <div>
                                <span class="fw-medium" scope="row">CNSS :</span>
                                <span x-text="data.cnss"></span>
                            </div>
                            <div class="mt-1">
                                <span class="fw-medium" scope="row">Patente :</span>
                                <span x-text="data.patente"></span>
                            </div>
                            <div class="mt-1">
                                <span class="fw-medium" scope="row">Address :</span>
                                <span x-text="data.address"></span>
                            </div>
                            <div class="mt-1">
                                <span class="fw-medium" scope="row">City :</span>
                                <span x-text="data.city"></span>
                            </div>
                            <div>
                                <span class="fw-medium" scope="row">Coundivy :</span>
                                <span x-text="data.coundivy"></span>
                            </div>
                            <div>
    
                            <div class="mt-1">
                                <span class="fw-medium" scope="row">Contact Email :</span>
                                <span x-text="data.email"></span>
                            </div>
                            <div class="mt-1">
                                <span class="fw-medium" scope="row">Phone :</span>
                                <span  x-text="data.phone"></span>
                            </div>
                       
                        </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<script>


        function app(){

            return {
                createDisabled : false,
                Message   : '', 
                data :{
                   name : '',
                   rc   : '',
                   if   : '',
                   ice  : '',
                   cnss :  '',
                   patente :  '',
                   phone :  '',
                   email :  '',
                   address :  '',
                   city :  '',
                   country :  '',


              },
              errors : {
                name : '',
                   rc   : '',
                   if   : '',
                   ice  : '',
                   cnss :  '',
                   patente :  '',
                   phone :  '',
                   email :  '',
                   address :  '',
                   city :  '',
                   country :  '',
              },
              create(){
            
                this.createDisabled = true;
                this.restForm();
           
                axios.post("{{route('status.company.new.post')}}",this.data)
                .then((res)=>{
                     console.log(res.data)
                   if(res.response.status === 200){
                       this.restForm();
                       this.Message = res.data.message;
                   }
                 
                
                })
                .catch((err)=>{
                    console.log(err.response.status)

                    if(err.response.status === 422){
                        this.errors = err.response.data.data;

                        console.log(err.response.data.data)
              

                     
                    }
                })
                .finally(() => {
                    this.createDisabled = false;

                    console.log(this.errors)
                
                });

              },
              changeLogo(e){
                this.defaultLogo = window.URL.createObjectURL(event.target.files[0]);
                  console.log(window.URL.createObjectURL(event.target.files[0]))
                   console.log(this.defaultLogo)
             },
             restForm(){
                this.errors = {
                        name : '',
                        rc   : '',
                        if   : '',
                        ice  : '',
                        cnss :  '',
                        patente :  '',
                        phone :  '',
                        email :  '',
                        address :  '',
                        city :  '',
                        country :  '',
                    }
             }
                

            }

       }

    

</script>

@endsection