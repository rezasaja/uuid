<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use App\Http\Resources\KaryawanResource;
use App\Http\Resources\KaryawanCollection;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //

    public function index()
    {
        $karyawan = Karyawan::paginate(5);
        return new KaryawanCollection($karyawan);
    }

    public function list()
    {
        $karyawan = Karyawan::get();
        return new KaryawanCollection($karyawan);
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
        $karyawan = Karyawan::where('nama', $nama);
        if($karyawan != null){
            return $karyawan;
        }
        return ['Data Tidak Ditemukan'];
    }

 public function update($uuid)
 {
     $karyawan = Karyawan::firstWhere('uuid', $uuid);
     if($karyawan != null){
         $karyawan->update();
         return $karyawan;
     }
     return ['Data Tidak Di Temukan'];
 }
}
