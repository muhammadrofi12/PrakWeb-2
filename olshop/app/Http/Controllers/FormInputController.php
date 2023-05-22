<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormInputController extends Controller
{
    public function index()
    {
        return view('form.index');
    }

    public function data(Request $request)
    {

        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'skill' => $request->input('skill'),
        ];

        return view('form.index', compact('data'));
    }
}
