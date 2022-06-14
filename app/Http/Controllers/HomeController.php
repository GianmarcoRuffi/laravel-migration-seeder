<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $travels = Home::all();
        return view('travelslist', compact('travels'));

    }

    public function show($id) {
        $travels = Home::findOrFail($id);
        return view('detail', compact('travel'));

    }
}
