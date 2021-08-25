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

    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return response(['Data Sudah Di Hapus']);
    }
}
