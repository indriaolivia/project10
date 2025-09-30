<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{

    private $fakultas = [
        ["kode" => "FRI", "nama_fakultas" => "Fakultas Rekayasa Industri"],
        ["kode" => "FTE", "nama_fakultas" => "Fakultas Teknik Elektro"],
        ["kode" => "FIF", "nama_fakultas" => "Fakultas Informatika"],
        ["kode" => "FEB", "nama_fakultas" => "Fakultas Ekonomi dan Bisnis"],
        ["kode" => "FIK", "nama_fakultas" => "Fakultas Industri Kreatif"],
        ["kode" => "FIT", "nama_fakultas" => "Fakultas Ilmu Terapan"],
    ];

    // Web Route → tampilkan tabel HTML
    public function index()
    {
        $fakultas = $this->fakultas;
        return view('fakultas', compact('fakultas'));
    }

    // API Route → tampilkan JSON
    public function api()
    {
        return response()->json($this->fakultas);
    }
}
