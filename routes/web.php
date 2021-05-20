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

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about-us');
Route::get('/dr-mukesh-sharda', [App\Http\Controllers\HomeController::class, 'dr_mukesh_sharda'])->name('dr-mukesh-sharda');
Route::get('/dr-arjun-sharda', [App\Http\Controllers\HomeController::class, 'dr_arjun_sharda'])->name('dr-arjun-sharda');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
//Endocrine
Route::get('/endocrine', [App\Http\Controllers\HomeController::class, 'endocrine'])->name('endocrine');
Route::get('/services/obesity', [App\Http\Controllers\HomeController::class, 'obesity'])->name('obesity');
Route::get('/diabetes', [App\Http\Controllers\HomeController::class, 'diabetes'])->name('diabetes');
Route::get('/thyroid', [App\Http\Controllers\HomeController::class, 'thyroid'])->name('thyroid');

//Digestive
Route::get('/digestive', [App\Http\Controllers\HomeController::class, 'digestive'])->name('digestive');
Route::get('/acidity', [App\Http\Controllers\HomeController::class, 'acidity'])->name('acidity');
Route::get('/ibs', [App\Http\Controllers\HomeController::class, 'ibs'])->name('ibs');
Route::get('/constipation', [App\Http\Controllers\HomeController::class, 'constipation'])->name('constipation');
Route::get('/anorexia-nervosa', [App\Http\Controllers\HomeController::class, 'anorexia_nervosa'])->name('anorexia-nervosa');
Route::get('/chronic-fatigue-syndrom', [App\Http\Controllers\HomeController::class, 'chronic_fatigue_syndrom'])->name('chronic-fatigue-syndrom');
Route::get('/abdominal-pain', [App\Http\Controllers\HomeController::class, 'abdominal_pain'])->name('abdominal-pain');
Route::get('/piles', [App\Http\Controllers\HomeController::class, 'piles'])->name('piles');
Route::get('/ulcerative-colitis', [App\Http\Controllers\HomeController::class, 'ulcerative_colitis'])->name('ulcerative-colitis');
Route::get('/flatulence', [App\Http\Controllers\HomeController::class, 'flatulence'])->name('flatulence');

//Hair
Route::get('/hair', [App\Http\Controllers\HomeController::class, 'hair'])->name('hair');
Route::get('/hair-fall', [App\Http\Controllers\HomeController::class, 'hair_fall'])->name('hair-fall');
Route::get('/dandruff', [App\Http\Controllers\HomeController::class, 'dandruff'])->name('dandruff');

//Skin
Route::get('/skin', [App\Http\Controllers\HomeController::class, 'skin'])->name('skin');
Route::get('/vitiligo', [App\Http\Controllers\HomeController::class, 'vitiligo'])->name('vitiligo');
Route::get('/hives', [App\Http\Controllers\HomeController::class, 'hives'])->name('hives');
Route::get('/psoriasis', [App\Http\Controllers\HomeController::class, 'psoriasis'])->name('psoriasis');
Route::get('/eczema', [App\Http\Controllers\HomeController::class, 'eczema'])->name('eczema');
Route::get('/tinea', [App\Http\Controllers\HomeController::class, 'tinea'])->name('tinea');


//Joint Pain
Route::get('/hair', [App\Http\Controllers\HomeController::class, 'hair'])->name('hair');
//Book Appointment
Route::get('/book-appointment', [App\Http\Controllers\HomeController::class, 'book_appointment'])->name('book-appointment');
//Gallery
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
//Blog
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');



//Skin
Route::get('/hair', [App\Http\Controllers\HomeController::class, 'hair'])->name('hair');

Route::group(['prefix' => 'admin', 'middleware' => []], function() {
    //Page routes
    Route::resource('pages', App\Http\Controllers\PageController::class);
});
