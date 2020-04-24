<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('pages.examples.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.examples.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('pages.examples.forgot-password');
})->name('forgot-password');

Route::get('/recover-password', function () {
    return view('pages.examples.recover-password');
})->name('recover-password');

Route::get('/lockscreen', function () {
    return view('pages.examples.lockscreen');
})->name('lockscreen');

Route::get('/404', function () {
    return view('pages.examples.404');
})->name('404');

Route::get('/500', function () {
    return view('pages.examples.500');
})->name('500');

Route::get('/', function () {
    return view('dashboard');
})->name('/');

Route::get('/widgets', function () {
   return view('pages.widgets');
})->name('widgets');

Route::get('/navbar', function () {
    return view('pages.layout.top-nav');
})->name('navbar');

Route::get('/charts', function () {
    return view('pages.charts.chartjs');
})->name('charts');

Route::get('/tables', function () {
    return view('pages.tables.data');
})->name('tables');


Route::get('/general', function () {
    return view('pages.UI.general');
})->name('general');

Route::get('/icons', function () {
    return view('pages.UI.icons');
})->name('icons');

Route::get('/buttons', function () {
    return view('pages.UI.buttons');
})->name('buttons');

Route::get('/modal-alert', function () {
    return view('pages.UI.modals');
})->name('modal-alert');

Route::get('/forms', function () {
    return view('pages.forms.advanced');
})->name('form');

Route::get('/calendar', function () {
    return view('pages.calendar');
})->name('calendar');

Route::get('/mail-inbox', function () {
    return view('pages.mailbox.mailbox');
})->name('mail-inbox');

Route::get('/mail-read', function () {
    return view('pages.mailbox.read-mail');
})->name('mail-read');

Route::get('/mail-compose', function () {
    return view('pages.mailbox.compose');
})->name('mail-compose');

Route::get('/profile', function () {
    return view('pages.examples.profile');
})->name('profile');

Route::get('/employee-list', function () {
    return view('pages.examples.employee-list');
})->name('employee-list');






/*CRUD Module Routes*/
/*Journal*/
Route::resource('journal','JournalController');
Route::get('/download-journal/{id}','JournalController@download')->name('journal.download');
Route::get('/download-journalview/{id}','JournalController@downloadview')->name('journal.downloadview');


/*Approved Process*/
Route::resource('approvedprocess','ApprovedProcessController');

/*Process Catagory*/
Route::resource('processcatagory','ProcessCatagoryController');
Route::get('/processcatagory-statu/{id}','ProcessCatagoryController@status_control')->name('processcatagory.status');

/*Process assigned*/
Route::resource('assignedcatagory','AssignedCatagoryController');
Route::get('/assignedcatagory-statu/{id}','AssignedCatagoryController@status_control')->name('assignedcatagory.status');

/*PCR*/
Route::patch('/pcr1/approval/{pcr}','PcrController@approval')->name('pcr.approval');
Route::patch('/pcr1/reject/{pcr}','PcrController@reject')->name('pcr.reject');
Route::resource('pcr','PcrController');
Route::get('/pcr-admin','PcrController@indexAdmin')->name('pcr.indexadmin');


/*SOP*/

Route::resource('sop','SopController');




