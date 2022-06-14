<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $homes = Home::all();
        return view('homesList', compact('homes'));

    }

    public function show($id) {
        $homes = Home::findOrFail($id);
        return view('detail', compact('home'));

    }
}
