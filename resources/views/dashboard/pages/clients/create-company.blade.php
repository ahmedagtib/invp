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
                    Address
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
                     <button class="btn btn-info" @click="next(1)">next</button>
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
                     <button class="btn btn-info" >Next</button>
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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
                    if(next == 1){
                        this.step = 2;
                    }
                    
                }
                

            }

       }

</script>

@endsection