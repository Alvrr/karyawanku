<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Livewire Components
use App\Livewire\Employe\EmployeComponent;
use App\Livewire\Employe\EmployeAddComponent;
use App\Livewire\Employe\EmployeEditComponent;
use App\Livewire\Employe\EmployeDetailComponent;
use App\Livewire\Position\PositionComponent;
use App\Livewire\Position\PositionEditComponent;
use App\Livewire\Position\PositionAddComponent;
use App\Livewire\Department\DepartmentComponent;
use App\Livewire\Department\DepartmentAddComponent;
use App\Livewire\Department\DepartmentEditComponent;
use App\Livewire\Profile\ProfileComponent;
use App\Livewire\Profile\ProfileAddComponent;
use App\Livewire\Profile\ProfileEditComponent;
use App\Livewire\Profile\ProfileDetailComponent;
use App\Livewire\Users\UserComponent;
use App\Livewire\Users\NormalUserComponent;
use App\Livewire\Users\UserEditComponent;
use App\Livewire\DashboardComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute-rute
| ini dimuat oleh RouteServiceProvider dalam grup yang berisi grup "web".
| Sekarang buatlah sesuatu yang hebat!
|
*/

// Rute untuk halaman login
Route::get('/login', function () {
    return view('login');
});

// Autentikasi Login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('aksilogin', [LoginController::class, 'aksilogin'])->name('aksilogin');
Route::post('logout', [LoginController::class, 'aksilogout'])->name('aksilogout');  

// Rute untuk registrasi
Route::get('reg', [RegisterController::class, 'index'])->name('register');
Route::get('reg-admin', [RegisterController::class, 'index2'])->name('register.admin');
Route::post('aksireg', [RegisterController::class, 'aksireg'])->name('aksireg');

// Rute untuk komponen Livewire Employe
Route::get('all-employe', EmployeComponent::class)->name('employe.all');
Route::get('add-employe', EmployeAddComponent::class)->name('employe.add');
Route::get('edit-employe/{employe_id}', EmployeEditComponent::class)->name('employe.edit');
Route::get('detail-employe/{employe_id}', EmployeDetailComponent::class)->name('employe.detail');

// Rute untuk komponen Livewire Department
Route::get('all-department', DepartmentComponent::class)->name('department.all');
Route::get('add-department', DepartmentAddComponent::class)->name('department.add');
Route::get('edit-department/{department_id}', DepartmentEditComponent::class)->name('department.edit');

// Rute untuk komponen Livewire Position
Route::get('all-position', PositionComponent::class)->name('position.all');
Route::get('add-position', PositionAddComponent::class)->name('position.add');
Route::get('edit-position/{position_id}', PositionEditComponent::class)->name('position.edit');

// Rute untuk komponen Livewire Profile
Route::get('all-profile', ProfileComponent::class)->name('profile.all');
Route::get('add-profile', ProfileAddComponent::class)->name('profile.add');
Route::get('edit-profile/{employe_id}', ProfileEditComponent::class)->name('profile.edit');
Route::get('detail-profile/{employe_id}', ProfileDetailComponent::class)->name('profile.detail');

// Rute untuk komponen Livewire User
Route::get('all-users', UserComponent::class)->name('users.all');
Route::get('edit-users/{user_id}', UserEditComponent::class)->name('users.edit');
Route::get('all-normalUser', NormalUserComponent::class)->name('users.normal');

// Rute untuk komponen Dashboard
Route::get('dashboard-component', DashboardComponent::class)->name('dashboard.all');

// Rute-rute lama yang tidak digunakan
// Rute admin
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

// Rute user
// Route::get('/home', function () {
//     return view('user.home');
// });
// Route::get('/profile', function () {
//     return view('user.profile');
// });
