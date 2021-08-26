<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //

    public function index()
    {
        $karyawan = Karyawan::paginate(10);
        return $karyawan;
    }

    public function store()
    {
        $karyawan = new Karyawan;
        $karyawan->nama = request()->nama;
        $karyawan->jabatan = request()->jabatan;
        $karyawan->save();

        return $karyawan;
    }

    public function destroy($uuid)
    {
        $karyawan = Karyawan::firstwhere('uuid', $uuid);
        if($karyawan != null){
            $karyawan->delete();
            return response(['Data Sudah Di hapus']);
        }
        return response(['Data Tidak Di Temukan']);

    }

    public function show($uuid)
    {
        $karyawan = Karyawan::firstWhere('uuid', $uuid);
        if($karyawan != null){
            return $karyawan;
        }
        return ['Data Tidak Di Temukan'];
    }

    public function search($nama)
    {
        $karyawan = Karyawan::firstWhere('nama', $nama);
        if($karyawan != null){
            return $karyawan;
        }
        return ['Data Tidak Ditemukan'];
    }
}
