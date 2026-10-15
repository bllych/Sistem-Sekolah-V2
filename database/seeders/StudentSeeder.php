<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['nis' => '1001', 'name' => 'Billyy', 'gender' => 'Laki-laki', 'class' => '12 TKJ 1', 'major' => 'TKJ'],
            ['nis' => '1002', 'name' => 'Budi', 'gender' => 'Laki-laki', 'class' => '12 AKL 1', 'major' => 'AKL'],
            ['nis' => '1003', 'name' => 'Ninanina', 'gender' => 'Perempuan', 'class' => '12 BiD 1', 'major' => 'BiD'],
        ];

        Student::upsert($students, ['nis'], ['name', 'gender', 'class', 'major']);
    }
}
