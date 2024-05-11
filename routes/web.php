<?php


use App\Http\Controllers\LevelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;
use App\Http\Controllers\POSController;
use App\Models\KategoriModel;


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
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
// Route::get('/category', [CategoryController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('/user');
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
Route::get('/level/tambah', [LevelController::class, 'tambah'])->name('/level/tambah');
Route::get('/user/ubah{id}', [UserController::class, 'ubah'])->name('/user/ubah');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
Route::post('/level/tambah_simpan', [LevelController::class, 'tambah_simpan'])->name('/level/tambah_simpan');
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('m_user', POSController::class);

Route::get('kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('kategori/update_save/{id}', [KategoriController::class, 'update_save'])->name('kategori.update_save');
Route::get('kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function (){
    Route::group(['middeware' => ['cek_login:1']], function (){
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middeware' => ['cek_login:1']], function (){
        Route::resource('admin', AdminController::class);
    });

});
