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

Route::get('/index', function () {
    return view('index');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/index3', function () {
    return view('index3');
});
Route::get('/starter', function () {
    return view('starter');
});
//pages route
Route::get('/calendar', function () {
    return view('pages.calendar');
});

Route::get('/widgets', function () {
    return view('pages.widgets');
});
//chart pages
Route::get('/chartjs', function () {
    return view('pages.charts.chartjs');
});
Route::get('/flot', function () {
    return view('pages.charts.flot');
});
Route::get('/inline', function () {
    return view('pages.charts.inline');
});

//example pages
Route::get('/404', function () {
    return view('pages.examples.404');
});
Route::get('/500', function () {
    return view('pages.examples.500');
});
Route::get('/blank', function () {
    return view('pages.examples.blank');
});
Route::get('/invoice', function () {
    return view('pages.examples.invoice');
});
Route::get('/invoice-print', function () {
    return view('pages.examples.invoice_print');
});
Route::get('/lock-screen', function () {
    return view('pages.examples.lockscreen');
});
Route::get('/login', function () {
    return view('pages.examples.login');
});
Route::get('/profile', function () {
    return view('pages.examples.profile');
});
Route::get('/register', function () {
    return view('pages.examples.register');
});

//forms route
Route::get('/advanced', function () {
    return view('pages.forms.advancedForms');
});
Route::get('/editors', function () {
    return view('pages.forms.editors');
});
Route::get('/general', function () {
    return view('pages.forms.general');
});

//mailbox routes

Route::get('/compose', function () {
    return view('pages.mailbox.compose');
});
Route::get('/mailbox', function () {
    return view('pages.mailbox.mailbox');
});
Route::get('/read-mail', function () {
    return view('pages.mailbox.read_mail');
});

//UI routes
Route::get('/buttons', function () {
    return view('pages.UI.buttons');
});
Route::get('/general-buttons', function () {
    return view('pages.UI.general');
});
Route::get('/icons', function () {
    return view('pages.UI.icons');
});
Route::get('/sliders', function () {
    return view('pages.UI.sliders');
});

//table routes

Route::get('/data', function () {
    return view('pages.tables.data');
});
Route::get('/simple-data', function () {
    return view('pages.tables.simple');
});


Route::get('/dashboard', function () {
    return view('reality_daily.dashboard');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/products/age', function () {
    return view('products.age');
});

Route::get('/products/size', function () {
    return view('products.size');
});

Route::get('/products/price', function () {
    return view('products.price');
});
Route::get('/email', function () {
    return view('email');
});
Route::get('/subscribers', function () {
    return view('subscribers');
});
Route::get('/payment/paypal', function () {
    return view('payment.paypal');
});
Route::get('/payment/card', function () {
    return view('payment.card');
});

Route::get('/order', function () {
    return view('order');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
