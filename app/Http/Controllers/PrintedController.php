<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintedController extends Controller
{
    public function index()
    {
        return view('Printed', ['msg' => '']);
    }
}
