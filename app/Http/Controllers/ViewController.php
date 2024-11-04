<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ViewController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function import(): View
    {
        return view('import-file');
    }

    public function importing(): View
    {
        return view('importing-file');
    }
}
