<?php

use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

 
// Manajemen Data Siswa (Action Controller Method)
Route::name('students.')->prefix('students')->group(function() {
// Halaman daftar siswa
Route::get('/', [StudentController::class, 'index'])->name('index');
// Halaman detail siswa
Route::get('/{id}', [StudentController::class, 'show'])->name('show');
// Halaman tambah siswa
Route::get('/create', [StudentController::class, 'create'])->name('create');
// Halaman edit siswa
Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');
// Halaman menambah siswa
Route::post('/store', [StudentController::class, 'store'])->name('store');
// Halaman update siswa
Route::put('/{id}/update', [StudentController::class, 'update'])->name('update');
// Halaman hapus siswa
Route::delete('/{id}/destroy', [StudentController::class, 'destroy'])->name('destroy');
});

// Manajemen Data Guru (Action Controller Method)
Route::name('teachers.')->prefix('teachers')->group(function() {
Route::get('/', [TeacherController::class, 'index'])->name('index');
Route::get('/{id}', [TeacherController::class, 'show'])->name('show');
// Halaman tambah guru
Route::get('/create', [TeacherController::class, 'create']  )->name('create');
// Halaman edit guru
Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');
// Halaman menambah guru
Route::post('/store', [TeacherController::class, 'store'])->name('store');
// Halaman update guru
Route::put('/{id}/update', [TeacherController::class, 'update'])->name('update');
// Halaman hapus guru   
Route::delete('/{id}/destroy', [TeacherController::class, 'destroy'])->name('destroy');
});

// Manajemen Data Kelas (Invokable Controller)
Route::name('schoolclass.')->prefix('schoolclasses')->group(function() {

Route::get('/', IndexController::class)->name('index');
// Halaman detail kelas
Route::get('/{id}', ShowController::class)->name('show');
// Halaman tambah kelas
Route::get('/create', CreateController::class)->name('create');
// Halaman edit kelas
Route::get('/{id}/edit', EditController::class)->name('edit');
// Halaman menambah kelas
Route::post('/store', StoreController::class)->name('store');
// Halaman update kelas
Route::put('/{id}/update', UpdateController::class)->name('update');
// Halaman hapus kelas
Route::delete('/{id}/destroy', DestroyController::class)->name('destroy');

});

// Manajemen Jurusan Siswa (Resource Controller)
Route::resource('majors', \App\Http\Controllers\MajorController::class);