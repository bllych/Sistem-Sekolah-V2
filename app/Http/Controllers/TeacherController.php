<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Guru";
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone_number' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone_number' => '081234560002',
                'status' => 'Aktif',
            ],
        ];

        return view('teachers.index', [
            'title' => $title,
            'teachers' => $teachers,
        ]);
    }

    public function show($id)
    {
        $title = "Sistem Sekolah - Detail Guru";
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone_number' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone_number' => '081234560002',
                'status' => 'Aktif',
            ],
        ];

        $teachers = collect($teachers)->firstWhere('id', $id);

        return view('teachers.show', [
            'title' => $title,
            'teacher' => $teachers,
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Guru";

        return view('teachers.create', ['title' => $title]);
    }

    public function edit($id)
    {
        $title = "Sistem Sekolah - Edit Guru";
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone_number' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone_number' => '081234560002',
                'status' => 'Aktif',
            ],
        ];

        $teachers = collect($teachers)->firstWhere('id', $id);

        return view('teachers.edit', [
            'title' => $title,
            'teacher' => $teachers,
        ]);
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
