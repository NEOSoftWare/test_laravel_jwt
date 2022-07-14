<?php

namespace App\Http\Controllers;

class CabinetController extends Controller
{
    public function index()
    {
        return view('cabinet', [
            'user' => auth()->user(),
        ]);
    }
}
