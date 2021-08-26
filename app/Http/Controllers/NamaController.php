<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nama;

class NamaController extends Controller
{
    public function index()
    {
        $nama = Nama::paginate(15);
        return $nama;
    }

    public function store()
    {
        $nama = new Nama;
        $nama->nama = request()->nama;
        $nama->alamat = request()->alamat;
        $nama->save();

        return $nama;
    }

    public function destroy($uuid)
    {
        $nama = Nama::firstwhere('uuid', $uuid);
        if($nama != null){
            $nama->delete();
            return response(['Data Sudah Di Hapus']);
        }
        return response(['Data Tidak Ada']);
    }

    public function show($uuid)
    {
        $nama = Nama::firstWhere('uuid', $uuid);
        if($nama != null){
            return $nama;
        }
        return ['Data Tidak Di Temukan'];
    }

    public function search($nama)
    {
        $nama = Nama::firstWhere('nama', $nama);
        if($nama != null){
            return $nama;
        }
        return ['Data Tidak Ditemukan'];
    }
}
