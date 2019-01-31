<?php

namespace UptimeFrog\Http\Controllers\Service;

use Illuminate\Http\Request;
use UptimeFrog\Http\Controllers\Controller;

class DashboardController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('service.dashboard');
    }
}
