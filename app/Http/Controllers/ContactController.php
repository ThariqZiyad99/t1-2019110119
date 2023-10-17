<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request){
        dd($request);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'isbn' => 'required|string|min:3|max:255',
            'judul' => 'required|varchar|judul',
            'halaman' => 'required|integer|digits_between:5,15',
            'kategori' => 'required|varchar|kategori',
            'penerbit' => 'required|varchar|penerbit',

        ]);
        dump($validated);

    }

