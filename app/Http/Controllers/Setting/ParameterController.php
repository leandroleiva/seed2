<?php

namespace App\Http\Controllers\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function index() {
        return view('settings.parameters.index');
    }
}
