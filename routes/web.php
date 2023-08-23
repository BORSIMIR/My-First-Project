<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::get('/add_facility_view',[AdminController::class,'add_facility_view']);



Route::post('/upload_doctor',[AdminController::class,'upload']);

/////////////////////////FACILITY/////////////////////////////////////

Route::post('/upload_facility',[AdminController::class,'upload_facility']);

Route::get('/updatefacility/{id}',[AdminController::class,'updatefacility']);

Route::get('/showfacility',[AdminController::class,'showfacility']);

Route::post('/editfacility/{id}',[AdminController::class,'editfacility']);

////////////////////////FACILITY////////////////////////////////////////

Route::post('/appointment/{id}',[HomeController::class,'appointment']);

Route::get('/aboutus',[HomeController::class,'aboutus']);

Route::get('/appoint',[HomeController::class,'appoint']);

Route::get('/videokjhx123kuydg1',[HomeController::class,'videokjhx123kuydg1']);

Route::get('/date',[HomeController::class,'date']);

Route::get('/videoadmin',[AdminController::class,'videoadmin']);


Route::get('/appointme',[HomeController::class,'appointme']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/doctor_id/{id}',[HomeController::class,'doctor_id']);

Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/showappointment1',[AdminController::class,'showappointment1']);

////////////////////////DOCAPPOINTVIEW////////////////////////////////////////

Route::get('/docappointview',[AdminController::class,'docappointview']);

Route::get('/docappointview1',[AdminController::class,'docappointview1']);

Route::get('/docappointview2',[AdminController::class,'docappointview2']);

Route::get('/docappointview3',[AdminController::class,'docappointview3']);

Route::get('/docappointview4',[AdminController::class,'docappointview4']);

Route::get('/docappointview5',[AdminController::class,'docappointview5']);

Route::get('/docappointview6',[AdminController::class,'docappointview6']);

Route::get('/docappointview7',[AdminController::class,'docappointview7']);

Route::get('/docappointview8',[AdminController::class,'docappointview8']);

Route::get('/docappointview9',[AdminController::class,'docappointview9']);

Route::get('/docappointview10',[AdminController::class,'docappointview10']);

Route::get('/docappointview11',[AdminController::class,'docappointview11']);

Route::get('/docappointview12',[AdminController::class,'docappointview12']);

Route::get('/docappointview13',[AdminController::class,'docappointview13']);

Route::get('/docappointview14',[AdminController::class,'docappointview14']);

Route::get('/docappointview15',[AdminController::class,'docappointview15']);

Route::get('/docappointview16',[AdminController::class,'docappointview16']);

Route::get('/docappointview17',[AdminController::class,'docappointview17']);

Route::get('/docappointview18',[AdminController::class,'docappointview18']);

Route::get('/docappointview19',[AdminController::class,'docappointview19']);

Route::get('/docappointview20',[AdminController::class,'docappointview20']);

Route::get('/docappointview21',[AdminController::class,'docappointview21']);

Route::get('/docappointview22',[AdminController::class,'docappointview22']);

Route::get('/docappointview23',[AdminController::class,'docappointview23']);

Route::get('/docappointview24',[AdminController::class,'docappointview24']);

Route::get('/docappointview25',[AdminController::class,'docappointview25']);

Route::get('/docappointview26',[AdminController::class,'docappointview26']);

Route::get('/docappointview27',[AdminController::class,'docappointview27']);

Route::get('/docappointview28',[AdminController::class,'docappointview28']);

Route::get('/docappointview29',[AdminController::class,'docappointview29']);

////////////////////////DOCAPPOINTVIEW////////////////////////////////////////

Route::get('/adocappointview',[AdminController::class,'adocappointview']);

Route::get('/adocappointview1',[AdminController::class,'adocappointview1']);

Route::get('/adocappointview2',[AdminController::class,'adocappointview2']);

Route::get('/adocappointview3',[AdminController::class,'adocappointview3']);

Route::get('/adocappointview4',[AdminController::class,'adocappointview4']);

Route::get('/adocappointview5',[AdminController::class,'adocappointview5']);

Route::get('/adocappointview6',[AdminController::class,'adocappointview6']);

Route::get('/adocappointview7',[AdminController::class,'adocappointview7']);

Route::get('/adocappointview8',[AdminController::class,'adocappointview8']);

Route::get('/adocappointview9',[AdminController::class,'adocappointview9']);

Route::get('/adocappointview10',[AdminController::class,'adocappointview10']);

Route::get('/adocappointview11',[AdminController::class,'adocappointview11']);

Route::get('/adocappointview12',[AdminController::class,'adocappointview12']);

Route::get('/adocappointview13',[AdminController::class,'adocappointview13']);

Route::get('/adocappointview14',[AdminController::class,'adocappointview14']);

Route::get('/adocappointview15',[AdminController::class,'adocappointview15']);

Route::get('/adocappointview16',[AdminController::class,'adocappointview16']);

Route::get('/adocappointview17',[AdminController::class,'adocappointview17']);

Route::get('/adocappointview18',[AdminController::class,'adocappointview18']);

Route::get('/adocappointview19',[AdminController::class,'adocappointview19']);

Route::get('/adocappointview20',[AdminController::class,'adocappointview20']);

Route::get('/adocappointview21',[AdminController::class,'adocappointview21']);

Route::get('/adocappointview22',[AdminController::class,'adocappointview22']);

Route::get('/adocappointview23',[AdminController::class,'adocappointview23']);

Route::get('/adocappointview24',[AdminController::class,'adocappointview24']);

Route::get('/adocappointview25',[AdminController::class,'adocappointview25']);

Route::get('/adocappointview26',[AdminController::class,'adocappointview26']);

Route::get('/adocappointview27',[AdminController::class,'adocappointview27']);

Route::get('/adocappointview28',[AdminController::class,'adocappointview28']);

Route::get('/adocappointview29',[AdminController::class,'adocappointview29']);

////////////////////////DOCAPPOINTVIEW////////////////////////////////////////

////////////////////////TOTAL USER////////////////////////////////////////

Route::get('/totaluser',[AdminController::class,'totaluser']);

Route::get('/healthrecords',[AdminController::class,'healthrecords']);

Route::get('/medicalhistory',[AdminController::class,'medicalhistory']);

Route::get('/updatetotaluser/{id}',[AdminController::class,'updatetotaluser']);

Route::post('/edittotaluser/{id}',[AdminController::class,'edittotaluser']);

Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);



////////////////////////TOTAL USER////////////////////////////////////////
Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/cancelled/{id}',[AdminController::class,'cancelled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/doctorappointment',[AdminController::class,'doctorappointment']);

Route::get('/doctorshow',[AdminController::class,'doctorshow']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/deleteappoint/{id}',[AdminController::class,'deleteappoint']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('/body',[AdminController::class,'body']);

/////////////SEARCH////////////////////

Route::get('/search',[AdminController::class,'search']);

Route::get('/search1',[AdminController::class,'search1']);

Route::get('/search2',[AdminController::class,'search2']);

/////////////SEARCH////////////////////

/////////////PRINT////////////////////

Route::get('/print_pdf/{id}',[AdminController::class,'print_pdf']);

Route::get('/pdf/{id}',[HomeController::class,'pdf']);

Route::get('/export_appoint_pdf',[AdminController::class,'export_appoint_pdf'])->name('export_appoint_pdf');

Route::get('/export_appoint_pdf11',[AdminController::class,'export_appoint_pdf11'])->name('export_appoint_pdf11');

Route::get('/export_appoint_pdf1',[AdminController::class,'export_appoint_pdf1'])->name('export_appoint_pdf1');

Route::get('/export_patient_pdf2',[AdminController::class,'export_patient_pdf2'])->name('export_patient_pdf2');

Route::get('/export_doctor_pdf3',[AdminController::class,'export_doctor_pdf3'])->name('export_doctor_pdf3');

Route::get('/export_patient_pdf4',[AdminController::class,'export_patient_pdf4'])->name('export_patient_pdf4');

Route::get('/export_patient_pdf5',[AdminController::class,'export_patient_pdf5'])->name('export_patient_pdf5');



/////////////PRINT////////////////////

/////////////SERVICES////////////////////

Route::get('/services',[HomeController::class,'services']);

Route::get('/add_services_view',[AdminController::class,'add_services_view']);

Route::post('/upload_services',[AdminController::class,'upload_services']);

Route::get('/updateservices/{id}',[AdminController::class,'updateservices']);

Route::get('/showservices',[AdminController::class,'showservices']);

Route::post('/editservices/{id}',[AdminController::class,'editservices']);

/////////////SERVICES////////////////////

Route::get('/selectme',[HomeController::class,'selectme']);

Route::get('/specialty',[HomeController::class,'specialty']);

Route::get('/findProductName',[HomeController::class,'findProductName']);

Route::get('/findPrice',[HomeController::class,'findPrice']);

Route::get('/findPrice1',[HomeController::class,'findPrice1']);

Route::get('/findPrice2',[HomeController::class,'findPrice2']);

Route::get('/findPrice3',[HomeController::class,'findPrice3']);

Route::get('/findPrice4',[HomeController::class,'findPrice4']);





Route::get('/createMeeting',[AdminController::class,'createMeeting']);	




/////////////PAYPAL////////////////////

/////////////ADD////////////

Route::get('/showall',[AdminController::class,'showall']);

Route::post('/upload_specialty',[AdminController::class,'upload_specialty']);

Route::get('/add_specialty_view',[AdminController::class,'add_specialty_view']);

Route::post('/upload_doctoracc',[AdminController::class,'upload_doctoracc']);

Route::get('/add_doctor_acc_view',[AdminController::class,'add_doctor_acc_view']);


