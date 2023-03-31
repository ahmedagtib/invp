@extends('dashboard.partials.app')
@section('style')

@endsection
@section('content')

@component('dashboard.components.card-title')
          <h5 class="mt-0">clients </h5>
          <p>{{__('settings.descriptionpagenewbusiness')}}</p>
@endcomponent
<div class="mx-auto col-6">
<div x-ref="stpes" class="row d-none" x-data="app()"   x-init="() => { $el.classList.remove('d-none');}">
    <div  x-show.transition="step === 1">
        <div class="card border card-border-light">
            <div class="card-header py-3">

                <h6 class="card-title text-center mb-0">
                    I m 
                </h6>
            </div>
            <div class="card-body">
                  <div class="row">
                      <div class="col-md-6 text-center">
                            <div class="mt-2  cursor-pointer bg-soft-success rounded py-4" @click="choiceStatus('oentrepreneur')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-success svg-xxl">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                  </svg>
                                  
                                <h4 class="mt-2">Auto-entrepreneur</h4>
                            </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mt-2 text-center  cursor-pointer bg-soft-secondary rounded py-4" @click="choiceStatus('company')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary svg-xxl">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                              </svg>
                              <h4 class="mt-2">Company</h4>
                        </div>
                  </div>
              

                  </div>
            </div>
        </div>
    </div>
    <div  x-show.transition="step === 2">
        <div class="card border card-border-light">
            <div class="card-header py-3">

                <h6 class="card-title text-center mb-0">
                    Company information
                </h6>
            </div>
            <div class="card-body">
                <div>
                    <label for="companyName" class="form-label">Company Name</label>
                    <input type="password" class="form-control" id="companyName" placeholder="Company Name">
                </div>
                <div class="mt-2">
                    <label for="siret" class="form-label">SIRET</label>
                    <input type="password" class="form-control" id="siret" placeholder="Siret">
                </div>
                <div class="mt-2">
                    <label for="vat" class="form-label">VAT</label>
                    <input type="password" class="form-control" id="vat" placeholder="Vat">
                </div>
                <div class="mt-2 d-flex justify-content-end">
                     <button class="btn btn-info" @click="next(2)">Next</button>
                </div>
                  
             </div>
            </div>
        </div>
    
    <div  x-show.transition="step === 3">
        <div class="card border card-border-light">
            <div class="card-header py-3">

                <h6 class="card-title text-center mb-0">
                    Billing address
                </h6>
            </div>
            <div class="card-body">
                <div class="mt-2">
                    <label for="Country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="Country" placeholder="Country">
                </div>
                <div class="mt-2">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" placeholder="city">
                </div>
                <div class="mt-2">
                    <label for="zipcode" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" id="siret" placeholder="zipcode">
                </div>
                <div>
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="companyName" placeholder="Address">
                </div>
                <div class="mt-2 d-flex justify-content-end">
                     <button class="btn btn-info">next</button>
                </div>
                  
             </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

@endsection

@section('script')

<script src="//unpkg.com/alpinejs" defer></script>
<script>


        function app(){

            return {
                step : 1,
                data :{
                   status : '',
                },
                choiceStatus(type){
                    this.data.status = type;
                    console.log("my status is ",type);
                    this.step = 2;
                },
                next(next){
                    if(next == 2){
                        this.step = 3;
                    }
                    
                }
                

            }

       }

</script>

@endsection