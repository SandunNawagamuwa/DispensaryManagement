<?php

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


//welcome
Route::get('/', function () {
    return view('front');
});

//disable guest registrartion
Auth::routes([
    'register'=>false
]);

//home page
Route::get('/home', 'HomeController@index')->name('home');

//registrator relate functions done by admin
Route::get('/registrar/create','Admin\RegistrarController@create');
Route::post('/registrar/store','Admin\RegistrarController@store');
Route::get('/registrar/{email}/edit','Admin\RegistrarController@edit');
Route::put('/registrar/update','Admin\RegistrarController@update');
Route::get('/registrar/{email}/deactivate','Admin\RegistrarController@deactivate');
Route::get('/registrar/{email}/activate','Admin\RegistrarController@activate');

//doctor relate functions done by admin
Route::get('/doctor/create','Admin\DoctorController@create');
Route::post('/doctor/store','Admin\DoctorController@store');
Route::get('/doctor/{id}/edit','Admin\DoctorController@edit');
Route::put('/doctor/update','Admin\DoctorController@update');
Route::get('/doctor/{email}/deactivate','Admin\DoctorController@deactivate');
Route::get('/doctor/{email}/activate','Admin\DoctorController@activate');

//patient related functions done by registrar
Route::get('/patient/create','PatientController@create');
Route::post('/patient/store','PatientController@store');
Route::get('/patient/medical-history','PatientController@mh');
Route::get('/patient/hd','PatientController@hd');
Route::get('/patient/appointment','PatientController@app');
//edit himself by patient view
Route::get('/patient/details','PatientController@edit');
//set appointment himself by patient view
Route::post('/patient/set-appointment','PatientController@appointment');
//patient related functions done by patient
Route::post('/patient/update','PatientController@updatePatient');

//search specific patient by doctor using email
Route::post('/patient/index','PatientController@show');

//see personal info of patient by doctor
Route::get('/patient/seemore/{email}','PatientController@showmore');

//see medcl history of patient by doctor
Route::get('/patient/index/{email}','PatientController@showmore2');

//View patient's More details
// Route::get('/MD', function(){
//     return view ('doctor\Srilan\MoreDetails');

// });

//view patient's update diseases
Route::get('/U', function(){
    return view ('doctor\Srilan\Hereditary');

});
//get in all range view
Route::get('/MD', 'taskController@store');

//bloodsugar range update
Route::post('/U','taskController@UpdateBlood');



//preasure range update
Route::post('/p','preasureController@UpdatePreasure');

//collestrol range update
Route::post('/c','collestrolController@UpdateCOllestrol');

//blood sugar delete & edit buttons
Route::get('/deletetask/{id}','taskController@deletetask');
Route::get('/updatetask/{id}','taskController@updatetask');
Route::post('/updatenew','taskController@updatenew');

//preasure delete & edit buttons
Route::get('/delpre/{id}','preasureController@delpre');

//collestrol delete & edit buttons
Route::get('/delcol/{id}','collestrolController@delcol');

//upload image
Route::get('image-upload', 'patientController@imageUpload')->name('image.upload');
Route::post('image-upload', 'patientController@imageUploadPost')->name('image.upload.post');

//create patient's prescription 
Route::get('/DP', function(){
    return view ('doctor\Srilan\docpre');

});


