<?php

namespace UptimeFrog\Http\Controllers\Service;

use Illuminate\Http\Request;
use UptimeFrog\Http\Controllers\Controller;

class MonitorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('service.monitors.index');
    }
}
