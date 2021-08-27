<?php

namespace Services;

use App\Models\Karyawan;

class KaryawanService
{
    public function getPaginate($page = 10)
    {
        return Karyawan::paginate($page);
    }

    public function getAll()
    {
        return Karyawan::get();
    }

    public function find($uuid)
    {
        $karyawan = Karyawan::findByUuid($uuid)->first();
        if($karyawan) return $karyawan;
        else return ['data' => 'not found'];
    }

    public function findName($nama)
    {
        $karyawan = Karyawan::findByNama($nama)->first();
        if($karyawan) return $karyawan;
        else return ['data' => 'not found'];
    }

    public function save($uuid = null)
    {
        if($uuid){
            $karyawan = $this->find($uuid);
        }else{
            $karyawan = new Karyawan;
        }
        $karyawan->nama = request()->nama;
        $karyawan->jabatan = request()->jabatan;
        $karyawan->save();

        return $karyawan;
    }

    public function delete($uuid)
    {
        $karyawan = Karyawan::findByUuid($uuid)->first();
        if($karyawan){
            $karyawan->delete();
            return $karyawan;
        }
        return ['data' => 'not found'];
    }
}
