<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Laporan;

class HomeController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        // $listLaporan = Laporan::orderBy('created_at', 'desc')->paginate(5)->get();
        // $listLaporan = DB::table('laporans');

        return view('home.home', [
            'title' => 'Home',
            'listLaporan' => Laporan::search(request(['search']))->orderBy('created_at', 'desc')->paginate(5)
        ]);
    }
}
