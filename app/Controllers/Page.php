<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller
{
    public function biodata()
    {
        $data = [
            'nama' => 'Muchammad Alief Rizqi Putra Abdillah',
            'nim' => '4123026',
            'prodi' => 'Sistem Informasi',
            'universitas' => 'UNIPDU'
        ];

        return view('biodata', $data);
    }
}
