<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uuid;

class UuidController extends Controller
{
    public function index()
    {
        $uuid = Uuid::paginate(5);
        return $uuid;
    }

    public function store()
    {
        $uuid = new Uuid;
        $uuid->nama = request()->nama;
        $uuid->alamat = request()->alamat;
        $uuid->save();
        return $uuid;
    }
}
