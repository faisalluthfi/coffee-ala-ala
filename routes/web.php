<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        // "name"=> "Coffe Latte",
        // "slug"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem consectetur quibusdam recusandae dolore quas laborum fugiat laboriosam ut, ducimus ipsam?",
        // "panel" => "Taste Good
]);
});


// Route::get('/about',function(){
//     return view('about',[
//         'title'=>'About',
//         "name"=> "Coffe Ala-Ala",
//         "description" => "
//         Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sapiente ea officiis, eveniet esse voluptatum beatae fuga! Obcaecati reiciendis, beatae iure ut magni quasi accusantium soluta quod sapiente officia ipsum exercitationem fugiat accusamus, perspiciatis nam. Necessitatibus ullam ipsam excepturi dolorum consequatur iste vero enim vitae quibusdam possimus maiores, dolor libero inventore fuga, labore in. Quasi velit provident dolore sit ut ad perferendis magnam amet harum quam. Cumque quas repellendus doloribus?",
//         "alamat" => "Jl. Ala ala RT 003/002, Kebayoran Baru, Jakarta Selatan",
//         "email" => "coffeealaala@gmail.com"
//     ]);
// });
Route::get('/home',function(){
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about',[AboutController::class,'index']);

Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/products/{product:name}',[ProductController::class,'detail'])->name('detail');

Route::get('/categories',function(){
    return view('category',
    [
        'title' => 'Product Categories',
        'categories' => Category::all(),
        'products' => Product::all()
       
    ]);
});

Route::get('/categories/{category:slug}',function(Category $category){
    return view('categories',[
        'title' => $category->name,
        'products' => $category->products,
        'category' => $category->name,
    ]);
});



Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

// Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
// // Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
// Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
// Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['cek_login:admin']], function () {
//         Route::resource('dashboard', AdminController::class);
//     });
//     Route::group(['middleware' => ['cek_login:customer']], function () {
//         Route::resource('', AdminController::class);
//     });
// });

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);


Route::get('/dashboard', function(){
    return view('dashboard.index');
 })->middleware('admin');

 Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

 Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
 //resource controller yaitu sebuah controller yang sudah otomatis mengatur data crud 
 
 
 Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

 Route::prefix('admin/category')->name('admin.category.')->group(function(){
    Route::get('index',[AdminCategoryController::class,'index'])->name('index');
 });
 

//  cart
// Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
// Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
// Route::get('/products', [ProductController::class,'index']);
Route::get('/cart',[ProductController::class,'cart'])->name('cart')->middleware('auth');
Route::get('/add-to-cart/{id}',[ProductController::class,'addToCart'])->name('add.to.cart')->middleware('auth');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart')->middleware('auth');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart')->middleware('auth');
Route::post('/store',[ProductController::class,'store'])->name('store')->middleware('auth');




Route::get('/test',function(){
    return view('test',[
        "title"=> 'test'
    ]);
});