<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pt extends Model
{
    protected $table = "pts";
    protected $fillable = ['nama_kampus', 'singkatan', 'kota'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
