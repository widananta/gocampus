<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class siswa extends Model
{
    use SoftDeletes;
    protected $table = "siswa_migration";
    protected $fillable = ['nama', 'kelas', 'jenkel', 'umur', 'alamat', 'foto'];
    protected $dates = ['deleted_at'];
    // protected $guarded = []; //tambahkan baris ini
}
 