<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index_admin(){
        return view('superadmin.layouts.superadmin');
    }
}
