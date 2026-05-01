<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            'Chirp pertama!',
            'Halo dari Laravel!',
            'Belajar MVC itu seru!',
        ];

        return view('welcome', ['chirps' => $chirps]);
    }
}
