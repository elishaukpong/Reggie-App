<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function __invoke(): View
    {
        return view('dashboard.products');
    }
}
