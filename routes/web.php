<?php

use App\Http\Livewire\HomeCompo;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CatrgoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminAddCategoriesComponent;
use App\Http\Livewire\Admin\AdminEditCategoriesComponent;
// use Illuminate\Routing\Exceptions\UrlGenerationException;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',HomeCompo::class)->name('home.index');

Route::get('/shop',ShopComponent::class)->name('shop');

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/cart',CartComponent::class)->name('shop.cart');

Route::get('/wishlist',WishlistComponent::class)->name('shop.wishlist');

Route::get('/checkout',CheckoutComponent::class)->name('checkout');

Route::get('/product-category/{slug}',CatrgoryComponent::class)->name('product.category');

Route::get('/search',SearchComponent::class)->name('product.search');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth'])->group(function(){
 Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});
Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoriesComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoriesComponent::class)->name('admin.category.edit');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit',AdminEditProductComponent::class)->name('admin.product.edit');

   });

require __DIR__.'/auth.php';
