<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
$nama= 'Wafiq Wardatul Khairani';

        $projects = [
            [
                'nama' => 'SBL Website',
                'tahun' => 2025,
                'status' => 'Selesai'
            ],
            [
                'nama' => 'HSBL Admin',
                'tahun' => 2024,
                'status' => 'Selesai'
            ],
            [
                'nama' => 'OpenSID Desa Cantik',
                'tahun' => 2024,
                'status' => 'Selesai'
            ]
        ];

        return view('public.home', compact('nama', 'projects'));
    }
}
