<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;



class CartController extends Controller
{
    public function index()
    {
        return view('cart.index', [
            'products' => Cart::content(),
        ]);
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $price = $product->price;
        Cart::add([
            'id'          => $product->product_id,
            'name'        => $product->name,
            'qty'         => $request->input('quantity'),
            'price'       => $price,
            'options'     => [
                'proveedor'   => $product->provider->nombre,
                'description' => $product->description,
            ]
       ]);
        return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');  
    }

    public function updateCartItem(Request $request, $productId)
    {

    }

    public function removeFromCart($productId)
    {
        Cart::remove($productId);
        
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }
}
