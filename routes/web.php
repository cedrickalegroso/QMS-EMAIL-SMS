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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ptest', function () {
    return view('public.ptest');
});



Route::get('/viewmail', function () {
    return view('emails.mail');
});



// queue main view 
Route::get('/queuemain', function () {
    return view('public.queuemain');
});


// student/user interface 
Route::get('/queuemenu', function () {
    return view('public.queuemenu');
})->name('home');


// Menu Routes 

// Information
Route::get('/ticket/information', function () {
    return view('public.information');
})->name('information');





// New Ticket
Route::get('/ticket/{service}', [
    'uses' => 'TicketController@newTicket',
    'as' => 'newticket',
]);


// redirects to selected service
Route::get('/ticket/{service}/{id}', [
    'uses' => 'TicketController@service_redirect',
    'as' => 'service_redirect',
]);


// Prints Token
Route::post('/printTicket/{token}', [
    'uses' => 'TicketController@printTicket',
    'as' => 'printTicket',
]);




// redirects to selected service
Route::get('/fifth', [
    'uses' => 'TicketController@notifyticket',
    'as' => 'notifyticket',
]);




// Ticket Confirm
Route::post('/ticket/confirm', function () {
    return "GOOOD BOI";
})->name('ticketconfirm');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin Routes 

       // Service Backends
Route::get('/admin/{service}', [
    'uses' => 'TicketController@getServiceBackend',
    'as' => 'serviceBackend',
]);



          // Next ticket
Route::get('/admin/nextTicket/{service}/{token}', [
    'uses' => 'TicketController@nextTicket',
    'as' => 'nextTicket',
]);


