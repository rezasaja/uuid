<?php

namespace App\Http\Controllers;
// use App\Models\Karyawan;
use App\Http\Controllers\Controller;
use App\Http\Resources\KaryawanResource;
use App\Http\Resources\KaryawanCollection;

// di composer.json buat aktifkan namespace services
use Facades\Services\KaryawanService as Karyawan;
// lalu composer dump-autoload

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //

    public function index()
    {
        $karyawan = Karyawan::GetPaginate();
        return new KaryawanCollection($karyawan);
    }

    public function list()
    {
        $karyawan = Karyawan::getAll();
        return new KaryawanCollection($karyawan);
    }

    public function store()
    {
        return Karyawan::save();
        // $karyawan = $this->save();
        // return $karyawan;
    }

    public function update($uuid)
    {
        return Karyawan::save($uuid);
        // $karyawan = $this->save($uuid);
        // return $karyawan;
    }

    // public function save($uuid = null)
    // {
    //     if($uuid){
    //         $karyawan = Karyawan::firstWhere('uuid', $uuid);
    //     }else{
    //         $karyawan = new Karyawan;
    //     }
    //     $karyawan->nama = request()->nama;
    //     $karyawan->jabatan = request()->jabatan;
    //     $karyawan->save();

    //     return response()->json([
    //         'message' => 'Data Di Simpan',
    //         'Data' => $karyawan
    //     ], 201);


    // }
    public function destroy($uuid)
    {

        return Karyawan::delete($uuid);
        // $karyawan = Karyawan::firstwhere('uuid', $uuid);
        // if($karyawan != null){
        //     $karyawan->delete();
        //     return response(['Data Sudah Di hapus']);
        // }
        // return response(['Data Tidak Di Temukan']);

    }

    public function show($uuid)
    {
        return Karyawan::find($uuid);
        // $karyawan = Karyawan::firstWhere('uuid', $uuid);
        // if($karyawan != null){
        //     return $karyawan;
        // }
        // return ['Data Tidak Di Temukan'];
    }

    public function search($nama)
    {
        return Karyawan::findName($nama);
        // $karyawan = Karyawan::where('nama', $nama);
        // if($karyawan != null){
        //     return $karyawan;
        // }
        // return ['Data Tidak Ditemukan'];
    }

}
