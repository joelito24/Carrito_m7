<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Proveedor;

class ProductsController extends Controller
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
        $products = Product::all();
        $proveedoresCount = Proveedor::all()->count();
        return view('products', [
            'products' => $products, 
            'proveedoresCount' => $proveedoresCount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        $proveedoresCount = Proveedor::all()->count();

        return view('products.create', [
            'proveedores' => $proveedores,
            'proveedoresCount' => $proveedoresCount
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = new Product();
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->cantidad = $request->input('cantidad');
        $products->stock = $request->input('stock');
        $products->proveedor_id = $request->input('proveedor_id');
        $products->save();

        return redirect()->route('products');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Product::find($id);
        $proveedores = Proveedor::all();
        return view('products.edit', [
            'products' => $products, 
            'proveedores' => $proveedores
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->cantidad = $request->input('cantidad');
        $products->stock = $request->input('stock');
        $products->proveedor_id = $request->input('proveedor_id');
        $products->save();

        return redirect()->route('products')->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::find($id);
        $products->delete();

        return redirect()->route('products')->with('success', 'Producto eliminado correctamente.');
    }
}
