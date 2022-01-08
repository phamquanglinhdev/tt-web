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

Route::get('/', function () {
    return view('client.index');
})->name("index");

Route::get('/web-design/bo-cong-thuong.html', function () {
    return view('client.web-design.bo-cong-thuong');
})->name("bct");
Route::get('/web-design/amp.html', function () {
    return view('client.web-design.amp');
})->name("amp");
Route::get('/web-design/goi-giai-phap.html', function () {
    return view('client.web-design.goi-giai-phap');
})->name("ggp");
Route::get('/web-design/mau-giao-dien.html', function () {
    return view('client.web-design.mau-giao-dien');
})->name("mgd");
Route::get('/web-design/quan-tri-web.html', function () {
    return view('client.web-design.quan-tri-web');
})->name("qtw");

Route::get('/domain/bang-gia.html', function () {
    return view('client.domain.bang-gia');
})->name("bang-gia");
Route::get('/domain/chuyen-doi.html', function () {
    return view('client.domain.chuyen-doi');
})->name("chuyen-doi");
Route::get('/domain/ssl.html', function () {
    return view('client.domain.ssl');
})->name("ssl");

Route::get('/email/question.html', function () {
    return view('client.email.question');
})->name("email-question");
Route::get('/email/app.html', function () {
    return view('client.email.app');
})->name("email-app");

Route::get('/hosting/hosting-doanh-nghiep.html', function () {
    return view('client.hosting.hosting-doanh-nghiep');
})->name("hosting-doanh-nghiep");
Route::get('/hosting/ssd-hosting.html', function () {
    return view('client.hosting.ssd-hosting');
})->name("ssd-hosting");
Route::get('/hosting/super-hosting.html', function () {
    return view('client.hosting.super-hosting');
})->name("super-hosting");
Route::get('/hosting/reseller-hosting.html', function () {
    return view('client.hosting.reseller-hosting');
})->name("reseller-hosting");

Route::get('/marketing/google.html', function () {
    return view('client.marketing.google');
})->name("marketing-google");
Route::get('/marketing/facebook.html', function () {
    return view('client.marketing.facebook');
})->name("marketing-facebook");
