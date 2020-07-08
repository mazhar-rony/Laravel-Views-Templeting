<?php

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::get('/about', function() {
    //return "about page rony at VS Code";

    return view('about');
})->name('aboutpage');

Route::get('/contact', function() {
    // return "contact page";

    // $a = 10 +20;
    // return $a;

    return view('contact');
})->name('contactpage');

Route::get('/about/service', function(){

    return "service page";
});

Route::get('/about/{name}', function($name){
    $name = strtoupper($name);
    return $name;
});

Route::get('/sum/{number1}/{number2}', function ($number1,$number2) {
    $sum = $number1 + $number2;
    return $sum;

})->where(['number1' => '[0-9]+', 'number2' => '[0-9]+']);

Route::get('/multy/{number1}', 'Mathcontroller@multy')->where(['number1' => '[1,2,3]']);*/



/* class 5 start
Route::group(['prefix' => 'math'], function(){

    //Route::get('sum', function(){
       // return "sum function";
    //});
    Route::get('sum/{num1}/{num2}', 'Mathcontroller@sum');

    //Route::get('sub', function(){
        //return "sub function";
    //});
    Route::get('sub', 'Mathcontroller@sub');

    //Route::get('multy', function(){
       // return "multy function";
    //});
    Route::get('mul', 'Mathcontroller@mul');

});

*/
/*Route::get('country', 'CountryController@index');
Route::get('country/create', 'CountryController@create');
Route::post('country/create', 'CountryController@store');*/
/*
Route::resource('country', 'CountryController');
*/ // class 5 end

Route::get('/', 'SiteController@index');
Route::get('/about_site', 'SiteController@aboutsite');
Route::get('/contact_site', 'SiteController@contactsite');
Route::get('/extra', 'SiteController@extra');
Route::get('/dontshow', 'SiteController@dontshow');
