<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Ini adalah halaman daftar jurusan siswa";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Ini adalah halaman tambah jurusan siswa";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Proses menambah jurusan siswa";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Ini adalah halaman detail jurusan siswa dengan id: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Ini adalah halaman edit jurusan siswa dengan id: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Proses update jurusan siswa dengan id: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Proses hapus jurusan siswa dengan id: " . $id;
    }
}
