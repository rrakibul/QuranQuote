<?php

use Illuminate\Support\Facades\Route;
use MRI\QuranQuote\Controllers\QuoteController;

Route::get('quran-quote', QuoteController::class);
