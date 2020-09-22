<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    public function index()
    {
        return response()->json(['request' => 'OK']);
    }
}
