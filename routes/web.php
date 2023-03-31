<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfGenerate;



use App\Http\Controllers\Site\AuthController;
use App\Http\Controllers\Site\BusinessController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.pages.index');
/*
 $text = ["Afghanistan","Albania","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas, The","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina Faso","Burma","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Central Africa","Chad","Chile","China","Colombia","Comoros","Congo, Democratic Republic of the","Costa Rica","Cote dIvoire","Crete","Croatia","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Fiji","Finland","France","Gabon","Gambia, The","Georgia","Germany","Ghana","Greece","Grenada","Guadeloupe","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Holy See","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Ivory Coast","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Korea, North","Korea, South","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Morocco","Mozambique","Namibia","Nauru","Nepal","Netherlands","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Qatar","Romania","Russia","Rwanda","Saint Lucia","Saint Vincent and the Grenadines","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Scotland","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","Spain","Sri Lanka","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Tibet","Timor-Leste","Togo","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","Uruguay","Uzbekistan","Vanuatu","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe","Luxembourg"];


 foreach($text as $country){
    \DB::table('countries')->insert(
        [
          "country" => $country
        ]
      );
 }
 */


});




Route::prefix('authentication')->group(function () {  
     Route::get('/signin',[AuthController::class,'SignIn'])->name('authentication.signin');
     Route::get('/signup',[AuthController::class,'SignUp'])->name('authentication.signup');
});

Route::prefix('dashboard')->group(function () {  
    Route::prefix('business')->group(function () {  
        Route::prefix('status')->group(function () {  
            Route::get('/company',[BusinessController::class,'GetViewCreateNewCompany'])->name('status.company.new');
            Route::post('/company',[BusinessController::class,'StoreCreateNewCompany'])->name('status.company.new.post');
            Route::get('/auto-entrepreneur',[BusinessController::class,'GetViewCreateStatusAutoEntreprneur'])->name('status.entrepreneur.new');
        });
            
    });
    

    Route::prefix('clients')->group(function () {  
        Route::get('/company/new',[BusinessController::class,'GetViewCreateNewClientCompany'])->name('clients.company.new');
        Route::get('/auto-entrepreneur/new',[BusinessController::class,'GetViewCreateNewClientEntrepreneur'])->name('clients.entrepreneur.new');
   });
   

});


// Route::get('/new',[BusinessController::class,'GetViewCreateNewBusiness'])->name('business.new');
//GetViewCreateNeClient





//Route::get('/',[PdfGenerate::class,'getpdf']);
Route::get('/a/{lang}/{number}',[PdfGenerate::class,'index']);



Route::get('/login', function () {
    return "login";
});


Route::get('/register', function () {
    return "register";
});
