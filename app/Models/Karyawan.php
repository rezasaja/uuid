<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Karyawan extends Model
{
    use HasFactory;
    use HasUuid;

    protected $table = "karyawan";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
