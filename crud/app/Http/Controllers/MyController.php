<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ospiti;

class MyController extends Controller
{
    public function home() {

        $ospiti = Ospiti::all();

        return view('pages.home', compact('ospiti'));
    }

    public function details($id) {

        $ospite = Ospiti::findOrFail($id);

        return view('pages.details', compact('ospite'));
    }

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        $validate = $request -> validate([
            'name' => 'max:255',
            'lastname' => 'max:255',
            'date_of_birth' => 'date',
            'document_type' => 'max:1024',
            'document_number' => 'max:1024'
        ]);

        $ospite = Ospiti::create($validate);
        return redirect() -> route('details', $ospite -> id);
    }
}
