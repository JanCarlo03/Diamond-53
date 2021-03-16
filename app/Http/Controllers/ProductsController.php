<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB; 
use App\ProductModel; 
use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller
{
    public function products(Request $request){
        if(empty($request->session()->get('session_id'))){
            return redirect('login');
        }
        $products = \DB::select('SELECT * from products');
        return view("products")
        ->with(['products' => $products]);
    }
    public function buscar(Request $request){
        $products = ProductModel::all();
        $query = ProductModel::Buscar($request->get('buscar'))
        ->orderBy('id')
        ->paginate();

        return view("products")
        ->with(['products' => $products])
        ->with(['usus' => $query]);
}
    public function detail(Request $request, ProductModel $id){
        if(empty($request->session()->get('session_id'))){
            return redirect('login');
        }
        return view("detail")
        ->with(['product' => $id]);
    }
    public function cart(Request $request){
        if(empty($request->session()->get('session_id'))){
            return redirect('login');
        }        
        return view("cart");  
    }
    public function addToCart($id){
        //Logica para agregar producto
        $product = ProductModel::findOrFail($id);
        $cart = session()->get('cart');
        
        if(!$cart){
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" =>1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
                ];
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully');
        }
        if(isset($cart[$id])){

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully');
        }
        $cart[$id] = [
            "name" => $product->name,
            "quantity" =>1,
            "price" => $product->price,
            "photo" => $product->photo

        ];
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully');
        
        
    }
}
