<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('cache:clear', function () {
    Artisan::call('cache:clear');
    return 'd';
});

Route::get('route:clear', function () {
    Artisan::call('route:clear');
    return 'done';
});

Route::get('config:clear', function () {
    Artisan::call('config:clear');
    return 'r';
});
Route::get('optimize', function () {
    Artisan::call('optimize');
    return 'done';
});

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/fxtrading', function () {
    return view('frontend.market.fxtrading');
});
Route::get('/future', function () {
    return view('frontend.market.future');
});
Route::get('/indices', function () {
    return view('frontend.market.indices');
});
Route::get('/metals', function () {
    return view('frontend.market.metals');
});
Route::get('/enegeries', function () {
    return view('frontend.market.enegeries');
});
Route::get('/crypto', function () {
    return view('frontend.market.crypto');
});



Route::get('/basics', function () {
    return view('frontend.tools.basics.index');
});
Route::get('/fmarket', function () {
    return view('frontend.tools.basics.fmarket');
});
Route::get('/lots&leverages', function () {
    return view('frontend.tools.basics.lots&leverages');
});



Route::get('/fundamentals', function () {
    return view('frontend.tools.fundamentals.index');
});
Route::get('/fanalysis', function () {
    return view('frontend.tools.fundamentals.fanalysis');
});


Route::get('/technicalanalysis', function () {
    return view('frontend.tools.technicalanalysis.index');
});
Route::get('/techanalysis', function () {
    return view('frontend.tools.technicalanalysis.techanalysis');
});
Route::get('/support&resis', function () {
    return view('frontend.tools.technicalanalysis.support&resis');
});



Route::get('/tradersmistakes', function () {
    return view('frontend.tools.psychology.index');
});
Route::get('/trademistakes', function () {
    return view('frontend.tools.psychology.trademistakes');
});


Route::get('/whyrocktrade', function () {
    return view('frontend.introduction.whyrocktrade');
});


Route::get('/economic_calender', function () {
    return view('frontend.MarketNews.economic_calender');
});
Route::get('/market_stories', function () {
    return view('frontend.MarketNews.market_stories');
});
Route::get('/global_market_perfomance', function () {
    return view('frontend.MarketNews.global_market_perfomance');
});
Route::get('/real_time_market', function () {
    return view('frontend.MarketNews.real_time_market');
});


Route::get('/ib', function () {
    return view('frontend.partnership.ib');
});
Route::get('/pamm', function () {
    return view('frontend.partnership.pamm');
});
Route::get('/mam', function () {
    return view('frontend.partnership.mam');
});
Route::get('/affiliate', function () {
    return view('frontend.partnership.affiliate');
});
Route::get('/why_partner', function () {
    return view('frontend.partnership.why_partner');
});

Route::get('/about_us', function () {
    return view('frontend.company.about_us');
});
Route::get('/contact_us', function () {
    return view('frontend.company.contact_us');
});
Route::get('/registrationform', function () {
    return view('frontend.registration');
});
Route::post('/contact-submit', [ContactController::class, 'submitContact']);
Route::get('/whyrockfieldtrade', function () {
    return view('frontend.company.whyrockfieldtrade');
});
Route::get('/support', function () {
    return view('frontend.company.support');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
