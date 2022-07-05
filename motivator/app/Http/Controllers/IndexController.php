<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $shifts = Oee::all()->first();
        return view('file', );
    }
}
