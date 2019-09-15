<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';

    // create mass assignment
    protected $fillable = [
        'nisn',
        'nama_siswa',
        'tanggal_lahir',
        'jenis_kelamin'
    ];

    protected $dates = ['tanggal_lahir'];

    // Relationship one to one with telephone
    public function telephone()
    {
        return $this->hasOne('App\Telephone', 'id_siswa');
    }
    
    // Mutator Name
    public function setNamaSiswaAttribute($nama_siswa)
    {
        $this->attributes['nama_siswa'] = strtolower($nama_siswa);
    }
    
    // Accessor Name
    public function getNamaSiswaAttribute($nama_siswa)
    {
        return ucwords($nama_siswa);
    }

}
