<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar siswa";
    }
    public function show($id)
    {
        return "Ini adalah halaman detail siswa dengan id: " . $id;
    }
    public function create()
    {
        return "Ini adalah halaman tambah siswa";          
    }
    public function edit($id)
    {
        return "Ini adalah halaman edit siswa dengan id: " . $id;
    }
    public function store(Request $request)
    {
        return "Proses menambah siswa";
    }
    public function update(Request $request, $id)
    {
        return "Proses update siswa dengan id: " . $id;
    }
    public function destroy($id)
    {
        return "Proses hapus siswa dengan id: " . $id;
    }
}
