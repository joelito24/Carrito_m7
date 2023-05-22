<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Proveedor;

class ProveedoresController extends Controller
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

    public function index(){
        $proveedores = Proveedor::all();
        $proveedoresCount = Proveedor::all()->count();

        return view('proveedores.index', [
        'proveedores' => $proveedores, 
        'proveedoresCount' => $proveedoresCount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.create', [
            'proveedores' => $proveedores
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proveedores = new Proveedor();
        $proveedores->nombre = $request->input('nombre');
        $proveedores->save();

        return redirect()->route('products');
    }

    public function destroy($id){

        $proveedores = Proveedor::find($id);
        $proveedores->delete();

        return redirect()->route('proveedores.index');
    }
}
