<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";

        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])
            ->get();


        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    
    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";
        return view('students.create', ['title' => $title]);
    }
        
    public function store(StoreRequest $request)
    {
        // Validasi
        $validatedRequest = $request->validated();

        // Tambahkan Data ke Database
        Student::create($validatedRequest);

        // Handle If Success
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function show(Student $student)
    {
        $title = "Sistem Sekolah - Detail Siswa";
        

        return view('students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function edit(Student $student)
    {
        $title = "Sistem Sekolah - Edit Siswa";

        return view('students.edit', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function update(Student $student, UpdateRequest $request)
    {
        // Validasi
        $validatedRequest = $request->validated();

        // Update Data ke Database
        $student->update($validatedRequest);

        // Handle If Success
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Student $student)
    {
        // Delete Data from Database
        $student->delete();

        // Handle If Success
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil dihapus');
    }
}