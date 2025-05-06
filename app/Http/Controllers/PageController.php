<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function generic(): View
    {
        return view('pages.generic');
    }

    public function elements(): View
    {
        return view('pages.elements');
    }
}
