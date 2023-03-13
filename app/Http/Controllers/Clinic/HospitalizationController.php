<?php

namespace App\Http\Controllers\Clinic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HospitalizationController extends Controller
{
    public function index() {
        return view('clinic.hospitalizations.index');
    }
}
