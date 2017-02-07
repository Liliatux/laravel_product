<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Legume;

class LegumeController extends Controller
{
    //Affiche toutes les données
    public function getIndex() {
    	$legumes = Legume::all();
    	return view('legumes.index', ['legumes' => $legumes]);
    }

    //Affiche les données en fonction de l'id
    public function getShow($id) {
    	$legume = Legume::find($id);
    	return view('legumes.show', ['legume' => $legume]);
    }

    //Diminue le stock dans les données
    public function postSell($id) {
    	$legume = Legume::find($id);
    	$legume->stock--;
    	$legume->save();
    	return back();
    }

    //Ajoute du stock dans les données
    public function postRestock($id) {
    	$legume = Legume::find($id);
    	$legume->stock++;
    	$legume->save();
    	return back();
    }

    //Affiche le formulaire pour ajouter un nouveau légume
    public function getAdd() {
        return view('legumes.add');
    }

    //Ajoute un nouveau légume dans les données
    public function postAdd(Request $request) {
        $legume = new Legume;

        $legume->name = $request->name;
        $legume->stock = $request->stock;
        $legume->price = $request->price;

        $legume->save();

        return redirect('legumes');
    }
}
