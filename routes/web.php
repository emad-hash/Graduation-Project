<?php

// use App\Http\Livewire\Wishpro;
use App\Http\Livewire\HomeCompo;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\AboutComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CatrgoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\ThankyouComponnent;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\User\UserOrderComponent;
use App\Http\Livewire\Admin\AdProductComponent;
use App\Http\Livewire\User\UserChangeComponent;
use App\Http\Livewire\User\UserReviewComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
// use App\Http\Livewire\Admin\AdminEditProductsComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminSettingsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAddCouponsComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminEditCouponsComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminAddCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditCategoriesComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
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

// Route::get('/',HomeCompo::class)->name('home');

Route::get('/',HomeCompo::class)->name('home.index');

Route::get('/about',AboutComponent::class)->name('about.index');

Route::get('/shop',ShopComponent::class)->name('shop');

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/cart',CartComponent::class)->name('shop.cart');

Route::get('/wishlist',WishlistComponent::class)->name('shop.wishlist');

Route::get('/checkout',CheckoutComponent::class)->name('checkout');

Route::get('/product-category/{slug}',CatrgoryComponent::class)->name('product.category');

Route::get('/search',SearchComponent::class)->name('product.search');

Route::get('/contact',ContactComponent::class)->name('contact');

Route::get('/thank-you',ThankyouComponnent::class)->name('thankyou');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth:sanctum','verified'])->group(function(){
 Route::get('/myaccount',UserDashboardComponent::class)->name('user.dashboard');
 Route::get('/user/order',UserOrderComponent::class)->name('user.order');
 Route::get('/user/order/{order_id}',UserOrderDetailsComponent::class)->name('user.order.details');
 Route::get('/user/review/{order_item_id}',UserReviewComponent::class)->name('user.reviews');
 Route::get('/user/changepassword',UserChangeComponent::class)->name('user.changepassword');    

});
Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoriesComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoriesComponent::class)->name('admin.category.edit');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/products/add',AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/products/edit/{product_id}',AdminEditProductComponent::class)->name('admin.product.edit');
    Route::get('/admin/coupons',AdminCouponsComponent::class)->name('admin.coupons');
    Route::get('/admin/coupons/add',AdminAddCouponsComponent::class)->name('admin.coupons.add');
    Route::get('/admin/coupons/edit/{coupon_id}',AdminEditCouponsComponent::class)->name('admin.coupons.edit');
    Route::get('/admin/slider',AdminHomeSliderComponent::class)->name('admin.slide');
    Route::get('/admin/slider/add',AdminAddHomeSliderComponent::class)->name('admin.slide.add');
    Route::get('/admin/slider/edit/{slide_id}',AdminEditHomeSliderComponent::class)->name('admin.slide.edit');
    Route::get('/admin/order',AdminOrderComponent::class)->name('admin.order');
    Route::get('/admin/order/{order_id}',AdminOrderDetailsComponent::class)->name('admin.order.details');
    Route::get('/admin/contactmassege',AdminContactComponent::class)->name('admin.contactmassege');
    Route::get('/admin/setting',AdminSettingsComponent::class)->name('admin.setting');


   });

require __DIR__.'/auth.php';
