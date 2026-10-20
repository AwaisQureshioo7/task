<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\car;
use Illuminate\Http\Request;

class carController extends Controller
{
    public function index()
    {
        return car::all();
    }
}
