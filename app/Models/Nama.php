<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Nama extends Model
{
    use HasFactory;
    use HasUuid;

    protected $table = "nama";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
