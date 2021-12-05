<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lapor;
use App\Models\Comment;
use App\Models\set_city;
use App\Models\set_library;
use App\Models\set_province;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $listLokasi = set_city::orderBy('name', 'asc')->get();
        $listInstansi = set_province::orderBy('name', 'asc')->get();
        $listKategori = set_library::where('category_id', '13')->orderBy('name', 'asc')->get();
        return view('dashboard.home', [
            'title' => 'Dashboard',
            'listLokasi' => $listLokasi,
            'listInstansi' => $listInstansi,
            'listKategori' => $listKategori
        ]);
    }
}
