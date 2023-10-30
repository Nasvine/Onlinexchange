<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LangController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('accueuil.index');
});

Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');




Route::get('/vue', function () {
    return view('users.dashboard-crypto');
});
Route::get('/contact', function () {
    return view('users.contacts-profile');
});
Route::get('/leading', function () {
    return view('users.crypto-lending');
});
Route::get('/achat_vente', function () {
    return view('users.crypto-buy-sell');
});
Route::get('/kyc', function () {
    return view('users.crypto-kyc-application');
});
Route::get('/table_basic', function () {
    return view('users.tables-basic');
});
Route::get('/icons', function () {
    return view('users.icons-fontawesome');
});
Route::get('/trans', function () {
    return view('users.crypto-exchange');
});
Route::get('/trans1', function () {
    return view('users.crypto-orders');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.layouts.admin');
})->name('admin');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//Leading Page
                

Route::resource('accueils', App\Http\Controllers\AccueilController::class)->names([
    'index'   =>  "accueil.admin.index",
    'create'  =>  "accueil.admin.create",
    'store'   =>  "accueil.admin.store",
    'show'    =>  "accueil.admin.show",
    'edit'    =>  "accueil.admin.edit",
    'update'  =>  "accueil.admin.update",
    'destroy' =>  "accueil.admin.destroy",
]);






/* Les routes de l'admin */

//Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
//Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);


Route::middleware(['auth','administrateurs'])->prefix('administrateurs')->group(function () {
    
    Route::get('/index_admin', [GeneralController::class, 'index_admin'])->name('administration');

    Route::get('/superadmin', function () {
        return view('superadmin.layouts.superadmin');
    });
  
    
    Route::resource('users', App\Http\Controllers\admin\users\UserController::class)->names([
        'index'   =>  "user.admin.index",
        'create'  =>  "user.admin.create",
        'store'   =>  "user.admin.store",
        'show'    =>  "user.admin.show",
        'edit'    =>  "user.admin.edit",
        'update'  =>  "user.admin.update",
        'destroy' =>  "user.admin.destroy",
    ]);
    
    Route::resource('roles', App\Http\Controllers\admin\roles\RoleController::class)->names([
        'index'   =>  "role.admin.index",
        'create'  =>  "role.admin.create",
        'store'   =>  "role.admin.store",
        'show'    =>  "role.admin.show",
        'edit'    =>  "role.admin.edit",
        'update'  =>  "role.admin.update",
        'destroy' =>  "role.admin.destroy",
    ]);
    
    Route::resource('permissions', App\Http\Controllers\admin\permissions\PermissionController::class)->names([
        'index'   =>  "permission.admin.index",
        'create'  =>  "permission.admin.create",
        'store'   =>  "permission.admin.store",
        'show'    =>  "permission.admin.show",
        'edit'    =>  "permission.admin.edit",
        'update'  =>  "permission.admin.update",
        'destroy' =>  "permission.admin.destroy",
    ]);

    Route::resource('verificationcomptes', App\Http\Controllers\admin\verification\VerificationCompteController::class)->names([
        'index'   =>  "verificationcompte.users.index",
        'create'  =>  "verificationcompte.users.create",
        'store'   =>  "verificationcompte.users.store",
        'show'    =>  "verificationcompte.users.show",
        'edit'    =>  "verificationcompte.users.edit",
        'update'  =>  "verificationcompte.users.update",
        'destroy' =>  "verificationcompte.users.destroy",
    ]);
    
    Route::any('verificationcomptes/confirmer/{id}', [App\Http\Controllers\admin\verification\VerificationCompteController::class,'confirmer'])->name('verificationcompte.users.confirmer');
    Route::any('verificationcomptes/refuser/{id}', [App\Http\Controllers\admin\verification\VerificationCompteController::class,'rejete'])->name('verificationcompte.users.rejete');
    
    Route::resource('monnaires', App\Http\Controllers\admin\monnaire\MonnaireController::class)->names([
        'index'   =>  "monnaire.admin.index",
        'create'  =>  "monnaire.admin.create",
        'store'   =>  "monnaire.admin.store",
        'show'    =>  "monnaire.admin.show",
        'edit'    =>  "monnaire.admin.edit",
        'update'  =>  "monnaire.admin.update",
        'destroy' =>  "monnaire.admin.destroy",
    ]);
                    
});   



//Les routes d'un utilisateur

Route::middleware(['auth', 'utilisateurs'])->prefix('utilisateurs')->group(function () {
    Route::get('/index_users', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
   # Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index_users');
    //Language Translation
   # Route::get('index_users/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);


    Route::resource('transactions', App\Http\Controllers\users\transaction\TransactionController::class)->names([
        'index'   =>  "transaction.users.index",
        'create'  =>  "transaction.users.create",
        'store'   =>  "transaction.users.store",
        'show'    =>  "transaction.users.show",
        'edit'    =>  "transaction.users.edit",
        'update'  =>  "transaction.users.update",
        'destroy' =>  "transaction.users.destroy",
    ]);

    Route::resource('profiles', App\Http\Controllers\users\profiles\ProfileController::class)->names([
        'index'   =>  "profile.users.index",
        'create'  =>  "profile.users.create",
        'store'   =>  "profile.users.store",
        'show'    =>  "profile.users.show",
        'edit'    =>  "profile.users.edit",
        'update'  =>  "profile.users.update",
        'destroy' =>  "profile.users.destroy",
    ]);

    Route::resource('achats', App\Http\Controllers\users\achats\AchatController::class)->names([
        'index'   =>  "achat.users.index",
        'create'  =>  "achat.users.create",
        'store'   =>  "achat.users.store",
        'show'    =>  "achat.users.show",
        'edit'    =>  "achat.users.edit",
        'update'  =>  "achat.users.update",
        'destroy' =>  "achat.users.destroy",
    ]);

    Route::resource('ventes', App\Http\Controllers\users\ventes\VenteController::class)->names([
        'index'   =>  "vente.users.index",
        'create'  =>  "vente.users.create",
        'store'   =>  "vente.users.store",
        'show'    =>  "vente.users.show",
        'edit'    =>  "vente.users.edit",
        'update'  =>  "vente.users.update",
        'destroy' =>  "vente.users.destroy",
    ]);

    Route::resource('retraits', App\Http\Controllers\users\retraits\RetraitController::class)->names([
        'index'   =>  "retrait.users.index",
        'create'  =>  "retrait.users.create",
        'store'   =>  "retrait.users.store",
        'show'    =>  "retrait.users.show",
        'edit'    =>  "retrait.users.edit",
        'update'  =>  "retrait.users.update",
        'destroy' =>  "retrait.users.destroy",
    ]);

    Route::resource('parrainages', App\Http\Controllers\users\parrainage\ParrainageController::class)->names([
        'index'   =>  "parrainage.users.index",
        'create'  =>  "parrainage.users.create",
        'store'   =>  "parrainage.users.store",
        'show'    =>  "parrainage.users.show",
        'edit'    =>  "parrainage.users.edit",
        'update'  =>  "parrainage.users.update",
        'destroy' =>  "parrainage.users.destroy",
    ]);

    Route::resource('contacts', App\Http\Controllers\users\contact\ContactController::class)->names([
        'index'   =>  "contact.users.index",
        'create'  =>  "contact.users.create",
        'store'   =>  "contact.users.store",
        'show'    =>  "contact.users.show",
        'edit'    =>  "contact.users.edit",
        'update'  =>  "contact.users.update",
        'destroy' =>  "contact.users.destroy",
    ]);

    Route::resource('verifications', App\Http\Controllers\users\verification\VerificationIdController::class)->names([
        'index'   =>  "verification.users.index",
        'create'  =>  "verification.users.create",
        'store'   =>  "verification.users.store",
        'show'    =>  "verification.users.show",
        'edit'    =>  "verification.users.edit",
        'update'  =>  "verification.users.update",
        'destroy' =>  "verification.users.destroy",
    ]);

});










require __DIR__.'/auth.php';

Route::get('/clearall', function () {
    Artisan::call('optimize');
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    return 'Routes Optimize , Route , View ,  Config , Cache exécute';
})->name('bestclear');
