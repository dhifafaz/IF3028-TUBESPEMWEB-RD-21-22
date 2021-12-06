<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

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
            'listKategori' => $listKategori,
        ]);
    }
    
    public function submit(Request $request)
    {
        dd($request->all()); 
        // $this->validate($request, [
        //     'title' => 'required',
        //     'laporan' => 'required|min:20',
        //     'tgl_kejadian'=> 'required',
        //     'location'=> 'required',
        //     'instansi_tujuan'=> 'required',
        //     'category' => 'required',  
        // ]);

        // $lapor                          = new Lapor;
        // $lapor->laporan_type_id         = $request->type_laporan;
        // $lapor->title                   = $request->title;
        // $lapor->description             = $request->laporan;
        // $lapor->tgl_kejadian            = $request->tgl_kejadian;
        // $lapor->instansi_tujuan_id      = $request->instansi_tujuan;
        // $lapor->category_id             = $request->category;
        // $lapor->anonim                  = $request->anonim;
        // $lapor->secret                  = $request->rahasia; 
        // $lapor->location_id             = $request->location;
        // $lapor->user_id                 = $request->user_id;
        // $lapor->status_id               = 1201;

        // dd($lapor); 
    }
    
}
