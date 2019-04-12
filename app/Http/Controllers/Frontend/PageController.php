<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends FrontendController
{
    public function about()
    {
        return view($this->frontendPath . 'aboutpage');
    }
}