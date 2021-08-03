<?php

use App\Http\Livewire\About;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Home;
use App\Http\Livewire\Roadmap;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/roadmap', Roadmap::class)->name('roadmap');
Route::get('/how-it-works', function () {
    return redirect('/roadmap#how-it-works');
})->name('how.it.works');
Route::get('/contact', Contact::class)->name('contact');