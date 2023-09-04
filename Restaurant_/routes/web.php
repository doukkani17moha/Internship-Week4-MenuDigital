<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\founderController;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/owner/{id}', [HomeController::class, 'index2'])->name('/owner');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/owner/menu/{id}', [HomeController::class, 'menu2'])->name('/owner/menu');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/owner/about/{id}', [HomeController::class, 'about2'])->name('/owner/about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/owner/contact/{id}', [HomeController::class, 'contact2'])->name('/owner/contact');

Route::get('/reservation/{id}', [HomeController::class, 'reservation'])->name('reservation');
Route::post('/reserve', [HomeController::class, 'reservation_confirm'])->name('reserve');
Route::get('/callwaitress/{id}', [HomeController::class, 'callwaitress'])->name('callwaitress');


///////////////////////////////////////////////////////////////////////////////////
Route::get('/founder/index', [founderController::class, 'home'])->name('/founder/index');
Route::get('/admin/404', [AdminController::class, 'nopage'])->name('/admin/404');
Route::get('/admin/wait', [AdminController::class, 'waitforaccept'])->name('/admin/wait');

####################################################################################################




Route::get('/only-verified', function () {
    return view('only-verified');
 })->middleware(['auth', 'verified']);


Route::get('/founder/index/plans', [founderController::class, 'chhooseplan'])
    ->middleware(['auth', 'verified'])
    ->name('/founder/index/plans');

Route::middleware('auth')->group(function () {
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('/admin/dashboard');
Route::get('/admin/upgradetostandard/{id}', [PlansController::class, 'upgradetostandard'])->name('/admin/upgradetostandard/');
Route::get('/admin/upgradetopremium/{id}', [PlansController::class, 'upgradetopremium'])->name('/admin/upgradetopremium/');
Route::get('/admin/upgradetobasic/{id}', [PlansController::class, 'upgradetobasic'])->name('/admin/upgradetobasic/');

// Manage new owners
Route::get('founder/dashboard', [founderController::class, 'founder_dashboard']);
Route::get('founder/newowners', [founderController::class, 'newowners'])->name('/founder/newowners');
Route::get('founder/owners', [founderController::class, 'owners'])->name('/founder/owners');
Route::get('founder/archivedowners', [founderController::class, 'archivedowners'])->name('/founder/archivedowners');
Route::get('/founder/plans', [PlansController::class, 'plans_show'])->name('/founder/plans');
Route::get('/plans/edit/{id}', [PlansController::class, 'plans_edit'])->name('/plans/edit');
Route::post('/plans-edit-process/{id}', [PlansController::class, 'plans_edit_process'])->name('/plans-edit-process');
Route::get('/founder/newowners/accept/{id}', [founderController::class, 'accept_owner'])->name('/founder/newowners/accept/');
Route::get('/founder/newowners/archive/{id}', [founderController::class, 'archive_owner'])->name('/founder/newowners/archive/');
Route::get('/founder/edit/{id}', [founderController::class, 'founder_edit'])->name('/founder/edit');
Route::post('/founder-edit-process/{id}', [founderController::class, 'founder_edit_process'])->name('/founder-edit-process');
Route::get('/founder/index/plans/choosenplan/{id}/{planname}', [founderController::class, 'choosenplan'])->name('/founder/index/plans/choosenplan');
Route::get('/founder/index/thankyou', [founderController::class, 'thankyou'])->name('/founder/index/thankyou');
Route::get('/founder/index/payement', [founderController::class, 'payement'])->name('/founder/index/payement');
Route::post('/founder/index/pay/{id}', [founderController::class, 'payementinfo'])->name('/founder/index/pay');


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Manage Admins
Route::get('/admin/show', [AdminController::class, 'admin_show'])->name('/admin/show');
Route::get('/admin-add', [AdminController::class, 'add_admin'])->name('/admin-add');
Route::post('/admin-add-process', [AdminController::class, 'add_admin_process'])->name('/admin-add-process');
Route::get('/admin/delete/{id}', [AdminController::class, 'delete_admin'])->name('/admin/delete');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit_admin'])->name('/admin/edit');
Route::post('/admin-edit-process/{id}', [AdminController::class, 'edit_admin_process'])->name('/admin-edit-process');

// Manage Orders
Route::get('/orders/pending', [OrderController::class, 'pendingorders'])->name('/orders/pending');
Route::get('/orders/processing', [OrderController::class, 'processingorders'])->name('/orders/processing');
Route::get('/orders/completed', [OrderController::class, 'completedorders'])->name('/orders/completed');
Route::get('/orders/failed', [OrderController::class, 'failedorders'])->name('/orders/failed');
Route::get('/admin-accept-order/{id}', [OrderController::class, 'acceptorders'])->name('/admin-accept-order');
Route::get('/admin-decline-order/{id}', [OrderController::class, 'declineorders'])->name('/admin-decline-order');
Route::get('/admin-complete-order/{id}', [OrderController::class, 'completeorders'])->name('/admin-complete-order');


// Manage Template
// 1- Manage Footer Template
Route::post('/edit/footer/process/{id}', [TemplateController::class, 'footer_edit_process'])->name('/edit/footer/process');
Route::get('/template/footer/{id}', [TemplateController::class, 'allfooterdata'])->name('/template/footer');

// 2- Manage Home Template
Route::post('/edit/home/title/{id}', [TemplateController::class, 'hometitle_edit_process'])->name('/edit/home/title');
Route::post('/edit/home/description/{id}', [TemplateController::class, 'homedescription_edit_process'])->name('/edit/home/description');
Route::post('/edit/home/storytitle/{id}', [TemplateController::class, 'homestorytitle_edit_process'])->name('/edit/home/storytitle');
Route::post('/edit/home/storyvideo/{id}', [TemplateController::class, 'homestoryvideo_edit_process'])->name('/edit/home/storyvideo');
Route::post('/edit/home/storydescription/{id}', [TemplateController::class, 'homestorydescription_edit_process'])->name('/edit/home/storydescription');
Route::get('/template/home/{id}', [TemplateController::class, 'allhomedata'])->name('/template/home');

// 3- Manage Contact Template
Route::post('/edit/contact/bigtitle/{id}', [TemplateController::class, 'contactbigtitle_edit_process'])->name('/edit/contact/bigtitle');
Route::post('/edit/contact/title/{id}', [TemplateController::class, 'contacttitle_edit_process'])->name('/edit/contact/title');
Route::post('/edit/contact/description/{id}', [TemplateController::class, 'contactdescription_edit_process'])->name('/edit/contact/description');
Route::post('/edit/contact/email/{id}', [TemplateController::class, 'contactemail_edit_process'])->name('/edit/contact/email');
Route::post('/edit/contact/address/{id}', [TemplateController::class, 'contactaddress_edit_process'])->name('/edit/contact/address');
Route::post('/edit/contact/phone/{id}', [TemplateController::class, 'contactphone_edit_process'])->name('/edit/contact/phone');
Route::post('/edit/contact/map/{id}', [TemplateController::class, 'contactmap_edit_process'])->name('/edit/contact/map');
Route::get('/template/contact/{id}', [TemplateController::class, 'allcontactdata'])->name('/template/contact');

// 4- Manage About Template
Route::post('/edit/about/bigtitle/{id}', [TemplateController::class, 'aboutbigtitle_edit_process'])->name('/edit/about/bigtitle');
Route::post('/edit/about/title/{id}', [TemplateController::class, 'abouttitle_edit_process'])->name('/edit/about/title');
Route::post('/edit/about/description/{id}', [TemplateController::class, 'aboutdescription_edit_process'])->name('/edit/about/description');
Route::post('/edit/about/img/{id}', [TemplateController::class, 'aboutimg_edit_process'])->name('/edit/about/img');
Route::post('/edit/about/video/{id}', [TemplateController::class, 'aboutvideo_edit_process'])->name('/edit/about/video');
Route::get('/template/about/{id}', [TemplateController::class, 'allaboutdata'])->name('/template/about');

// Manage Categories
Route::get('/admin/categories', [CategorieController::class, 'categories'])->name('/admin/categories');
Route::get('/add/categorie', [CategorieController::class, 'add_categorie'])->name('/add/categorie');
Route::post('/categorie/add/process', [CategorieController::class, 'categorie_add_process'])->name('/categorie/add/process');
Route::get('/categorie/edit/{id}', [CategorieController::class, 'categorie_edit'])->name('/categorie/edit');
Route::post('/edit/categorie/process/{id}', [CategorieController::class, 'categorie_edit_process'])->name('/edit/categorie/process');
Route::get('/categorie/delete/{id}', [CategorieController::class, 'categorie_delete_process'])->name('/categorie/delete');
// Manage Chefs
Route::get('/admin/chefs', [ChefController::class, 'chefs'])->name('/admin/chefs');
Route::get('/add/chef', [ChefController::class, 'add_chef'])->name('/add/chef');
Route::post('/chef/add/process', [ChefController::class, 'chef_add_process'])->name('/chef/add/process');
Route::get('/chef/edit/{id}', [ChefController::class, 'chef_edit'])->name('/chef/edit');
Route::post('/edit/chef/process/{id}', [ChefController::class, 'chef_edit_process'])->name('/edit/chef/process');
Route::get('/chef/delete/{id}', [ChefController::class, 'chef_delete_process'])->name('/chef/delete');
// Manage Reservations
Route::get('/admin/reservation', [ReservationController::class, 'reservation'])->name('/admin/reservation');
Route::get('/accept-reservation/{reservationId}',[ReservationController::class, 'acceptReservation'])->name('acceptReservation');
Route::get('/decline-reservation/{reservationId}',[ReservationController::class, 'declineReservation'])->name('declineReservation');

// Manage QrCode
Route::get('/admin/qrcode', [QrcodeController::class, 'qrcode']);
Route::post('/generate', [QrcodeController::class, 'generate']);

// Manage waitress
Route::get('/admin/waitress', [AdminController::class, 'waitress'])->name('/admin/waitress');
Route::get('/waitress/coming/{id}', [AdminController::class, 'comming'])->name('/waitress/coming');
Route::get('/waitress/waiting/{id}', [AdminController::class, 'waiting'])->name('/waitress/waiting');

// Manage Sessions
Route::get('/admin/sessions', [SessionController::class, 'allsessions'])->name('/admin/sessions');
// Manage Plats
Route::get('/admin/food-menu', [PlatController::class, 'food_menu'])->name('/admin/food-menu');
Route::get('/add/menu', [PlatController::class, 'add_menu'])->name('/add/menu');
Route::get('/menu/search', 'PlatController@search')->name('/menu/search');
Route::post('/menu/add/process', [PlatController::class, 'menu_add_process'])->name('/menu/add/process');
Route::get('/menu/delete/{id}', [PlatController::class, 'menu_delete_process'])->name('/menu/delete');
Route::get('/menu/edit/{id}', [PlatController::class, 'menu_edit'])->name('/menu/edit');
Route::post('/menu/edit/process/{id}', [PlatController::class, 'menu_edit_process'])->name('/menu/edit/process');
Route::get('/plats/toggle-enable-disable', [PlatController::class, 'toggleEnableDisable'])->name('plats.toggle-enable-disable');
Route::get('/search', [PlatController::class, 'menu_search_process'])->name('search');
Route::get('/qrcode', [PlatController::class, 'generateQRCodeMenu'])->name('/qrcode');

});



require __DIR__.'/auth.php';
