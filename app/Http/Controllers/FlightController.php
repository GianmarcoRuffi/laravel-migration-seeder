<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Flight;

class FlightController extends Controller
{
    public function index() {
        $flights = Flight::all();
        dd($flights);
        return view('home', compact('flights'));

    }

    public function show($id) {
        $flights = Flight::findOrFail($id);
        return view('detail', compact('flight'));

    }
}
