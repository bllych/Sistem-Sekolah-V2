<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII AKL 1',
                'major' => 'AKL'
            ],
            [
                'id' => 3,
                'nis' => '1003',
                'name' => 'Citra',
                'class' => 'XII RPL 1',
                'major' => 'RPL'
            ]
            
        ];
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

    public function store(Request $request)
    {
        return "Melakukan proses tambah data siswa";
    }

    public function show($id)
    {
       $title = "Sistem Sekolah - Detail Siswa";
    $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII AKL 1',
                'major' => 'AKL'
            ],
            [
                'id' => 3,
                'nis' => '1003',
                'name' => 'Citra',
                'class' => 'XII RPL 1',
                'major' => 'RPL'
            ]
        
        ];

        $students = collect($students)->firstWhere('id', $id);
        return view('students.show', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function edit($id)
    {
        $title = "Sistem Sekolah - Edit Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII AKL 1',
                'major' => 'AKL'
            ],
            [
                'id' => 3,
                'nis' => '1003',
                'name' => 'Citra',
                'class' => 'XII RPL 1',
                'major' => 'RPL'
            ]
        
        ];

        $students = collect($students)->firstWhere('id', $id);
        return view('students.edit', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function update(Request $request, $id)
    {
        return "Melakukan perubahan data siswa";
    }

    public function destroy($id)
    {
        return "Menghapus data siswa";
    }
}