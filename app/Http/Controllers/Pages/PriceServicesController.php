<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PriceServicesController extends Controller
{
    public function index()
    {
        return view('pages.price-services');
    }
}
