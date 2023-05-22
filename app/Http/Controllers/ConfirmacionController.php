<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmacionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('confirmacion-compra');
    }
}
