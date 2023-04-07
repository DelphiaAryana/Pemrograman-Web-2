<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function showDataPengguna()
    {
        $data['users'] = User::all();

        return view('data_pengguna', $data);
    }

    public function create()
    {
        return view('tambah_pengguna');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $is_admin = $request->input('is_admin');

        $query = DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'is_admin' => $is_admin
        ]);

        if ($query) {
            return redirect()->route('dashboard.showDataPengguna')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('dashboard.showDataPengguna')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function destroy(int $id)
    {
        $query = DB::table('users')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('dashboard.showDataPengguna')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('dashboard.showDataPengguna')->with('failed', 'Data Gagal Dihapus');
        }
    }

    public function edit(string $id)
    {
        $data['users'] = DB::table('users')->where('id', $id)->first();

        return view('edit_pengguna', $data);
    }

    public function update(Request $request, string $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $is_admin = $request->input('is_admin');

        $query = DB::table('users')->where('id', $id)->update([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'is_admin' => $is_admin
        ]);

        if ($query) {
            return redirect()->route('dashboard.showDataPengguna')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('dashboard.showDataPengguna')->with('failed', 'Data Gagal Diupdate');
        }
    }

    public function showDataSkincare()
    {
        $data['skincare'] = DB::table('skincare')->get();
        return view('data_skincare', $data);

    }

}
