<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nama extends Model
{
    use HasFactory;
    use HasUuid;
    use SoftDeletes;

    protected $table = "nama";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
