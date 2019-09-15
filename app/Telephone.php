<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    protected $table = 'telephone', $primaryKey = 'id_siswa', $fillable = ['id_siswa', 'nomor_telepon'];

    // Relationship one to one with student
    public function student()
    {
        return $this->belongsTo('App\Student', 'id_siswa');
    }
}
