<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar guru";
    }
    public function show($id)
    {
        return "Ini adalah halaman detail guru dengan id: " . $id;
    }
    public function create()
    {
        return "Ini adalah halaman tambah guru";          
    }
    public function edit($id)
    {
        return "Ini adalah halaman edit guru dengan id: " . $id;
    }
    public function store(Request $request)
    {
        return "Proses menambah guru";
    }
    public function update(Request $request, $id)
    {
        return "Proses update guru dengan id: " . $id;
    }
    public function destroy($id)
    {
        return "Proses hapus guru dengan id: " . $id;
    }
}
