<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skincare;
use Illuminate\Support\Facades\DB;
use App\Models\Uploads;
use Illuminate\Support\Facades\Validator;

class DataSkincare extends Controller
{
    public function index()
    {
        return view('data_skincare');
    }

    public function create()
    {
        return view('tambah_skincare');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required|image|mimes:jpg,png,webp,jpeg,gif,svg',
            'fungsi' => 'required',
            'harga' => 'required'
        ]);
        if ($request->file('image')) {    
            $validateDate['image']=$request->file('image')->store('public/app/images');        
        }

        $nama = $request->input('nama');
        $image = $request->file('image')->store('images');
        $fungsi = $request->input('fungsi');
        $harga = $request->input('harga');

        $query = DB::table('skincare')->insert([
            'nama' => $nama,
            'image' => $image,
            'fungsi' => $fungsi,
            'harga' => $harga
        ]);

        if ($query) {
            return redirect()->route('dashboard.showDataSkincare')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('dashboard.showDataSkincare')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function destroy(int $id)
    {
        $query = DB::table('skincare')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('dashboard.showDataSkincare')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('dashboard.showDataSkincare')->with('failed', 'Data Gagal Dihapus');
        }
    }

    public function edit(string $id)
    {
        $data['skincare'] = DB::table('skincare')->where('id', $id)->first();

        return view('edit_skincare', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required|image|mimes:jpg,png,webp,jpeg,gif,svg',
            'fungsi' => 'required',
            'harga' => 'required'
        ]);
        if ($request->file('image')) {    
            $validateDate['image']=$request->file('image')->store('public/app/images');        
        }

        $nama = $request->input('nama');
        $image = $request->file('image')->store('images');
        $fungsi = $request->input('fungsi');
        $harga = $request->input('harga');

        $query = DB::table('skincare')->where('id', $id)->update([
            'nama' => $nama,
            'fungsi' => $fungsi,
            'image' => $image,
            'harga' => $harga
        ]);

        if ($query) {
            return redirect()->route('dashboard.showDataSkincare')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('dashboard.showDataSkincare')->with('failed', 'Data Gagal Diupdate');
        }
    }
}
