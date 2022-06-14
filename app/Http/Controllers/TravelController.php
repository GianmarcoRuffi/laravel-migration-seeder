<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index() {
        $travels = Travel::all();
        return view('travels', compact('travels'));

    }

    public function show($id) {
        $travels = Travel::findOrFail($id);
        return view('detail', compact('travel'));

    }
}
