<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Pesanan;

class ProductController extends Controller
{
    public function index(){

        
        return view('products',[
            "title" => 'All Produk',
            "products" => Product::with('category')->get(),
            "categories"=>Category::all()
            // 'coffee' => $coffee,
        ]);
    } 

    // public function cari(Request $request){
    //     $cari 
    // }

    public function cart(Category $category)
    {
        return view('cart',[
            'title' => 'Cart',
            'category'=>$category
        ]);
    }

    public function detail(Product $product){
        return view('product',[
            "title"=>$product->name,
            'product' => $product,
            "category"=> Category::all(),
            "products"=> Product::all()
        ]);
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
        // dd($cart);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
        //   dd($cart);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            // dd($cart);
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function store(Request $request)
    {
        //  $request->validate([
        //             'name' => 'required',
        //             'quantity' => 'required',
        //             'price' => 'required',
        //             'image' => 'required',

        //         ]);
                // dd($request->all());
                // dd(auth()->user());
                $cart = session()->get('cart');
                // dd($cart);

                foreach ($cart as $pesanan){
                    // dd($pesanan);

                    $product= Product::find($pesanan['id']);
                    $pesanan2 = Pesanan::where('user_id',auth()->user()->id)->where('product_id',$product->id)->first();
                    if($pesanan2 != null){
                        $pesanan2->update([
                            "quantity" => $pesanan['quantity'],
                            "total"=> $product->price*$pesanan['quantity']
                        ]);
                    }else{
                   
                    Pesanan::create([
                        "user_id" => auth()->user()->id,
                        "product_id"=> $product->id,
                        "image" => $product->image,
                        "name" => $product->name,
                        "quantity"=> $pesanan['quantity'],
                        "price"=> $product->price,
                        "total"=> $product->price*$pesanan['quantity']
                    ]);
                    }
                }
                // dd($product);
        
        return redirect('/products')->with('success', 'Berhasil Checkout');
    }
    
}
