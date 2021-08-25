<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use HasFactory;
    use HasUuid;
    use softDeletes;

    protected $table = "karyawan";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
