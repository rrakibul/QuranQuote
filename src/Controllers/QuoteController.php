<?php
namespace MRI\QuranQuote\Controllers;

use Illuminate\Http\Request;
use MRI\QuranQuote\Quote;

class QuoteController
{
    public function __invoke(Quote $quotes)
    {
        $quote = $quotes->fetch();

        return view('quote::index', compact('quote'));
    }
}
