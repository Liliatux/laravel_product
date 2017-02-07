<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Legume;

class LegumeController extends Controller
{
    public function getIndex() {
    	$legumes = Legume::all();
    	return view('legumes.index', ['legumes' => $legumes]);
    }

    public function getShow($id) {
    	$legume = Legume::findOrFail($id);
    	return view('legumes.show', ['legume' => $legume]);
    }
}
