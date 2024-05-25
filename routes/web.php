<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\CommentController;
use App\Models\Tag;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
    Route::get('roles/{id}/givePermissions', [RoleController::class, 'addPermissionToRole'])->name('roles.givePermissions');
    Route::put('roles/{id}/givePermissions', [RoleController::class, 'givePermissionToRole']);
    Route::resource('users', UserController::class);
    Route::get('/admin/dashboard', [AdminController::class, 'numberCount'])->name('adminDashboard');
});
Route::get('/admin/profile', [ProfileController::class, 'profile']);
// Route::get('/admin/dashboard', [AdminController::class, 'headerLogo']);
// Route::get('/admin/userCount', [UserController::class, 'userCount'])->name('userCount');
Route::resource('products', ProductController::class);
Route::get('/client/productShop', [ProductController::class, 'productShop'])->name('productShop');
Route::resource('category', CategoryController::class);
Route::resource('posts', PostController::class);
Route::resource('price', PriceController::class);
Route::resource('banner', BannerController::class);
Route::resource('tags', TagController::class);
Route::resource('about', AboutPageController::class);
Route::resource('checkout', CheckoutController::class)->middleware('checkout.auth');
Route::resource('contact', ContactController::class);

Route::get('/client/dashboard', [ClientController::class, 'home'])->name('clientDashboard');
Route::get('/client/blog', [BlogPageController::class, 'blog'])->name('clientBlog');
Route::post('/{id}/show', [BlogPageController::class, 'show'])->name('blog.show');
Route::resource('comment', CommentController::class);
Route::get('/comments', [CommentController::class, 'index'])->name('comment.index');


Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update2'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');
Route::controller(StripePaymentController::class)->group(function () {
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

Route::get('/client/shop', function () {
    return view('client.pages.shop');
});
Route::get('/client/blogSingle', function () {
    return view('client.pages.blogSingle');
});
Route::get('/client/contact', function () {
    return view('client.pages.contact');
});
Route::get('/client/products', function () {
    return view('client.pages.products');
});



Route::get('/admin/contact', function () {
    return view('admin.pages.contact');
});
Route::get('/admin/register', function () {
    return view('admin.pages.register');
});
Route::get('/admin/login', function () {
    return view('admin.pages.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
