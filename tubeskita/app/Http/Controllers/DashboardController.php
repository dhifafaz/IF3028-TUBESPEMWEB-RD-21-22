<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Models\Laporan;
use App\Models\Comment;
use App\Models\set_city;
use App\Models\set_library;
use App\Models\set_province;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $listKategori = set_library::where('category_id', '13')->orderBy('name', 'asc')->get();
        
        return view('dashboard.home', [
            'title' => 'Dashboard',
            'listKategori' => $listKategori,
        ]);
    }
    
    public function submit(Request $request)
    {
        // return $request->file('lampiran')->store('lampiran');
        // dd($request->all()); 
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'tgl_kejadian'=> 'required',
            'category' => 'required',  
        ]);

        $lapor                          = new Laporan;
        $lapor->title                   = $request->title;
        $lapor->description             = $request->description;
        $lapor->anonim                  = $request->anonim;
        $lapor->user_id                 = $request->user_id;
        $lapor->category_id             = $request->category;
        $lapor->laporan_type_id         = $request->type_laporan;
        $lapor->status_id               = 1201;
        $lapor->tgl_kejadian            = $request->tgl_kejadian;

        if($lapor->save()){
            // return "berhasil";
            return redirect()->back()->with('success', 'Berhasil insert data');
        } else return redirect()->back()->with('danger', 'Gagal insert data');
    }
    
}
