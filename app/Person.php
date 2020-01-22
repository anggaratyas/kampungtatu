<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    protected $guarded =[];

    use SoftDeletes;

    protected $fillable = [
        'nik', 
        'kk', 
        'nama_lengkap', 
        'tempat_lahir', 
        'tgl_lahir', 
        'alamat', 
        'rt', 
        'rw', 
        'avatar'
    ];

    public function dashboard()
    {
        return $this->hasMany(Dashboard::class);
    }

    public function administrator()
    {
        return $this->hasMany(Administrator::class);
    }
    public function management()
    {
        return $this->hasMany(Management::class);
    }
    public function official()
    {
        return $this->hasMany(Official::class);
    }
}
