<?php

namespace MRI\QuranQuote;

use Illuminate\Support\Facades\Http;

class Quote
{
    public function fetch()
    {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}
