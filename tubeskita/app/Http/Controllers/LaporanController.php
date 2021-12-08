<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Models\Laporan;
use App\Models\set_library;


class LaporanController extends Controller
{
    public function index()
    {

        $listCategory = set_library::where('category_id', '13')->orderBy('name', 'asc')->get();
        
        return view('laporan.lapor', [
            'title' => 'Lapor',
            'listCategory' => $listCategory,
        ]);
    }
    
    public function submit(Request $request)
    {
        // return $request->file('lampiran')->store('lampiran');
        // dd($request->all()); 
        $filename = '';
        if($request->file('lampiran')){
            // $validated['lampiran'] = $request->file('lampiran')->getClientOriginalName()->store('lampiran');
            $request->file('lampiran')->move('storage/lampiran', $request->file('lampiran')->getClientOriginalName());
            $filename = $request->file('lampiran')->getClientOriginalName();
        }
        else{
            $filename = null;
        }

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required|min:50',
            'tgl_kejadian'=> 'required',
            'category_id' => 'required',   
        ]);


        Laporan::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'lampiran' => $filename,
            'anonim' => $request->anonim,
            'tgl_kejadian' => $validated['tgl_kejadian'],
            'user_id' => $request->user_id,
            'category_id' => $validated['category_id'],
            'laporan_type_id' => $request->laporan_type_id,
            'status_id' => $request->status_id,
        ]);

        return redirect()->back()->with('success', 'Berhasil insert data');

        // $lapor                          = new Laporan;
        // $lapor->title                   = $request->title;
        // $lapor->description             = $request->description;
        // $lapor->anonim                  = $request->anonim;
        // $lapor->user_id                 = $request->user_id;
        // $lapor->category_id             = $request->category;
        // $lapor->laporan_type_id         = $request->type_laporan;
        // $lapor->status_id               = 1201;
        // $lapor->tgl_kejadian            = $request->tgl_kejadian;

        // if($lapor->save()){
        //     // return "berhasil";
        //     return redirect()->back()->with('success', 'Berhasil insert data');
        // } else return redirect()->back()->with('danger', 'Gagal insert data');
    }
    
    public function show(Laporan $id)
    {
        // $laporan = DB::table('laporans')->where('id', $id)->get();
        return view('detail.detailLaporan', [
            'title' => 'Detail',
            'laporan' => $id,
        ]);
    }

    public function destroy($id)
    {
        // $id->delete();
        Laporan::where('id', $id)->delete();
        return redirect('/home')->with('success', 'Berhasil delete data');
    }

    public function edit($id)
    {
        $laporan = Laporan::find($id);
        $listCategory = set_library::where('category_id', '13')->orderBy('name', 'asc')->get();
        return view('laporan.edit', [
            'title' => 'Edit',
            'laporan' => $laporan,
            'listCategory' => $listCategory,
        ]);
    }

    public function update(Request $request, $id)
    {
        // $laporan = Laporan::find($id);
        // $laporan->title = $request->title;
        // $laporan->description = $request->description;
        $filename = '';
        if($request->file('lampiran')){
            // $validated['lampiran'] = $request->file('lampiran')->getClientOriginalName()->store('lampiran');
            $request->file('lampiran')->move('storage/lampiran', $request->file('lampiran')->getClientOriginalName());
            $filename = $request->file('lampiran')->getClientOriginalName();
        }
        else{
            $filename = Laporan::find($id)->lampiran;
        }

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required|min:50',
            'tgl_kejadian'=> 'required',
            'category_id' => 'required',   
        ]);

        Laporan::where('id', $id)->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'lampiran' => $filename,
            'anonim' => $request->anonim,
            'tgl_kejadian' => $validated['tgl_kejadian'],
            'user_id' => $request->user_id,
            'category_id' => $validated['category_id'],
            'laporan_type_id' => $request->laporan_type_id,
            'status_id' => $request->status_id,
        ]);

        return redirect('/home/detail/'.$id.'')->with('success', 'Berhasil update laporan');

    }
}
