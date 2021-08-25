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

    public function destroy($id)
    {
        $nama = Nama::find($id);
        $nama->delete();
        return response(['Data Sudah Di Hapus']);
    }
}
