<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TravelPackage;

class TravelPackageController extends Controller
{
    public function index() {
        $travels = TravelPackage::all();
        dd($travels);
        return view('home', compact('travels'));

    }

    public function show($id) {
        $travels = TravelPackage::findOrFail($id);
        return view('detail', compact('travel'));

    }
}
