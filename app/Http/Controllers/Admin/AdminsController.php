<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function dashboard () {
    	return view('administrator.dashboard');
    }
}
