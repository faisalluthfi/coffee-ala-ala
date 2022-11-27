<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.products.index',[
            "title" => 'product',
            "products"=> Product::all()
        ]);
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $product = Product::where('name','like',"%".$cari."%")->paginate();

        return view('dashboard.product.index',['product' => $product]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.products.create',[
            "title" => 'product',
            "products"=> Product::all(),
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            "name"=> 'required|unique:products',
            "category_id"=> 'required',
            "slug"=> 'required|unique:products',
            "excertp" => 'required|max:255',
            "price"=> 'required',
            "description"=> "required|max:255"
        ]);
        Product::create($validated);
        return redirect(route('admin.product.index'))->with('success','New Product Has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // dd($product);
        $product = Product::find($id);
        // dd($product);
        return view('dashboard.products.show',[
            "product"=> $product,
            // "title"=> $product->name,
            "category"=> Category::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('dashboard.products.edit',[
            "categories" => Category::all(),
            "product"=> $product
        ]);
        // dd($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());

        // $request->validate ([
        //     'name' => 'required|max:255',
        //     'slug' => 'required',
        //     'category_id' => 'required',
        //     'image' => 'image|file|max:5024',
        //     'excertp'=>'required',
        //     'price'=>'required',
        //     'decription' => "required|max:255"
        // ]);
    

        $product = Product::find($id);
        $product->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'excertp' => $request->excertp,
            'price' => $request->price,
            'decription' => $request->decription
        ]);

        return redirect(route('admin.product.index'))->with('success','Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Product::destroy($id);

        return redirect()->route('admin.product.index')->with('success', 'product has been deleted!');
        
    }

    
}
