<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agreement\Agreement;
use Illuminate\Http\Request;

class AgreementsController extends Controller
{
    public function index()
    {
        $agreements = Agreement::all();


        return view('admin.agreements.index', compact('agreements'));
    }
}
