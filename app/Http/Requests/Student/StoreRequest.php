<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis'],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BID'],
            'class' => ['required', 'string']
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'nis.required' => 'Nomor Induk Siswa wajib diisi.',
    //         'nis.string' => 'Nomor Induk Siswa harus berupa teks.',
    //         'nis.size' => 'Nomor Induk Siswa harus terdiri dari 4 karakter.',
    //         'nis.unique' => 'Nomor Induk Siswa sudah digunakan.',

    //         'name.required' => 'Nama Lengkap wajib diisi.',
    //         'name.string' => 'Nama Lengkap harus berupa teks.',

    //         'gender.required' => 'Jenis Kelamin wajib diisi.',
    //         'gender.string' => 'Jenis Kelamin harus berupa teks.',
    //         'gender.in' => 'Jenis Kelamin harus salah satu dari: Laki-laki, Perempuan.',

    //         'major.required' => 'Jurusan wajib diisi.',
    //         'major.string' => 'Jurusan harus berupa teks.',
    //         'major.in' => 'Jurusan harus salah satu dari: AKL, TKJ, BID.',

    //         'class.required' => 'Kelas wajib diisi.',
    //         'class.string' => 'Kelas harus berupa teks.'
    //     ];
    // }


    // public function attributes()
    // {
    //     return [
    //         'nis' => 'Nomor Induk Siswa',
    //         'name' => 'Nama Lengkap',
    //         'gender' => 'Jenis Kelamin',
    //         'major' => 'Jurusan',
    //         'class' => 'Kelas'
    //     ];
    // }
}
